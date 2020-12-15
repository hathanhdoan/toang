<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('create-xml','CreateXmlController@create');
Route::post('hehe','CreateXmlController@hehe');

Route::group(['namespace' => 'Api'], function () {
    Route::group(['namespace' => 'Account', 'prefix' => 'account'], function () {
        Route::post('/', 'AccountController@register')->name('api.account.regester');
        Route::get('/logout', 'AccountController@logout')->name('api.account.logout');
        Route::post('/login', 'AccountController@login')->name('api.account.login');
        Route::post('/register', 'AccountController@register')->name('api.account.register');
        Route::post('/send-mail', 'AccountController@sendResetPasswordMail')->name('api.account.send_mail');
        Route::put('/reset-password', 'AccountController@resetPassword')->name('api.account.reset_password');
    });
});
