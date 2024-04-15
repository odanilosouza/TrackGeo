<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\VehicleController;
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
// Route::get('/devices', [DeviceController::class, 'index']);
// Route::post('/devices', [DeviceController::class, 'store']);
// Route::get('/devices/{id}', [DeviceController::class, 'show']);
// Route::put('/devices/{id}', [DeviceController::class, 'update']);
// Route::delete('/devices/{id}', [DeviceController::class, 'destroy']);

// Route::get('vehicles', [VehicleController::class,'index'])->name('vehicles.index');
// Route::post('vehicles', [VehicleController::class,'store'])->name('vehicles.store');


Route::post('/suppots', [SupportController::class, 'store'])->name('suppors.store');
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

Route::get('/', function () {
    return view('welcome');
});
