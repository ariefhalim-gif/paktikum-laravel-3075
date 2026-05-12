<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartnerController;

Route::get('/', function () {
    return redirect('/admin/partners');
});

Route::get('/admin/partners', [PartnerController::class, 'index']);
Route::post('/admin/partners', [PartnerController::class, 'store']);