<?php
use App\Http\Controllers\NvsAccountController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/greeting', function () {
    return "<h1> Hello! </h1>";
});
#redirect
Route::redirect('/here','/there');
Route::get('/there', function () {
    return "<h1>redirect to there </h1>";
});
#router return view
Route::get('/van-son', function () {
    return view('vanson');
});
#router parameter
Route::get('/conca/{id}', function ($id) {
    return "<h1> con ca ".$id . "</h1>";
});
#optional parameter
Route::get('/dev/{name?}', function ($name="Văn Sơn") {
    return "<h1> xin chào ".$name . "</h1>";
});

Route::get('/nvs-account',[NvsAccountController::class,'index'])->name('NvsAccount.index');
Route::get('/nvs-account-create',[NvsAccountController::class,'create']);