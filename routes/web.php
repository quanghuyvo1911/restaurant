<?php
use App\Http\Controllers\user\HomeController;
use Illuminate\Support\Facades\Route;
include "user/about.php";
include "user/service.php";

Route::get('/index',[HomeController::class,'index']);
Route::get('/',[HomeController::class,'index']);
