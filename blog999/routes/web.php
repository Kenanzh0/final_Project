<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorlController;
use App\Http\Controllers\DfTotalCasesController;
use App\Http\Controllers\DfWorldRatioController;
use App\Http\Controllers\DfLocationsController;
use App\Http\Controllers\DfWorldRecentController;
use App\Http\Controllers\DfWorldMaxNewDeathController;
use App\Http\Controllers\DfNewCasesSyriaMeanController;
use App\Http\Controllers\DfWorldOverTimeController;
use App\Http\Controllers\DfSyria2Controller;
use App\Http\Controllers\DfSyriaRecent2Controller;
use App\Http\Controllers\DfSyriaMaxController;
use App\Http\Controllers\DfWorldReproductionRateController;
use App\Http\Controllers\DfTestsPerCaseController;
use App\Http\Controllers\SickController;
use App\Http\Controllers\HomController;
use App\Http\Controllers\DfTop5Controller;
use App\Http\Controllers\DfAged65OlderController;
use App\Http\Controllers\DfMaleSmokersController;
use App\Http\Controllers\DfJunSyriaController;



// Route::get('/home', function () {
//     return view('home');
// })->name('home');
Route::get('/home', [HomController::class, 'index'])->name('home');

Route::get('/chartjs', function () {
    return view('chartjs');
})->name('chartjs');

// Route::get('/flot', function () {
//     return view('flot');
// })->name('flot');
Route::get('/bar', [DfTop5Controller::class, 'index'])->name('bar');

 Route::get('/flot', [DfAged65OlderController::class, 'index'])->name('flot');

 Route::get('/chartjs', [DfJunSyriaController::class, 'index'])->name('chartjs');






// Route::get('/bar', function () {
//     $username='37270409190';

//     return view('bar',compact('username'));
// })->name('bar');

Route::get('/master', function () {
    return view('layouts.master');

})->name('master');




//Route::get('/insert', function () {

   // $users = new Dfworld;
   // $users->title = 'samer'
//});

Route::get('/tables', [WorlController::class, 'index']);
Route::get('/df_world_max_new_death', [DfWorldMaxNewDeathController::class, 'index'])->name('df_world_max_new_death');
Route::get('/df_world_recent', [DfWorldRecentController::class, 'index'])->name('df_world_recent');
Route::get('/df_world_over_time', [DfWorldOverTimeController::class, 'index'])->name('df_world_over_time');
Route::get('/df_syria2', [DfSyria2Controller::class, 'index'])->name('df_syria2');
Route::get('/df_syria_recent2', [DfSyriaRecent2Controller::class, 'index'])->name('df_syria_recent2');
Route::get('/df_syria_max', [DfSyriaMaxController::class, 'index'])->name('df_syria_max');
Route::get('/df_world_reproduction_rate', [DfWorldReproductionRateController::class, 'index'])->name('df_world_reproduction_rate');
Route::get('/df_tests_per_case', [DfTestsPerCaseController::class, 'index'])->name('df_tests_per_case');
// Route::get('/sike', [SickController::class, 'index'])->name('sick');
Route::get('/', [DfTotalCasesController::class, 'index']);
//Route::get('/', [DfWorldRatioController::class, 'index']);



//Route::get('/test',function(){
 //   return 'Ahmad Habiba';
//});
Route::get('/sike', [SickController::class, 'create'])->name('sike');
Route::post('/sike/create', [SickController::class, 'store']);
