<?php

use App\Http\Controllers\ApplyJobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\JobController;
use App\Http\Controllers\PostJobController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::middleware('auth')->group(function () {
    // Jobs route
    Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
    Route::get('/jobs/{job}', [JobController::class, 'detail'])->name('jobs.detail');


    // learning routes
    Route::get('/learning', [LearningController::class, 'index'])->name('learning.index');

    // post
    Route::resource('/postjob', PostJobController::class);

    // apply job
    Route::post('/apply/{id}', [ApplyJobController::class, 'index'])->name('applyjob');
    Route::patch('/apply/{id}', [ApplyJobController::class, 'update'])->name('updateApplyJob');

    // Profile Route
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/profile', [ProfileController::class, 'document'])->name('profile.document');
});

Route::middleware('admin')->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/category', CategoryController::class);
});
require __DIR__ . '/auth.php';
