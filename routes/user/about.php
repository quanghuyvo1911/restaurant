<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\AboutController;


Route::get('/about',[AboutController::class,'index'])->name('user.aboutus.index');
