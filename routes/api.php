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

// API for CRUD operation on aquarium
Route::resource('/aquaria', AquariaController::class);

//API endpoint for adding a fish in an aquariam, the choosen aquarium id has to be entered
Route::post('/aquaria/{id}/fish', [AquariaController::class, 'add_fish']);

//API endpoint for to retrieve all fish for a given aquarium, the desired aquarium id has to be entered
Route::get('/aquaria/{id}/fish', [AquariaController::class, 'all_fish']);

//API endpoint to update a given fish in an aquarium, the desired fish id has to be entered
Route::put('/fish/{id}/edit', [AquariaController::class, 'update_fish']);

//API to convert litres to gallons
Route::post('/aquaria/convert-size-to/{size}', [AquariaController::class, 'convert_size']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
