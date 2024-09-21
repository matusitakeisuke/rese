<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Laravel\Fortify\Features;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ThankController;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\Shop_allController;
use App\Http\Controllers\DoneController;


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

Route::get('/login', [LoginController::class, 'index']);



Route::get('/register', [RegisterController::class, 'index']);
Route::middleware(['guest:'.config('fortify.guard')])
    ->group(function () {
        Route::get('register', [RegisteredUserController::class, 'create'])
            ->name('register');

        Route::post('register', [RegisteredUserController::class, 'store']);
    });

Route::get('/menu', [MenuController::class, 'index']);

Route::get('/thanks', [ThankController::class, 'index']);

Route::get('/mypage', [MyPageController::class, 'index']);

Route::get('/detail/:shop_id', [DetailController::class, 'index']);

Route::get('/', [Shop_allController::class, 'index']);

Route::get('/done', [DoneController::class, 'index']);




