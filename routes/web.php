<?php

use App\Http\Controllers\Api\InitialStateController;
use Illuminate\Support\Facades\Route;

Route::get('/', [InitialStateController::class, 'welcome']);
Route::get('/status', [InitialStateController::class, 'status']);
Route::get('/data', [InitialStateController::class, 'getAllData']);

// Dynamic routes for each key in initialState.json
Route::get('/bddTests', [InitialStateController::class, 'getByKey'])->defaults('key', 'bddTests');
Route::get('/brandName', [InitialStateController::class, 'getByKey'])->defaults('key', 'brandName');
Route::get('/description', [InitialStateController::class, 'getByKey'])->defaults('key', 'description');
Route::get('/iniTheme', [InitialStateController::class, 'getByKey'])->defaults('key', 'iniTheme');
Route::get('/portfolioFeatures', [InitialStateController::class, 'getByKey'])->defaults('key', 'portfolioFeatures');
Route::get('/appProcedures', [InitialStateController::class, 'getByKey'])->defaults('key', 'appProcedures');

// Fallback for any other keys
Route::get('/{key}', [InitialStateController::class, 'getByKey']);
