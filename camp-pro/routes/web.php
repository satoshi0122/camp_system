<?php

use App\Http\Controllers\Mst_SiteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::resource('mst_sites',Mst_SiteController::class)->except([
    'destroy'
]);;
Route::delete('mst_sites/{id}',[Mst_SiteController::class, 'softdestroy'])->name('mst_sites.softDestroy');
