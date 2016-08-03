<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

Route::group(['prefix' => '', 'middleware' => 'auth'], function() {    
    Route::get('', ['as' =>'admin.produtos.index', 'uses' => 'ProdutosController@index']);
    Route::get('create', ['as' => 'admin.produtos.create', 'uses' =>'ProdutosController@create']);    
    Route::post('store', ['as' => 'admin.produtos.store', 'uses' =>'ProdutosController@store']);
    Route::get('edit/{id}', ['as' => 'admin.produtos.edit', 'uses' =>'ProdutosController@edit']);
    Route::put('update/{id}', ['as' => 'admin.produtos.update', 'uses' =>'ProdutosController@update']);
    Route::get('destroy/{id}', ['as' => 'admin.produtos.destroy', 'uses' =>'ProdutosController@destroy']);
    Route::get('descricao/{id}', ['as' => 'admin.produtos.descricao', 'uses' =>'ProdutosController@descricao']);
});
