<?php

use Illuminate\Support\Facades\Route;

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

//ADMIN
//Route::group(['middleware'=>['can:admin']],function() {
    Route::prefix('admin')->group(function () {
        //UserManager
        Route::prefix('manage')->group(function () {
            Route::resource("categories", \App\Http\Controllers\Admin\ManageCategoryController::class);
            Route::get('/category', function () {
                return view('admin.categories.index');
            });
        });
    });
//});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/managers/dashboard', function () {
    return view('managers.dashboards.index');
});


