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



Route::get('/test-products', function () {
    return response()->json([
        ['title' => 'Curso Ruby on Rails', 'price' => 100],
        ['title' => 'Curso Vue.js', 'price' => 150]
    ]);
});
