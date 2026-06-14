<?php


use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\PartnerController;



/*
|--------------------------------------------------------------------------
| User
|--------------------------------------------------------------------------
*/


Route::get('/',
[HomeController::class,'index']);



Route::get('/event/1',
[EventController::class,'show']);



Route::get('/checkout',
[EventController::class,'checkout']);



Route::get('/my-ticket',
[TicketController::class,'index']);





/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/


Route::prefix('admin')
->name('admin.')
->group(function(){



    Route::get('/',
    [DashboardController::class,'index']);



    Route::resource('events',
    AdminEventController::class);



    Route::get('/transactions',
    function(){

        return view('admin.transactions');

    });



});




/*
|--------------------------------------------------------------------------
| Category
|--------------------------------------------------------------------------
*/


Route::get('/admin/categories',
[CategoryController::class,'index']);

Route::get(
'/admin/partners',
[PartnerController::class,'index']
);


Route::post(
'/admin/partners',
[PartnerController::class,'store']
);