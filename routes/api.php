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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//List patients
Route::get('patients','PatientController@index');

//List single patient
Route::get('patient/{id}','PatientController@show');
//create patient
Route::post('patient','PatientController@store');
//update patient
Route::put('patient','PatientController@store');

Route::delete('patient/{id}','PatientController@destroy');