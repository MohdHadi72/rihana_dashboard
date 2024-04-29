<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainHomeController;
use App\Http\Controllers\ourTeamController;
use App\Http\Controllers\RihanaControler;
use Illuminate\Foundation\Console\AboutCommand;
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


// Rihana Dashboard  Routes  For Home Page--------------------//

Route::get('/Home',[HomeController::class , 'Homeindex'])->name('Home');
Route::get('/CreateHome', [HomeController::class, 'CreateHome'])->name('Home.create');
Route::post('/HomeStore', [HomeController::class, 'HomeStore'])->name('Home.Store');
Route::get('/deleteHome/{id}', [HomeController::class, 'deleteHome'])->name('deleteHome');
Route::get('/EditHome/{id}', [HomeController::class, 'editHome'])->name('Edit.Home');
Route::post('/updateHome/{id}', [HomeController::class, 'updateHome'])->name('Edit.Home');




// Rihana Dashboard  Routes  For Home Page--------------------//

Route::get('/About', [AboutController::class, 'index'])->name('aboutindex');
Route::get('/Create', [AboutController::class, 'AboutCreate']);
Route::post('/Store', [AboutController::class, 'AboutStore'])->name('About.Store');
Route::get('/DeleteAbout/{id}', [AboutController::class, 'deleteAbout'])->name('DeleteAbout');
Route::get('/EditAbout/{id}', [AboutController::class, 'editHome'])->name('Edit.About');
Route::post('/updateAbout/{id}', [AboutController::class, 'updateAbout'])->name('updateAbout');


// Route::get('/about', [AboutController::class, 'HomeDetailes'])->name('about');

// Our Team Section Controller ---------------------------//

Route::get('/OurTeam',[ourTeamController::class , 'Index'])->name('OurTeam');
Route::get('/CreateTeam', [ourTeamController::class, 'TeamCreate']);
Route::post('/StoreTeamData',[ourTeamController::class , 'StoreTeamData'])->name('StoreTeamData');
Route::get('/deleteTeam/{id}',[ourTeamController::class , 'deleteTeam'])->name('deleteTeam');
Route::get('/EditTeam/{id}',[ourTeamController::class , 'EditTeam'])->name('EditTeam');
Route::post('/UpdataTeam/{id}',[ourTeamController::class , 'UpdataTeam'])->name('UpdataTeam');
 



Route::get('/Gallery',[GalleryController::class, 'index'])->name('Gallery');

