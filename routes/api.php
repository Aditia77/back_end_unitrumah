<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

Route::group(['prefix' => 'unit'], function(){
    Route::get('/getunit', function(){
    $productList =DB::table('unit_rumahs')
       ->select('*')
       ->from('unit_rumahs')
       ->get();
       return response()->json($productList,200);
    });

    Route::post('/createnewunit', 'ProductController@CreateUnit');
    Route::post('/deleteunit', 'ProductController@DeleteUnit');
});