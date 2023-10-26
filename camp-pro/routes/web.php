<?php

use App\Http\Controllers\Mst_SiteController;
use App\Http\Controllers\ReserveController;
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
]);
Route::delete('mst_sites/{id}',[Mst_SiteController::class, 'softdestroy'])->name('mst_sites.softDestroy');

Route::resource('reserves',ReserveController::class)->except([
    'index','update','destroy','store'
]);
Route::get('reserves/{mst_site_id}/index',[ReserveController::class, 'index'])->name('reserves.index');
Route::get('reserves/{mst_site_id}/{date}/create',[ReserveController::class, 'create'])->name('reserves.create');
Route::post('reserves/',[ReserveController::class, 'store'])->name('reserves.store');
Route::patch('reserves/{id}',[ReserveController::class, 'update'])->name('reserves.update');

Route::delete('reserves/{id}',[ReserveController::class, 'softdestroy'])->name('reserves.softDestroy');
