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
        'as' => 'convocatoria_con_index'
    ]);

    Route::get('convocatorias/create/{organizacion_id}',[
        'uses' => 'ConvocatoriasController@create',
        'as' => 'convocatoria_create'
    ]);

    Route::post('convocatorias/store',[
        'uses' => 'ConvocatoriasController@store',
        'as' => 'convocatoria_store'
    ]);

// seccion convocatoria

    Route::get('convocatorias/seccion-convocatoria/{convocatoria_id}',[
        'uses' => 'SeccionConvocatoriaController@create',
        'as' => 'secciones_convocatoria_create'
    ]);

    Route::get('convocatorias/seccion-convocatorias/{convocatoria_id}',[
        'uses' => 'SeccionConvocatoriaController@index',
        'as' => 'secciones_convocatoria_index'
    ]);

    Route::post('convocatorias/seccion-convocatorias/store',[
        'uses' => 'SeccionConvocatoriaController@store',
        'as' => 'secciones_convocatoria_store'
    ]);

    // seccion convocatoria

    Route::get('convocatorias/seccion-convocatorias/seccion-campo/{seccion_convocatoria_id}',[
        'uses' => 'SeccionCampoController@index',
        'as' => 'seccion_campo_index'
    ]);

    Route::get('convocatorias/seccion-convocatorias/seccion-campo/{seccion_convocatoria_id}',[
        'uses' => 'SeccionCampoController@index',
        'as' => 'seccion_campo_index'
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


    // inputs dinamicos (seccion campo)

    Route::post('seccion-campo/store',[
        'uses' => 'SeccionCampoController@store',
        'as' => 'convocatoria_store'
    ]);

    Route::get('seccion-campo/index',[
        'uses' => 'SeccionCampoController@index',
        'as' => 'convocatoria_index'
    ]);


    Route::get('seccion-campo/create',[
        'uses' => 'SeccionCampoController@create',
        'as' => 'convocatoria_create'
    ]);

    // categorias convocatoria

    Route::get('categoria-convocatoria/{convocatoria_id}/create',[
        'uses' => 'ConvocatoriaCategoriaController@create',
        'as' => 'convocatoria_categoria_create'
    ]);

    Route::post('categoria-convocatoria/store',[
        'uses' => 'ConvocatoriaCategoriaController@store',
        'as' => 'convocatoria_categoria_store'
    ]);


    // metrica

    Route::get('categoria-metrica-convocatoria/{convocatoria_categoria_id}/create',[
        'uses' => 'ConvocatoriaCategoriaController@create',
        'as' => 'convocatoria_metrica_categoria_create'
    ]);

    Route::post('categoria-metrica-convocatoria/store',[
        'uses' => 'ConvocatoriaCategoriaController@store',
        'as' => 'convocatoria_metricacategoria_store'
    ]);

    Route::get('charts',[
        'uses' => 'ChartsController@charts',
        'as' => 'charts'
    ]);

});
