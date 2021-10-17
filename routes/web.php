<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MatController;
use App\Http\Controllers\MvtController;
use App\Http\Controllers\DetController;
use App\Http\Controllers\ArriveeController;
use App\Http\Controllers\CatController;
use App\Http\Middleware\checkCategory;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'],function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('index',[MvtController::class,'index']);

    Route::get('home/index',[MatController::class,'index']);

    Route::get('home/listescateg',[CatController::class,'listescateg']);
    Route::get('home/insertion_categ',[CatController::class,'insertcateg']);
    Route::post('home/listescateg',[CatController::class,'addcateg']);

    Route::get('home/editcateg/{categorie_id}',[CatController::class,'editcatg']);
    Route::put('home/editcategorie/{categorie_id}',[CatController::class,'updatecategorie']);


    Route::get('home/listesmat',[MatController::class,'listesmat']);
    Route::get('home/insertion_mat',[MatController::class,'insertion_mat']);
    Route::post('home/listesmat',[MatController::class,'store']);
    Route::get('/home/editmat/{materiel_id}',[MatController::class,'editmat']);
    Route::put('/home/editmat/{materiel_id}',[MatController::class,'updatemat']);


    Route::get('home/listesmvt',[MatController::class,'listemvt']);
    Route::get('home/insertmvt',[MatController::class,'insertmvt']);
    Route::post('home/listesmvt',[MatController::class,'storemvt']);
    Route::get('home/editmvt/{mvt_id}',[MatController::class,'editmvt']);
    Route::put('home/editmvt/{mvt_id}',[MatController::class,'updatemvt']);


    Route::get('home/adddetails/{mvt_id}',[MatController::class,'adddetails']);
    Route::get('home/glob',[MatController::class,'glob']);
    Route::put('home/insertdet',[MatController::class,'storedetails']);

    /* Route::get('home/detlist',[MatController::class,'detlist']);
    Route::get('home/general',[MatController::class,'general']);
    Route::get('home/advanced',[MatController::class,'advanced']); */

    Route::get('home/show/{materiel_id}', [MatController::class,'show']);
    Route::get('home/calendar', [MatController::class,'calendar']);

    Route::get('home/listesmvt/{mvt_id}', [MvtController::class,'destroy']);
    Route::get('home/home_v',[MatController::class,'home_v']);
    // route courrier
    Route::get('home/Arrivee',[ArriveeController::class,'listesArrivee']);
    Route::get('home/ajoutercour',[ArriveeController::class,'insertcour']);
    Route::post('home/Arrivee',[ArriveeController::class,'storecour']);
    Route::get(' home/editcour/{id}',[ArriveeController::class,'editcour']);
    Route::put('home/editcour/{id}',[ArriveeController::class,'updatecour']);



    //Route::get('home/showdada',[MatController::class,'showdatables'])->name('home.showdada');
});







