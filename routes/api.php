<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('agendas', AgendaController::class);
Route::apiResource('appointments', AppointmentController::class);
Route::apiResource('businesses', BusinessController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('customizations', CustomizationController::class);
Route::apiResource('plans', PlanController::class);
Route::apiResource('roles', RoleController::class);
Route::apiResource('services', ServiceController::class);
Route::apiResource('status', StatusController::class);
Route::apiResource('users', UserController::class);



