<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tpdashboard;

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
    return view('area_incharge.area_incharge_dash');
});

Route::get('/tpi',[tpdashboard::class, 'index']);
Route::get('/tpi/demploye/{id}',[tpdashboard::class, 'dutyEmployeProfile']);
Route::get('/tpi/employelist',[tpdashboard::class, 'em_list']);


