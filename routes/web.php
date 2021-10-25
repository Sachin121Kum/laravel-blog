<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/',[WebsiteController::class, 'index'])->name('index');
Route::get('category/{slug}',[WebsiteController::class, 'category'])->name('category');
Route::get('post/{slug}',[WebsiteController::class, 'post'])->name('post');
Route::get('page/{slug}',[WebsiteController::class, 'page'])->name('page');
Route::get('contact',[ShowController::class, 'contact'])->name('contact.show');
Route::post('contact',[ShowController::class, 'contact'])->name('contact.submit');

Route::group(['prefix' => 'admin', 'middleware' =>'auth'],function(){
    // Route::resources('categories',CategoryController);
    // Route::resource('posts',PostCOntroller);
    // Rout::resource('pages',PageController);
    // Route::resource('galleries',GalleryController);

});