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


Route::group(['prefix' => 'users'], function(){
    Route::get('/', [
        'uses' => 'UserController@getAll',
        'as'   => 'users.getAll'
    ]);

    Route::get('/{id}', [
        'uses' => 'UserController@get',
        'as'   => 'users.get'
    ]);


    Route::post('/', [
        'uses' => 'UserController@post',
        'as'   => 'users.post'
    ]);


    Route::delete('/{id}', [
        'uses' => 'UserController@delete',
        'as'   => 'users.delete'
    ]);

    Route::put('/{id}', [
        'uses' => 'UserController@put',
        'as'   => 'users.put'
    ]);


    Route::post('/signup', [
        'uses' => 'UserController@signup',
        'as'   => 'users.signup'
    ]);


    Route::post('/login', [
        'uses' => 'UserController@login',
        'as'   => 'users.login'
    ]);
});



Route::group(['prefix' => 'artikli'], function(){
    Route::get('/getForUser/{userId}', [
        'uses' => 'ArtiklController@getForUser',
        'as'   => 'artikli.getForUser'
    ]);

    Route::get('/grouped', [
        'uses' => 'ArtiklController@getAllGrouped',
        'as'   => 'artikli.getAllGrouped'
    ]);

    Route::get('/', [
        'uses' => 'ArtiklController@getAll',
        'as'   => 'artikli.getAll'
    ]);

    Route::get('/{id}', [
        'uses' => 'ArtiklController@get',
        'as'   => 'artikli.get'
    ]);


    Route::post('/', [
        'uses' => 'ArtiklController@post',
        'as'   => 'artikli.post'
    ]);


    Route::delete('/{id}', [
        'uses' => 'ArtiklController@delete',
        'as'   => 'artikli.delete'
    ]);

    Route::put('/{id}', [
        'uses' => 'ArtiklController@put',
        'as'   => 'artikli.put'
    ]);
});




Route::group(['prefix' => 'kategorije'], function(){
    Route::get('/test', [
        'uses' => 'KategorijaController@test',
        'as'   => 'kategorije.test'
    ]);

    Route::get('/', [
        'uses' => 'KategorijaController@getAll',
        'as'   => 'kategorije.getAll'
    ]);

    Route::get('/{id}', [
        'uses' => 'KategorijaController@get',
        'as'   => 'kategorije.get'
    ]);


    Route::post('/', [
        'uses' => 'KategorijaController@post',
        'as'   => 'kategorije.post'
    ]);


    Route::delete('/{id}', [
        'uses' => 'KategorijaController@delete',
        'as'   => 'kategorije.delete'
    ]);

    Route::put('/{id}', [
        'uses' => 'KategorijaController@put',
        'as'   => 'kategorije.put'
    ]);
});




Route::group(['prefix' => 'checkout'], function(){
    Route::get('/', [
        'uses' => 'CheckoutController@getAll',
        'as'   => 'checkout.getAll'
    ]);

    Route::get('/details/{id}', [
        'uses' => 'CheckoutController@get',
        'as'   => 'checkout.get'
    ]);

    Route::get('/{id}', [
        'uses' => 'CheckoutController@getUser',
        'as'   => 'checkout.getAll'
    ]);

    Route::get('/user/{id}', [
        'uses' => 'CheckoutController@getUser',
        'as'   => 'checkout.getUser'
    ]);


    Route::post('/', [
        'uses' => 'CheckoutController@post',
        'as'   => 'checkout.post'
    ]);


    Route::delete('/{id}', [
        'uses' => 'CheckoutController@delete',
        'as'   => 'checkout.delete'
    ]);

    Route::put('/{id}', [
        'uses' => 'CheckoutController@put',
        'as'   => 'checkout.put'
    ]);
});
