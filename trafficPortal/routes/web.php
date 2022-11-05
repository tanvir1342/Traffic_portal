<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tpdashboard;
use App\Http\Controllers\tpdutyController;
use App\Http\Controllers\dutyEmployeeControler;

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
Route::get('/tpi/duty',[tpdutyController::class, 'em_list']);
Route::get('/tpi/generateduty',[tpdutyController::class, 'generate']);
Route::get('/tpi/leftchartdata',[tpdashboard::class, 'monthlyzonechart']);

// Duty Employee Route
// Route::get('/dei',[dEdashboard::class, 'index']);
Route::get('/dutyemployee',[dutyEmployeeControler::class,'loadDutyEmployeeView']);
// Route::get("dutyemployee/{name}",[dutyEmployeeControler::class,'loadDutyEmployeeView']);


