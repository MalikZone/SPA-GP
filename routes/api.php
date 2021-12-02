<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

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

Route::get('/menu', [MenuController::class, 'index']);
Route::post('/save-menu', [MenuController::class, 'saveMenu']);
Route::get('/menu/edit/{id}', [MenuController::class, 'show']);
Route::patch('/edit-menu/{id}', [MenuController::class, 'updateMenu']);
Route::delete('/delete-menu/{id}', [MenuController::class, 'deleteMenu']);

// Route::middleware('api')->group(function () {
// });

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
