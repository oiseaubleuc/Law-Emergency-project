<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use App\Models\Job;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LanguageController;

// Test route (à supprimer en production)
Route::get('test', function () {
    $job = Job::first();
    TranslateJob::dispatch($job);
    return 'Done';
});

// Language switching route
Route::get('/lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch');

// Public routes
Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/faq', 'faq');
Route::get('/readme', [JobController::class, 'readme'])->name('readme');

// Legal pages
Route::get('/verkeersrecht', function () {
    return view('verkeersrecht');
})->name('verkeersrecht');

Route::get('/familierecht', function () {
    return view('familierecht');
})->name('familierecht');

Route::get('/strafrecht', function () {
    return view('strafrecht');
})->name('strafrecht');

// Public casus submission (without auth requirement)
Route::post('/submit_casus', [JobController::class, 'store'])->name('submit_casus');

// Contact routes
Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitContactForm'])->name('contact.submit');

// News routes
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');

// Authentication routes
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');

// Authenticated routes
Route::middleware('auth')->group(function () {
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // Jobs routes
    Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
    Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
    Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
    Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');
    Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit');
    Route::put('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');
    Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');
    Route::get('/jobs/{job}/pdf', [JobController::class, 'downloadPDF'])->name('jobs.pdf');

    // News management routes
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news', [NewsController::class, 'store'])->name('news.store');
    Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/{news}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');
});

// Admin routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [SessionController::class, 'index'])->name('admin.index');
    Route::get('/admin/dashboard', [SessionController::class, 'dashboard'])->name('admin.dashboard');
});
