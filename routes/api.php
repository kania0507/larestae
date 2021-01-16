<?php

use Illuminate\Http\Request;
use App\Order;

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


use App\Contact;

Route::group(['middleware' => 'api'], function(){
 
  // Add Order
  Route::post('order/store', function(Request $request){
    return Order::create(['name_unreg' => $request->input(['name_unreg']), 'email_unreg' => $request->input(['email_unreg']), 
    'phone_unreg' => $request->input(['phone_unreg']),'address_unreg' => $request->input(['address_unreg']) ]);
  });
});

// user
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

