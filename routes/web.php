<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;

Route::get('/', function () {
    return view('school', []);
});
