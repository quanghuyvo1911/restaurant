<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\ServiceController;


Route::get('/service',[ServiceController::class,'index'])->name('user.service.index');
