<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tpdashboard;
use App\Http\Controllers\tpdutyController;
use App\Http\Controllers\dutyEmployeeControler;
use App\Http\Controllers\aidashboard;

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

// Route::get('/', function () {
//     return view('area_incharge.aiDashboard');
// });

Route::get('/tpi',[tpdashboard::class, 'index']);
Route::get('/tpi/demploye/{id}',[tpdashboard::class, 'dutyEmployeProfile']);
Route::get('/tpi/employelist',[tpdashboard::class, 'em_list']);
Route::get('/tpi/duty',[tpdutyController::class, 'em_list']);
Route::get('/tpi/generateduty',[tpdutyController::class, 'generate']);
Route::get('/tpi/leftchartdata',[tpdashboard::class, 'monthlyzonechart']);
Route::get('/tpi/leftchartdata/daily',[tpdashboard::class, 'dailyzonechart']);

Route::get('/ai',[aidashboard::class, 'index']);
Route::get('/ai/demploye/{id}',[aidashboard::class, 'dutyEmployeProfile']);
Route::get('/aiprofile',[aidashboard::class, 'AiProfile']);
// Route::get('/tpi/employelist',[tpdashboard::class, 'em_list']);

// Duty Employee Route

Route::get('/dutyemployee',[dutyEmployeeControler::class,'loadDutyEmployeeView']);
Route::get('/dutyemployee/weekSc',[dutyEmployeeControler::class,'loadDutyScheduleView']);
Route::get('/dutyemployee/eChalan',[dutyEmployeeControler::class,'loadE_ChalanView']);




