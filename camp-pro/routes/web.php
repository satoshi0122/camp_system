<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mst_SiteController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('mst_sites',Mst_SiteController::class);
Route::post('mst_site/destroy/{id}', [Mst_SiteController::class,'mindestroy'])->name('mst_sites.mindestroy');