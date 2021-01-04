<?php

namespace App\Http\Controllers\Api\Restaurant;

use App\Comment;
use App\CommentLike;
use App\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\Account\ChangePasswordRequest;
use App\Http\Requests\Account\LoginRequest;
use App\Http\Requests\Account\RegisterRequest;
use App\Restaurant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Mockery\Exception;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;

class RestaurantController extends Controller
{
    public function getNearestRes(Request $request)
    {
        try {
            $user_location = is_array($request->user_location) ? $request->user_location : json_decode($request->user_location);
            if (!isset($user_location)) {
                return [
                    'success' => false,
                    'message' => __('no_location_permission')
                ];
            }

            $limit = $request->limit ?? 20;
            $page = $request->page ?? 1;

            $rs = [];
            $res = Restaurant::with('restaurant_detail')->get()->toArray();
            if(!empty($res)){
                foreach ($res as $key => $value) {
                    $res[$key]['distance'] = haversine($user_location, $value);
                }
                usort($res, function ($a, $b) {
                    if ($a['distance'] == $b['distance']) {
                        return 0;
                    }
                    return ($a['distance'] < $b['distance']) ? -1 : 1;
                });
                $rs = array_slice($res, ($page * $limit - $limit), $limit);

                $origin = ($user_location['Latitude'] . ',' . $user_location['Longitude']);
                $destination = '';
                foreach ($rs as $value) {
                    $destination .= $value['Latitude'] . ',' . $value['Longitude'] . '|';
                }
                $url = 'https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=' . $origin . '&destinations=' . $destination . '&key=AIzaSyCzlVX517mZWArHv4Dt3_JVG0aPmbSE5mE';
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => $url,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                ));

                $response = curl_exec($curl);
                curl_close($curl);
                $response = json_decode($response);
                if (!empty($response)) {
                    $response = (array)$response;
                }
                if (!empty($response['rows'][0])) {
                    $elm = $response['rows'][0]->elements;
                    foreach ($rs as $key => $value) {
                        $rs[$key]['distance_gg'] = $elm[$key]->distance->value;
                    }
                }
                usort($rs, function ($a, $b) {
                    if ($a['distance_gg'] == $b['distance_gg']) {
                        return 0;
                    }
                    return ($a['distance_gg'] < $b['distance_gg']) ? -1 : 1;
                });
            }

            return \response()->json([
                'success' => true,
                'message' => __('success'),
                'data' => $rs
            ]);
        } catch (\Exception $e) {
            return \response()->json([
                'success' => false,
                'message' => __('fail'),
            ]);
        }


    }

    public function getSavedRes(Request $request)
    {
        $data = $request->all();
        if (!isset($data['customer_id'])) {
            return [
                'success' => false,
                'message' => 'Customer ID là bắt buộc'
            ];
        }
        $customer = Customer::find($data['customer_id']);
        if ($customer) {
            $limit = $data['limit'] ?? 10;
            $page = $data['page'] ?? 1;
            $saved_res = !empty($customer['SavedRes']) ? json_decode($customer['SavedRes']) : [];
            $rs = Restaurant::whereIn('Id', $saved_res)->get();
            return [
                'success' => true,
                'message' => __('success'),
                'data' => $rs
            ];

        }
        return [
            'success' => false,
            'message' => 'Không tìm thấy'
        ];
    }

    public function save()
    {
        $res_id = \request()->res_id;
        if (!isset($res_id)) {
            return [
                'success' => false,
                'message' => __('is_required', ['name' => 'Res ID'])
            ];
        }
        $res = Restaurant::find($res_id);
        if ($res) {
            $customer = Auth::guard('api')->user();
            $saved_res = !empty($customer['SavedRes']) ? json_decode($customer['SavedRes']) : [];
            if (!in_array($res_id, $saved_res)) {
                $saved_res[] = $res_id;
//              $customer = Customer::find($cu)
                $customer->update(['SavedRes' => json_encode($saved_res)]);
                $msg = 'Đã lưu';
            }else{
                $key = array_search($res_id, $saved_res);
                array_splice($saved_res, $key, 1);
                $customer->update(['SavedRes' => json_encode($saved_res)]);
                $msg = 'Đã bỏ lưu';
            }
            return [
                'success' => true,
                'message' => $msg
            ];

        }
        return [
            'success' => false,
            'message' => 'Không tìm thấy'
        ];
    }

    public function unSave(Request $request)
    {
        $res_id = \request()->res_id;
        if (!isset($res_id)) {
            return [
                'success' => false,
                'message' => __('is_required', ['name' => 'Res ID'])
            ];
        }
        $res = Restaurant::find($res_id);
        if ($res) {
            $customer = Auth::guard('api')->user();
            $saved_res = !empty($customer['SavedRes']) ? json_decode($customer['SavedRes']) : [];
            if (in_array($res_id, $saved_res)) {
                $key = array_search($res_id, $saved_res);
                array_splice($saved_res, $key, 1);
//              $customer = Customer::find($cu)
                $customer->update(['SavedRes' => json_encode($saved_res)]);
            }
            return [
                'success' => true,
                'message' => __('success')
            ];

        }
        return [
            'success' => false,
            'message' => 'Không tìm thấy'
        ];
    }

    public function create(Request $request){
        $data = $request->all();

    }
}
