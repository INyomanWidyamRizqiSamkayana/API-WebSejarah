<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\API\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Backend\DataaController;
use App\Http\Controllers\Backend\SpotController;
use App\Http\Controllers\Backend\CentrePointController;
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

Route::get('/', [DashboardController::class, 'index']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware'=>'auth'], function (){
    Route::resource('admin', AdminController::class);
});

Route::get('/detail',[DashboardController::class,'detail']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/PetaHistori',[HomeController::class,'spots']);
Route::get('/detail-spot/{slug}',[HomeController::class,'detailSpot'])->name('detail-spot');

Route::get('/Peta', [HomeController::class, 'gis_map']);
## Route Datatable
Route::get('/centre-point/data',[\App\Http\Controllers\Backend\DataaController::class,'centrepoint'])->name('centre-point.data');
Route::get('/spot/data',[\App\Http\Controllers\Backend\DataaController::class,'spot'])->name('spot.data');

Route::resource('centre-point',(\App\Http\Controllers\Backend\CentrePointController::class));
Route::resource('spot',(\App\Http\Controllers\Backend\SpotController::class));

require __DIR__.'/auth.php';
