<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->post('/user', function (Request $request) {
    $user = $request->only('user_id', 'exemplo');
    $name = $request->input('name');
});

Route::middleware('auth:api')->post('/auth', function (Request $request_jwt) {
    $jwt = $request_jwt->input('jwt');
    $email = $request_jwt->only('email');
});

Route::group(['middleware' => 'jwt.auth'], function () {
    Route::post('/account', [
        'uses' => 'AccountController@getAuthUser', 'as' => 'getAuthUser'
    ]);
});
