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

Route::group(['webRoute' => ['web']], function($app){
    $app->get('/home', 'homeController@index');
    $app->get('/detail/{slug}', 'homeController@detail');
    $app->post('/mahasiswa/insert', 'homeController@insert');
    $app->post('/mataKuliah/insert', 'mataKuliah@insert');
    $app->get('/mataKuliah', 'mataKuliah@index');
    $app->get('/tampil/{asd}', 'mataKuliah@tampil');
    //$app->post('/mahasiswa/update', 'homeController@update');
});
