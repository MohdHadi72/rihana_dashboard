<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RihanaControler;
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
//  Rihana Park Routers ------------------------//

Route::get('/', [RihanaControler::class, 'index']);
Route::get('/indexEng', [RihanaControler::class, 'indexEng']);
Route::get('/indexArb', [RihanaControler::class, 'indexArb']);
Route::get('/index', [RihanaControler::class, 'IndexArabic']);


// Rihana Dashboard  Routes --------------------//

Route::get('/Home',[HomeController::class , 'Homeindex'])->name('Home');
Route::get('/CreateHome', [HomeController::class, 'CreateHome'])->name('Home.create');
Route::post('/HomeStore', [HomeController::class, 'HomeStore'])->name('Home.Store');





Route::get('/About', [AboutController::class, 'index'])->name('aboutindex');
Route::get('/Create', [AboutController::class, 'AboutCreate']);
Route::post('/Store', [AboutController::class, 'AboutStore'])->name('About.Store');
Route::get('/DeleteAbout/{id}', [AboutController::class, 'deleteAbout'])->name('DeleteAbout');
// Route::get('/editAbout/{id}', [AboutController::class, 'editAbout'])->name('editAbout');



// Route::get('/Gallery', [AboutCommand::class, 'indexGallery']);
// Route::get('/Features', [AboutCommand::class, 'indexFeatures']);


