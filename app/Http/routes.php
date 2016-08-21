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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'web', 'prefix' => '/'], function() {
    Route::get('main',[
       'uses' => 'MainController@index',
        'as' => 'main'
    ]);

    Route::get('login/movil/{email}/{password}',[
        'uses' => 'AuthController@login_movil',
        'as' => 'login_movil'
    ]);

    Route::get('alta/org/',[
        'uses' => 'alt_organizacionController@index',
        'as' => 'alta_org'
    ]);
    Route::get('create/org/',[
        'uses' => 'alt_organizacionController@create',
        'as' => 'create_org'
    ]);
    Route::post('store/org/',[
        'uses' => 'alt_organizacionController@store',
        'as' => 'store_org'
    ]);

////////////////////////////alata de usuario por el super admin
    Route::get('superadmin/store/user/',[
        'uses' => 'altaUserCrontroller@create',
        'as' => 'store_user'
    ]);
    Route::post('superadmin/store/user/',[
        'uses' => 'altaUserCrontroller@store',
        'as' => 'save_user'
    ]);
    Route::get('superadmin/list/user/',[
        'uses' => 'altaUserCrontroller@index',
        'as' => 'list_user'
    ]);



});
