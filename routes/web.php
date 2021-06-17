<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'viewHomePage'])->name('home');
Route::get('/check',[DashboardController::class,'index'])->name('check');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::view('/dashboard','dashboard')->name('dashboard');
    Route::prefix('portfolio')->group(function () {
        Route::view('/','portfolio.portfolio_header')->name('portfolio');
        Route::view('/floating','portfolio.portfolio_floating')->name('portfolio.floating');
        Route::view('/intro','portfolio.portfolio_intro')->name('portfolio.intro');
        Route::view('/qualification','portfolio.portfolio_qualification')->name('portfolio.qualification');
        Route::view('/offer','portfolio.portfolio_offer')->name('portfolio.offer');
        Route::view('/experience','portfolio.portfolio_expertise')->name('portfolio.expertise');
        Route::view('/work','portfolio.portfolio_work')->name('portfolio.work');
        Route::view('/contact','portfolio.portfolio_contact')->name('portfolio.contact');
    });

});

Route::get('/blog',[\App\Http\Controllers\BlogController::class,'index']);






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('index');
});*/

/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/
