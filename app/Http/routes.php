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
    return view('register_user.index');
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


// convocatoria de categoria
    Route::get('convocatoria/{convocatoria_id}/secciones',[
        'uses' => 'ConvocatoriaCategoriaController@index',
        'as' => 'convocatoria_secciones_index'
    ]);

    Route::get('convocatoria/convocatoria_categoria/{convocatoria_categoria_id}/categoria-metricas',[
        'uses' => 'CategoriaMetricaController@index',
        'as' => 'categoria_metrica_index'
    ]);

    // convocatoria
    Route::get('convocatorias/{organizacion_id}',[
        'uses' => 'ConvocatoriasController@index',
        'as' => 'convocatoria_index'
    ]);

    Route::get('convocatorias/create',[
        'uses' => 'ConvocatoriasController@create',
        'as' => 'convocatoria_create'
    ]);

    Route::post('convocatorias/store',[
        'uses' => 'ConvocatoriasController@store',
        'as' => 'convocatoria_store'
    ]);




    Route::get('convocatorias/seccion-convocatorias/{convocatoria_id}',[
        'uses' => 'SeccionConvocatoriaController@index',
        'as' => 'secciones_convocatoria_index'
    ]);

    Route::get('convocatorias/seccion-convocatorias/seccion-campo/{seccion_convocatoria_id}',[
        'uses' => 'SeccionCampoController@index',
        'as' => 'seccion_campo_index'
    ]);

    Route::get('convocatorias/seccion-convocatorias/seccion-campo/{seccion_convocatoria_id}',[
        'uses' => 'SeccionCampoController@index',
        'as' => 'seccion_campo_index'
    ]);



});
