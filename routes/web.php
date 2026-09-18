<?php

use App\Http\Controllers\Admin\CreativeWorkController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\StatController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Models\CreativeWork;
use App\Models\Stat;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'stats' => Stat::ordered()->get(),
        'testimonials' => Testimonial::ordered()->get(),
        'works' => CreativeWork::ordered()->get(),
    ]);
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', [LoginController::class, 'create'])->name('login');
        Route::post('login', [LoginController::class, 'store'])->middleware('throttle:6,1');
    });

    Route::middleware('auth')->group(function () {
        Route::post('logout', [LoginController::class, 'destroy'])->name('logout');

        Route::get('works', [CreativeWorkController::class, 'index'])->name('works.index');
        Route::post('works', [CreativeWorkController::class, 'store'])->name('works.store');
        Route::delete('works/{work}', [CreativeWorkController::class, 'destroy'])->name('works.destroy');

        Route::get('stats', [StatController::class, 'index'])->name('stats.index');
        Route::post('stats', [StatController::class, 'store'])->name('stats.store');
        Route::put('stats/{stat}', [StatController::class, 'update'])->name('stats.update');
        Route::delete('stats/{stat}', [StatController::class, 'destroy'])->name('stats.destroy');

        Route::resource('testimonials', TestimonialController::class)->except('show');
    });
});
