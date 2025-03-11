<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

// rotta che usa il controller PageController e la funzione index
Route::get("/", [PageController::class, "index"]);
