<?php

use App\Http\Controllers\crudLaravelController;
use Illuminate\Support\Facades\Route;



Route::get("/",[crudLaravelController::class,"index"])->name("crud.index");
