<?php

namespace App\Http\Requests\Web\Account;

use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

use Illuminate\Foundation\Http\FormRequest;

class EnterEmailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'bail|required|email',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => __('is_required',['name'=>'email']),
            'email.email' => __('email_is_invalid_formart'),
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        $message = [];
        foreach ($errors as $key=>$error) {
            $message[] = $errors[$key][0];
        }
        throw new HttpResponseException(response()->json([
            'error' => true,
            'message' => $message,
        ], 200));

    }
}
