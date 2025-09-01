<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EController;
use App\Http\Controllers\exerControllers;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\BillsController;
use App\Http\Controllers\SportsController;
use App\Http\Controllers\ElectBillsController;

//use App\Http\Controller\StudentController;
use Illuminate\Support\Facades\Str;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ebills', [EController::class, 'getbasebill']);

//Route::get('/student', [StudentController::class, 'index']);
//Route::get('/slug/{name}', fn($name) => Str::slug($name));

Route::get('/exercise', [exerController::class, 'index']);

Route::get('/greet', function(){
$name = request('name'); //Elsie
$age = request('age'); // 25
return "Hello $name, age $age";
});

Route::get('/user/{name}/{age}', function ($name,$age){
    return "Name: $name, Age: $age";
});

//Route::get('/student', [StudentController:: class, 'index']);
Route::get('/exer', [ExerciseController::class, 'index']); //Exercise

Route::get('/Ebills',[BillsController::class, 'index']);//first act
Route::get('/sports',[SportsController::class, 'index']);//eme eme lang (practice)
Route::get('/elect',[ElectBillsController::class, 'index']);//act 3
