<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmissionController;


Route::get('/', function () {
    return view('home');
});

Route::get('home', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

// Route::get('admission', function () {
//     return view('admission');
// });


Route::get('/admission', [AdmissionController::class, 'showForm'])->name('admission.form');
Route::post('/admission/submit', [AdmissionController::class, 'submit'])->name('admission.submit');