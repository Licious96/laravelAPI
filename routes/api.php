<?php
//Import controllers
use App\Http\Controllers\AquariaController;
use App\Http\Controllers\FishController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::get('/aquaria', function(){
//     return 'This is a text';
// });

// Route::get('/aquaria', [AquariaController::class, 'index']);
// Route::post('/aquaria', [AquariaController::class, 'add_aquarium']);

Route::resource('/aquaria', AquariaController::class);

Route::post('/aquaria/{id}/fish', [AquariaController::class, 'add_fish']);
Route::get('/aquaria/{id}/fish', [AquariaController::class, 'all_fish']);
Route::put('/fish/{id}/edit', [AquariaController::class, 'update_fish']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
