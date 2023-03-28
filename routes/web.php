<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\IndexController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group([
    'as' => 'user.',
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']

], function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get(LaravelLocalization::transRoute('routes.contact'), [ContactController::class, 'index'])->name('contact');
    Route::get(LaravelLocalization::transRoute('routes.about'), [AboutController::class, 'index'])->name('about');
    
});


Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');


Route::group(['prefix' => 'admin', 'middleware' => 'guest', 'as' => 'admin.'], function () {
    Route::get('/login', [AuthController::class, 'loginFrm'])->name('loginFrm');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});