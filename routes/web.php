<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\JobController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LearningController;

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
    Route::get('/postjob', [JobController::class, 'job'])->name('postjob.index');
    Route::get('/postjob-form', [JobController::class, 'postjob'])->name('postjob.postjob');
    Route::post('/postjob', [JobController::class, 'uploadjob'])->name('postjob.uploadjob');
    Route::get('/detail-job/{jobid}', [JobController::class, 'detailjob'])->name('detail-job');
    Route::get('/postjob/{jobid}', [JobController::class, 'updatejob'])->name('update-job');
    Route::patch('/postjob/{jobid}', [JobController::class, 'updatejobform'])->name('update-job');
    Route::get('/postjob/delete/{jobid}', [JobController::class, 'deletejob'])->name('delete-job');


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
