<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ArtikelController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/add', function () {
    return view('add');
});

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::middleware('auth')->group(function () {
    //
});

Route::get('/artikel', [ArtikelController::class, 'show'])->name('artikel.show');
Route::post('/add_process', [ArtikelController::class, 'add_process']);
Route::get('/detail/{id}', [ArtikelController::class, 'detail']);
Route::get('/admin',  [ArtikelController::class, 'show_by_admin']) -> name('show.admin');
Route::get('/edit/{id}', [ArtikelController::class, 'edit']);
Route::post('/edit_process', [ArtikelController::class, 'edit_process']);
Route::get('/delete/{id}', [ArtikelController::class, 'delete']);
Route::get('/', [ArtikelController::class, 'index']);
Route::get('/komentar/{category_slug}', [ArtikelController::class, 'viewCategorySlug'])('viewCategorySlug');
Route::get('/komentar/{category_slug}/{post_slug}', [ArtikelController::class, 'viewPost'])->name('viewPost');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


