<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('/', [HomeController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


route::get('/redirect', [HomeController::class, 'redirect']);

route::get('/view_home', [HomeController::class, 'view_home']);

route::get('/view_about', [HomeController::class, 'view_about']);

route::get('/view_service', [HomeController::class, 'view_service']);

route::get('/view_plan', [HomeController::class, 'view_plan']);

route::get('/view_contact', [HomeController::class, 'view_contact']);