<?php

use App\Http\Controllers\MenteeController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\ShowController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/index', function () {
//    return view('index');
//});

Route::get('/index',[ShowController::class, 'index']);

// Mentor

//Route::get('/mentor', function () {
//    return view('mentor.mentor');
//});

Route::get('/mentor', [MentorController::class, 'index']);

Route::get('/mentor/create', [MentorController::class, 'create']);
Route::post('/mentor/store', [MentorController::class, 'store'])->name('mentor.store');
Route::get('/mentor/edit/{mentor}', [MentorController::class, 'edit'])->name('mentor.edit');
Route::put('/mentor/update/{mentor}', [MentorController::class, 'update'])->name('mentor.update');

Route::delete('/mentor/destroy/{mentor}', [MentorController::class, 'destroy'])->name('mentor.delete');

//Route::get('/mentor/create', function () {
//    return view('mentor.create');
//});

// Mentee

//Route::get('/mentee', function () {
//    return view('mentee.mentee');
//});

Route::get('/mentee', [MenteeController::class, 'index']);

Route::get('/mentee/create', [MenteeController::class, 'create']);
Route::post('/mentee/store', [MenteeController::class, 'store'])->name('mentee.store');

Route::get('/mentee/edit/{mentee}', [MenteeController::class, 'edit'])->name('mentee.edit');
Route::put('/mentee/update/{mentee}', [MenteeController::class, 'update'])->name('mentee.update');

Route::delete('/mentee/destroy/{mentee}', [MenteeController::class, 'destroy'])->name('mentee.delete');
//Route::get('/mentee/create', function () {
//    return view('mentee.create');
//});

Route::get('/mentee/{mentee}', [MenteeController::class, 'show'])->name('mentee.show');

//Route::get('/mentee/detail', function () {
//    return view('detail');
//});
