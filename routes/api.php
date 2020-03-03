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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
    //return $request->user();
//});


/*
buyers 
*/
Route::resource('buyers', 'Buyer\Buyercontroller', ['only' => ['index', 'show']]); 
/*
category 
*/
Route::resource('categories', 'Category\Categorycontroller', ['except' => ['create', 'edit']]); 
/*
products
*/
Route::resource('products', 'Product\Productcontroller', ['only' => ['index', 'show']]); 
/*
transactions
*/
Route::resource('transactions', 'Transaction\Transactioncontroller', ['only' => ['index', 'show']]); 
/*
sellers
*/
Route::resource('sellers', 'Seller\Sellercontroller', ['only' => ['index', 'show']]); 
/*
users
*/
Route::resource('users', 'User\Usercontroller', ['except' => ['create', 'edit']]); 