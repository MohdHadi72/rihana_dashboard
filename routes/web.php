<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArabHomeController;
use App\Http\Controllers\ArbRihanaController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\featureController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FormleaseController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\leaseformController;
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
Route::get('/indexEng', [RihanaControler::class, 'indexEng'])->name('indexEng');



// Rihana Dashboard  Routes  For Home Page--------------------//

Route::get('/Home',[HomeController::class , 'Homeindex'])->name('Home');
Route::get('/CreateHome', [HomeController::class, 'CreateHome'])->name('Home.create');
Route::post('/HomeStore', [HomeController::class, 'HomeStore'])->name('Home.Store');
Route::get('/deleteHome/{id}', [HomeController::class, 'deleteHome'])->name('deleteHome');
Route::get('/EditHome/{id}', [HomeController::class, 'editHome'])->name('Edit.Home');
Route::post('/updateHome/{id}', [HomeController::class, 'updateHome'])->name('Edit.Home');




// Rihana Dashboard  Routes  For About Page--------------------//

Route::get('/About', [AboutController::class, 'index'])->name('aboutindex');
Route::get('/Create', [AboutController::class, 'AboutCreate']);
Route::post('/Store', [AboutController::class, 'AboutStore'])->name('About.Store');
Route::get('/DeleteAbout/{id}', [AboutController::class, 'deleteAbout'])->name('DeleteAbout');
Route::get('/EditAbout/{id}', [AboutController::class, 'editHome'])->name('Edit.About');
Route::post('/updateAbout/{id}', [AboutController::class, 'updateAbout'])->name('updateAbout');




// Our Team Section Routes ---------------------------//

Route::get('/OurTeam',[ourTeamController::class , 'Index'])->name('OurTeam');
Route::get('/CreateTeam', [ourTeamController::class, 'TeamCreate']);
Route::post('/StoreTeamData',[ourTeamController::class , 'StoreTeamData'])->name('StoreTeamData');
Route::get('/deleteTeam/{id}',[ourTeamController::class , 'deleteTeam'])->name('deleteTeam');
Route::get('/EditTeam/{id}',[ourTeamController::class , 'EditTeam'])->name('EditTeam');
Route::post('/UpdataTeam/{id}',[ourTeamController::class , 'UpdataTeam'])->name('UpdataTeam');


//  Gallery Section  Routes ------------------------------//

Route::get('/Gallery',[GalleryController::class, 'index'])->name('Gallery');
Route::get('/CreateGallery',[GalleryController::class, 'CreateGallery'])->name('CreateGallery');
Route::post('/GalleryStore',[GalleryController::class, 'GalleryStore'])->name('GalleryStore');
Route::get('/GalleryDelete/{id}',[GalleryController::class, 'GalleryDelete'])->name('GalleryDelete');
Route::get('/GalleryEdit/{id}',[GalleryController::class, 'GalleryEdit'])->name('GalleryEdit');
Route::post('/UpdateGallery/{id}',[GalleryController::class, 'UpdateGallery'])->name('UpdateGallery');



//  Contact Section Routes ------------------------------------//

Route::get('/contact',[contactController::class , 'contact'])->name('contact');
Route::get('/ContactCreate',[contactController::class , 'ContactCreate'])->name('ContactCreate');
Route::post('/ContactStore',[contactController::class , 'ContactStore'])->name('ContactStore');
Route::get('/ContactDelete/{id}',[contactController::class , 'ContactDelete'])->name('ContactDelete');
Route::get('/ContactEdit/{id}',[contactController::class , 'ContactEdit'])->name('ContactEdit');
Route::post('/ContactUpdate/{id}',[contactController::class , 'ContactUpdate'])->name('ContactUpdate');


// Form Data Store ---------------------------//
Route::post('FormStore', [FormController::class , 'store'])->name('form.store');



// Lease form Store Route --------------------------------//

Route::post('/form-submit', [LeaseformController::class, 'store'])->name('formsubmit');
// Route::get('/form', [leaseformController::class, 'form']);




//Feature Section Routes ------------------------//

Route::get('/feature' , [featureController::class , 'feature'])->name('feature.index');
Route::get('/featureCreate' , [featureController::class , 'featureCreate'])->name('featureCreate');
Route::post('/featureStore' , [featureController::class , 'featureStore'])->name('featureStore');



// Arabic Route Section -------------------------------------------------------- //
Route::get('/index', [ArbRihanaController::class, 'indexArb']);


