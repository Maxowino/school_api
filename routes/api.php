<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

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
Route::post('/create-course',[CourseController::class,'createCourse']);
Route::get('/get-courses',[CourseController::class,'readAllCourses']);
Route::get('/get-course/{id}',[CourseController::class,'readCourse']);
Route::put('/updateCourse/{id}',[CourseController::class,'updateCourse']);
Route::delete('/deleteCourse/{id}',[CourseController::class,'deleteCourse']);
