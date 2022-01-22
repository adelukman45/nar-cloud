<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CloudController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use App\Models\Cloud;

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

Route::get('/', function () {
    return view('user', [
        'clouds' => Cloud::all(),
        'categories' => Category::all(),
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');

Route::resource('dashboard/clouds', CloudController::class)->middleware('auth');
Route::resource('dashboard/categories', CategoryController::class)->middleware('auth');
require __DIR__ . '/auth.php';
