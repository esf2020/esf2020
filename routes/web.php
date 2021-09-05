<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatController;
use App\Http\Controllers\MvtController;
use App\Http\Controllers\DetController;


Route::get('/', function () {
    return view('welcome');
});
/* //////////////
    Route::get('/mvt',[MvtController::class,'mvt']);
    Route::get('/insertmvt',[MvtController::class,'insertmvt']);
    Route::post('/mvt',[MvtController::class,'storemvt']);
    Route::get('/mvt/{mvt_id}/edit',[MvtController::class,'editmvt']);
    Route::get('/mvt_det',[MvtController::class,'mvt_det']);


    Route::get('/accueil',[MatController::class,'accueil']);
    Route::get('/home',[MatController::class,'index']);
    Route::get('/insert',[MatController::class,'insert']);
    Route::post('/home',[MatController::class,'store']);
    Route::get('/home/{materiel_id}/edit',[MatController::class,'edit']);
    Route::put('/home/{materiel_id}',[MatController::class,'updatemat']);
    Route::delete('/home/{materiel_id}',[MatController::class,'destroy']);
*/
Route::get('index',[MvtController::class,'index']);

Route::get('home/index',[MatController::class,'index']);

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

Route::get('home/detlist',[MatController::class,'detlist']);

Route::get('home/general',[MatController::class,'general']);
Route::get('home/advanced',[MatController::class,'advanced']);


Route::get('home/show', [MatController::class,'show']);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
