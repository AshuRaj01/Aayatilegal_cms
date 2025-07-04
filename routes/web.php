<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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
// Website Routes
// Page Redirection Routes
Route::get('/',[HomeController::class,'index']);
Route::get('/About-us',[AboutController::class, 'index']);
Route::get('/Practice-Area',[ServicesController::class, 'index']);
Route::get('/Contact-us',[ContactController::class, 'index']);

// Practice Area Routes
Route::prefix('Practice-Area')->group(function () {
    Route::view('antitrust-competition', 'frontend.PracticeArea.AntitrustCompetition');
    Route::view('banking-and-finance', 'frontend.PracticeArea.BankingAndFinance');
    Route::view('consumer-protection', 'frontend.PracticeArea.ConsumerProtection');
    Route::view('corporate-and-commercial-matters', 'frontend.PracticeArea.Corporate');
    Route::view('criminal-litigation', 'frontend.PracticeArea.CriminalLitigation');
    Route::view('dispute-resolution', 'frontend.PracticeArea.DisputeResolution');
    Route::view('financial-services-regulatory', 'frontend.PracticeArea.FinancialServicesRegulatory');
    Route::view('infrastructure-and-energy', 'frontend.PracticeArea.InfrastructureAndEnergy');
    Route::view('insolvency', 'frontend.PracticeArea.Insolvency');
    Route::view('intellectual-property', 'frontend.PracticeArea.IntellectualProperty');
    Route::view('labour-and-employment', 'frontend.PracticeArea.LabourAndEmployment');
    Route::view('private-equity-and-venture-capital', 'frontend.PracticeArea.PrivateEquityAndVentureCapital');
    Route::view('real-estate-and-property', 'frontend.PracticeArea.RealEstateAndProperty');
    Route::view('taxation', 'frontend.PracticeArea.Taxation');
    Route::view('white-collar-crimes', 'frontend.PracticeArea.WhiteCollarCrimes');
    Route::view('insurance', 'frontend.PracticeArea.Insurance');
    Route::view('private-client', 'frontend.PracticeArea.PrivateClient');
    Route::view('technology-media-and-telecommunications', 'frontend.PracticeArea.TechnologyMediaAndTelecommunications');
});



// Login Page Route
Route::view('/cb-admin', 'Auth.login');


// Backend Routes
Route::prefix('backoffice')->group(function () {
    Route::view('/dashboard', 'backend.dashboard');
    Route::view('/All-Post', 'backend.post-list');
    Route::get('/Add-Post', [PostController::class, 'index']);
    Route::view('/Trash', 'backend.trash');
    // Route::view('/All-Category', 'backend.category');
    Route::get('/All-Category', [CategoryController::class, 'index']);
    Route::post('/save-category', [CategoryController::class, 'store']);
    Route::view('/Tags', 'backend.tags');
    Route::view('/Library', 'backend.library');
    Route::view('/All-Users', 'backend.users');
    Route::view('/All-Roles', 'backend.role');
    Route::view('/All-Comments', 'backend.comments');
    Route::view('/Pending-Comments', 'backend.pending-comments');
    Route::post('/login', [UserController::class, 'login']);
    Route::post('/logout', [UserController::class, 'logout']);
});

Route::get('/delete/{id}', [CategoryController::class, 'destroy']);

Route::post('/api/upload-featured-image', [PostController::class, 'uploadFeaturedImage']);


// Cahe Clearing Route
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return 'Cache Cleared!';
});
