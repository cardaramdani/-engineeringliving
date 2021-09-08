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

//token carda Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMWNmMmMxYjNhNWY0MGVmZTdhNjllYWI2N2U0NGIxNjM4MGUzY2FiNTIyM2UzZDY0ZmFkYzcwMTA5ZTg3NThhZjk3OTNkZWI0ZTlmOWJjNmEiLCJpYXQiOjE1OTc1MTgxNDEsIm5iZiI6MTU5NzUxODE0MSwiZXhwIjoxNjI5MDU0MTQxLCJzdWIiOiI5NyIsInNjb3BlcyI6W119.a48FsmKpmT3TSfmcX-ubK5N6OUvfAOl1FPWEJzE8kZFbHZrJvMQ0BItrk0HB751_o6dgKfTwNJ1SEmE4WVm2LRYlezWcUkbhjfGJ7xQpFmAtJ5SOzPa4MjaLGAp90MUGdZASllP90vg4WfUXCgVVZGPAa7Ue30mbLItq17N3ZljK1XStOIXOBzVjFSESGeWopJdT8m-yCLbuGrM4Qwyg4K7eh-YAHjg1xOITITPYZLxyCbeCuDp-3Nj7KekirM0aTNyAfwi3lOLXAWe1AcYiNLSAPu2bp-ATeiS0j9Y9V-ktKu4Q0Q9cjHQfqQpXfXmvtARFw5HI36hQ4Nt0EI-HT72MLUqaIgcv28sO68aOzc5lnr3V-ZmKYhHMIMfrJN2bSCkAk37QVSH0wDxmdzyu7nmz52HZsYmoagCsda4CE1xGV7JL03t5LnKJH4LRUWgeTWYIcQAiK74Bq1HQumW90ROCW9DPMt9lUW2BsnESmggW-6OdZajJdvTH1K-zznkLT5votmOY1nGd-PQZ8Bwg1IF4y08-irvv47w71lslXqY0jN_P1_iO--tmQgXwKiGRzslL9XR6qugf21pOaW9cumwWvfbce4WKplWg97xwt62Sq6dAqMuYU6vOaMSkQQPyAk7csMRUN-81BZmB14-OwExZg68DTW62MeQ8IigGOXI
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'API\UserController@details');
});


Route::middleware('auth:api')->get('esp', 'API\EspController@index');
Route::middleware('auth:api')->post('esp', 'API\EspController@store');
Route::get('/esp/{id}', 'API\EspController@show')->middleware('auth:api');
Route::put('/esp/{id}', 'API\EspController@update')->middleware('auth:api');
Route::delete('/esp/{id}', 'API\EspController@destroy')->middleware('auth:api');
