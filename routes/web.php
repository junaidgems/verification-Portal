<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\verifyCertificate;

Route::get('/verify', [verifyCertificate::class, 'index'])->name('verify.index');
Route::post('/verify', [verifyCertificate::class, 'verify'])->name('verify.submit');

// Result Page Route
Route::get('/verification-result', function () {
    if (!session('verified_certificate')) {
        return redirect()->route('verify.index');
    }
    return view('credential-verified');
})->name('verify.result');