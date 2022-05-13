<?php

use App\Http\Controllers\EditController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\Report;
use App\Http\Controllers\MedReportController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\SocialmediaController;
use App\Http\Controllers\QrCodeController;
////////////

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

//Services  /electrical, hvac , construction , nitrogen , plumbing , maintanance/

Route::get('/AddNewPatientReport', function () {
  
   return view('AddNewPatientReport');
});
Auth::routes();
Route::post('/AddNewPatientReport/pat_store', [MedReportController::class, 'pat_store'])->name('AddNewPatientReport');
Route::post('/AddNewPatientReport/rep_store', [MedReportController::class, 'rep_store'])->name('AddNewPatientReport');
Route::post('/R', [MedReportController::class,'Search_Criteria']);

Route::get('/showRep/{id}', [MedReportController::class,'showRep']); 
Route::get('/showPat/{id}', [MedReportController::class,'showPat']); 
Route::get('/showlogo/{id}', [MedReportController::class,'showlogo']);
Route::get('/', function () {
   $RepData = Report::all();
   return view('welcome',compact('RepData'));
});
Route::get('/getSubcategory',[MedReportController::class,'getSubcategory']);
Route::get('/getReport/sh', [MedReportController::class,'search']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/ShowDetalis{id}', function () {
//   return view('details');
//});


Route::get('/admin', function () {
  
   return view('/Admin/admin');
});




 //توجيه  اللوغو 
 Route::get('/logo', [LogoController::class,'index']);
 Route::post('/store', [LogoController::class, 'store']);
 Route::get('/delete/{id}', [LogoController::class,'destroy']);
 Route::get('/w/showslider/{id}', [LogoController::class,'show']);


 //إضافة وتعديل الايميل  
 Route::get('/social', [SocialmediaController::class,'index']);
 Route::get('/delsoc/{id}', [SocialmediaController::class,'destroy']);
 Route::post('/storesocial', [SocialmediaController::class, 'store']);
 Route::get('/edit/{id}', [SocialmediaController::class, 'edit']);
 Route::post('/edit', [SocialmediaController::class, 'update']);

 Route::get('/generate-qrcode', [QrCodeController::class, 'index']);



 Route::get('/reportpage', function () {
  
   return view('reportpage');
});

Route::get('/index', [MedReportController::class, 'index']);
Route::get('/repdetails/{id}', [MedReportController::class, 'setValueInGlobalVar']);
Route::get('/pdf', [MedReportController::class, 'pdf']);

//Route::get('/repdetails', function () {
  // return view('repdetails');
//});



//////////////////////////////////////////////تعديلات التقرير
Route::get('/report', [EditController::class, 'view']);
Route::get('/ShowDetalis/{id}', [MedReportController::class,'ShowDetalis'])->name('details');
Route::get('/getpatrep/sh', [EditController::class,'search']);
Route::get('/delrep/{id}', [EditController::class,'destroy']);
Route::post('/editpat', [EditController::class, 'updatepat']);
Route::get('/editrep/{id}', [EditController::class, 'editrep']);
Route::post('/updaterep', [EditController::class, 'updaterep']);