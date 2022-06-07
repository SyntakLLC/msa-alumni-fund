<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MsaController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [HomeController::class, "index"])->name("welcome");

Route::get("/mission", [HomeController::class, "mission"])->name("mission");

Route::get("/impact", [HomeController::class, "impact"])->name("impact");

Route::get("/contact", [HomeController::class, "contact"])->name("contact");

Route::resource("msa", MsaController::class);

// currently unused middleware
Route::middleware([
    "auth:sanctum",
    config("jetstream.auth_session"),
    "verified",
])->group(function () {});
