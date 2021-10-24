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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/',[App\Http\Controllers\WebSiteController::class], 'index')->name('index');
Route::get('category/{slug}',[App\Http\Controllers\WebSiteController::class], 'category')->name('category');
Route::get('post/{slug}',[App\Http\Controllers\WebSiteController::class], 'post')->name('post');
Route::get('page/{slug}',[App\Http\Controllers\WebSiteController::class], 'page')->name('page');
Route::get('contact',[App\Http\Controllers\ShowController::class], 'contact')->name('contact.show');
Route::post('contact',[App\Http\Controllers\ShowController::class], 'contact')->name('contact.submit');

Route::group(['prefix' => 'admin', 'middleware' =>'auth'],function(){
    Route::resources('categories',CategoryController);
    Route::resource('posts',PostCOntroller);
    Rout::resource('pages',PageController);
    Route::resource('galleries',GalleryController);

});