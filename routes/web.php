<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect()->route('index');
})->name('home');

Route::prefix('lodha-bhandup-corinthia-newlaunch')->group(function () {
    Route::get('/', function () {
        return view('frontend.index');
    })->name('index');

    Route::get('/privacy-policy', function () {
        return view('frontend.privacy-policy');
    })->name('privacy-policy');

    Route::post('contact/submit', 'App\Http\Controllers\frontend\ContactController@submit')->name('frontend.contact.submit');
    Route::get('/thank-you', function () {
        if (!request()->hasValidSignature()) {
            return redirect()->route('index');
        }
        $key = 'thank_you_accessed_' . sha1(request()->fullUrl());
        if (Cache::has($key)) {
            return redirect()->route('index'); // Redirect if the URL has already been accessed
        }
        Cache::put($key, true, now()->addMinutes(3));
        return view('frontend.thankyou');
    })->name('thank-you');
});



