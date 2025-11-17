<?php

use App\Http\Controllers\heroPageController;
use App\Http\Controllers\ManPageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\WomanPageController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('index/page',[PagesController::class,'index'])->name('index.page');
Route::get('dashboard/page',[PagesController::class, 'dashboard'])->name('dashboard.page');

// hero page controller
Route::get('main/page',[heroPageController::class, 'main'])->name('main.page');
Route::get('hero/page',[heroPageController::class, 'index'])->name('hero.page');
Route::put('store/hero',[heroPageController::class, 'store'])->name('store.hero');
Route::get('list/page',[heroPageController::class, 'list'])->name('list.page');
Route::get('update/hero/{id}',[heroPageController::class, 'edit'])->name('edit.hero');
Route::put('update/hero/{id}',[heroPageController::class, 'update'])->name('update.hero');
Route::delete('delete/hero/{id}',[heroPageController::class, 'delete'])->name('delete.hero');

// hero page controller end

// woman page controlle starat
 
Route::get('woman/page',[WomanPageController::class,'index'])->name('woman.page');
Route::put('store/woman',[WomanPageController::class,'store'])->name('store.woman');
Route::get('list/woman',[WomanPageController::class, 'list'])->name('list.woman');
Route::get('edit/woman/{id}',[WomanPageController::class, 'edit'])->name('edit.woman');
Route::put('update/woman/{id}',[WomanPageController::class, 'update'])->name('update.woman');
Route::delete('woman/delete/{id}',[WomanPageController::class, 'delete'])->name('woman.delete');
// woman page controller end

// Man page controller start
Route::get('man/page',[ManPageController::class,'index'])->name('man.page');
Route::put('store/man',[ManPageController::class,'store' ])->name('store.man');
Route::get('list/man',[ManPageController::class, 'list'])->name('list.man');
Route::get('edit/man/{id}',[ManPageController::class, 'edit'])->name('edit.man');
Route::put('update/man/{id}',[ManPageController::class, 'update'])->name('update.man');
Route::delete('delete/man/{id}',[ManPageController::class, 'delete'])->name('delete.man');
// Man page controller end