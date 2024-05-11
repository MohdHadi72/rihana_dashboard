<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArabHomeController;
use App\Http\Controllers\ArbAboutController;
use App\Http\Controllers\ArbContactController;
use App\Http\Controllers\ArbFormController;
use App\Http\Controllers\arbgalleryController;
use App\Http\Controllers\ArbleaseformController;
use App\Http\Controllers\ArbLogosController;
use App\Http\Controllers\ArbOurTeamController;
use App\Http\Controllers\ArbRihanaController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\featureController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FormleaseController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\leaseformController;
use App\Http\Controllers\LogoPageController;
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

Route::get('/Admin', [HomeController::class, 'Homeindex'])->name('Home');
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

Route::get('/OurTeam', [ourTeamController::class, 'Index'])->name('OurTeam');
Route::get('/CreateTeam', [ourTeamController::class, 'TeamCreate']);
Route::post('/StoreTeamData', [ourTeamController::class, 'StoreTeamData'])->name('StoreTeamData');
Route::get('/deleteTeam/{id}', [ourTeamController::class, 'deleteTeam'])->name('deleteTeam');
Route::get('/EditTeam/{id}', [ourTeamController::class, 'EditTeam'])->name('EditTeam');
Route::post('/UpdataTeam/{id}', [ourTeamController::class, 'UpdataTeam'])->name('UpdataTeam');


//  Gallery Section  Routes ------------------------------//

Route::get('/Gallery', [GalleryController::class, 'index'])->name('Gallery');
Route::get('/CreateGallery', [GalleryController::class, 'CreateGallery'])->name('CreateGallery');
Route::post('/GalleryStore', [GalleryController::class, 'GalleryStore'])->name('GalleryStore');
Route::get('/GalleryDelete/{id}', [GalleryController::class, 'GalleryDelete'])->name('GalleryDelete');
Route::get('/GalleryEdit/{id}', [GalleryController::class, 'GalleryEdit'])->name('GalleryEdit');
Route::post('/UpdateGallery/{id}', [GalleryController::class, 'UpdateGallery'])->name('UpdateGallery');



//  Contact Section Routes ------------------------------------//

Route::get('/contact', [contactController::class, 'contact'])->name('contact');
Route::get('/ContactCreate', [contactController::class, 'ContactCreate'])->name('ContactCreate');
Route::post('/ContactStore', [contactController::class, 'ContactStore'])->name('ContactStore');
Route::get('/ContactDelete/{id}', [contactController::class, 'ContactDelete'])->name('ContactDelete');
Route::get('/ContactEdit/{id}', [contactController::class, 'ContactEdit'])->name('ContactEdit');
Route::post('/ContactUpdate/{id}', [contactController::class, 'ContactUpdate'])->name('ContactUpdate');


// Form Data Store ---------------------------//
Route::post('FormStore', [FormController::class, 'store'])->name('form.store');

// Lease form Store Route --------------------------------//
Route::post('/form-submit', [LeaseformController::class, 'store'])->name('formsubmit');



//Feature Section Routes ------------------------//

Route::get('/feature', [featureController::class, 'feature'])->name('feature.index');
Route::get('/featureCreate', [featureController::class, 'featureCreate'])->name('featureCreate');
Route::post('/featureStore', [featureController::class, 'featureStore'])->name('featureStore');


// Rihana Park Arabic Route Section -------------------------------------------------------- //
Route::get('/index', [ArbRihanaController::class, 'indexArb'])->name('indexArb');



//  Arabic Home Dashboard Route Section ---------------------------------------------------//

Route::get('/ArbHome', [ArabHomeController::class, 'ArbHome'])->name('ArbHome');
Route::get('/create', [ArabHomeController::class, 'ArbCreate']);
Route::post('/ArbHomeStore', [ArabHomeController::class, 'ArbHomeStore'])->name('ArbHome.Store');
Route::get('/ArbHomeDelete/{id}', [ArabHomeController::class, 'ArbHomeDelete'])->name('ArbHomeDelete');
Route::get('/ArbHomecreate/{id}', [ArabHomeController::class, 'ArbHomecreate'])->name('ArbHome.create');
Route::post('/ArbHomeupdate/{id}', [ArabHomeController::class, 'ArbHomeupdate'])->name('ArbHomeupdate');



// Arabic About Dashboard Route Section   -------------------------------------------//

Route::get('/ArbAbout', [ArbAboutController::class, 'ArbAbout'])->name('ArbAbout');
Route::get('/ArbCreate', [ArbAboutController::class, 'ArbCreate']);
Route::post('/ArbAboutStore', [ArbAboutController::class, 'ArbAboutStore'])->name('ArbAbout.Store');
Route::get('/ArbAboutDelete/{id}', [ArbAboutController::class, 'ArbAboutDelete'])->name('ArbAboutDelete');
Route::get('/ArbAboutEdit/{id}', [ArbAboutController::class, 'ArbAboutEdit'])->name('ArbAbout.Edit');
Route::post('/ArbAboutUpdate/{id}', [ArbAboutController::class, 'ArbAboutUpdate'])->name('ArbAboutUpdate');


// Arabic  Our Team Route Section -------------------------------------------//

Route::get('/ArbOurTeam', [ArbOurTeamController::class, 'ArbOurTeam'])->name('ArbOurTeam');
Route::get('/ArbOurTeamCreate', [ArbOurTeamController::class, 'ArbOurTeamCreate']);
Route::post('/ArbOurTeamStore', [ArbOurTeamController::class, 'ArbOurTeamStore'])->name('ArbOurTeam.Store');
Route::get('/ArbOurTeamDelete/{id}', [ArbOurTeamController::class, 'ArbOurTeamDelete'])->name('ArbOurTeamDelete');
Route::get('/ArbOurTeamEdit/{id}', [ArbOurTeamController::class, 'ArbOurTeamEdit'])->name('ArbOurTeamEdit');
Route::post('/ArbOurTeamUpdate/{id}', [ArbOurTeamController::class, 'ArbOurTeamUpdate'])->name('ArbOurTeamUpdate');


// Arabic  Gallery Route Section -------------------------------------------------------- //

Route::get('/ArbGallery', [arbgalleryController::class, 'ArbGallery'])->name('ArbGallery');
Route::get('/ArbGalleryCreate', [arbgalleryController::class, 'ArbGalleryCreate']);
Route::post('/ArbGalleryStore', [arbgalleryController::class, 'ArbGalleryStore'])->name('ArbGalleryStore');
Route::get('/ArbGalleryDelete/{id}', [arbgalleryController::class, 'ArbGalleryDelete'])->name('ArbGalleryDelete');
Route::get('/ArbGalleryEdit/{id}', [arbgalleryController::class, 'ArbGalleryEdit'])->name('ArbGallery.Edit');
Route::post('/ArbGalleryUpdate/{id}', [arbgalleryController::class, 'ArbGalleryUpdate'])->name('ArbGalleryUpdate');


// Arabic Contact Routes Section ----------------------------------------------------------//

Route::get('/ArbContact', [ArbContactController::class, 'ArbContact'])->name('ArbContact');
Route::get('/ArbContactCreate', [ArbContactController::class, 'ArbContactCreate'])->name('ArbContactCreate');
Route::post('/ArbContactStore', [ArbContactController::class, 'ArbContactStore'])->name('ArbContactStore');
// Route::get('/ArbContactDelete/{id}' , [ArbContactController::class , 'ArbContactDelete'])->name('ArbContactDelete');
Route::get('/ArbContactEdit/{id}', [ArbContactController::class, 'ArbContactEdit'])->name('ArbContactEdit');
Route::post('/ArbContactUpdate/{id}', [ArbContactController::class, 'ArbContactUpdate'])->name('ArbContactUpdate');



// Arb Form Route Section -----------------------//

Route::post('ArbFormStore', [ArbFormController::class, 'ArbFormStore'])->name('ArbFormStore');




// Lease Form Route Section ----------------------------------- //

Route::post('/leaseform', [ArbleaseformController::class, 'leaseform'])->name('leaseform');
Route::get('/Show', [ArbleaseformController::class, 'Show'])->name('Show');



// Logo Section Route -------------------------------------------- //

Route::get('/logo', [LogoPageController::class, 'logos'])->name('logo');
Route::get('/logosCreate', [LogoPageController::class, 'logosCreate'])->name('logosCreate');
Route::post('/logosStore', [LogoPageController::class, 'logosStore'])->name('logos.Store');
Route::get('/logosDelete/{id}', [LogoPageController::class, 'logosDelete'])->name('logosDelete');
Route::get('/logosEdit/{id}', [LogoPageController::class, 'logosEdit'])->name('logosEdit');
Route::post('/LogoUpdate/{id}', [LogoPageController::class, 'LogoUpdate'])->name('LogoUpdate');

//  Arb Logo Section Route -------------------------------------------- //

Route::get('/Arblogo', [ArbLogosController::class, 'logos'])->name('Arblogo');
Route::get('/ArblogosCreate', [ArbLogosController::class, 'logosCreate'])->name('ArblogosCreate');
Route::post('/ArblogosStore', [ArbLogosController::class, 'logosStore'])->name('ArblogosStore');
Route::get('/logosDelete/{id}', [ArbLogosController::class, 'logosDelete'])->name('logosDelete');
Route::get('/logosEdit/{id}', [ArbLogosController::class, 'logosEdit'])->name('logosEdit');
Route::post('/LogoUpdate/{id}', [ArbLogosController::class, 'LogoUpdate'])->name('LogoUpdate');
