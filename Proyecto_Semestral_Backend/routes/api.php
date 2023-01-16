<?php

use App\Http\Controllers\CentroDistribucionController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/ApiRoutes')->group(function () use ($router) {
    $router->get('/listaCD', [CentroDistribucionController::class, 'listaCD']);
    $router->post('/mostrarStock', [CentroDistribucionController::class, 'mostrarStock']);
});
