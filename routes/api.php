<?php

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

Route::get('/view_company', [App\Http\Controllers\CompanyController::class, 'show']);



// employee
Route::post('/save_employee', [App\Http\Controllers\EmployeeController::class, 'create']);
Route::put('/update_employee/id/{id}', [App\Http\Controllers\EmployeeController::class, 'update']);
Route::delete('/delete_staff/id/{id}', [App\Http\Controllers\EmployeeController::class, 'destroy']);
Route::get('/view_employee', [App\Http\Controllers\EmployeeController::class, 'show']);
//end employee