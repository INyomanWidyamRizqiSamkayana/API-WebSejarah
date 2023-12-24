<?php
use App\Http\Controllers\API\DataController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\HomeController;
use App\Http\Controllers\Backend\DataaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('login', [AuthController::class, 'login']);
Route::group(['middleware'=>'auth:sanctum'], function() {
    Route::resource('daftar', DataController::class);
    Route::post('/daftar/{id}', [DataController::class, 'update']);
    Route::get('/kategori', [DataController::class, 'kategori']);
});

 Route::get('/PetaHistori', [HomeController::class, 'gis_map']); 
 
 ##Data Table Route
 Route::get('/centre-point/data',[\App\Http\Controllers\Backend\DataaController::class,'centrepoint'])->name('centre-point.data');
