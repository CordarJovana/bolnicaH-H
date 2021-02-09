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
use App\Http\Controllers\MainController;
use App\Http\Controllers\DoktorController;
use App\Http\Controllers\PacijentController;
use App\Http\Controllers\PregledController;
Route::get('/', [MainController::class, 'pocetna']);

Route::get('/pocetna', function(){
    $doktori=DoktorController::vratiDoktore();
    $pacijenti=PacijentController::vratiPacijente();
    return view('pocetna',['doktori'=>$doktori, 'pacijenti'=>$pacijenti]);
});

Route::get('/pacijent', [PacijentController::class, 'add']);
Route::post('/pacijent', [PacijentController::class, 'create']);

Route::get('/doktor', [DoktorController::class, 'add']);
Route::post('/doktor', [DoktorController::class, 'create']);

Route::get('/pacijent/{pacijent}', [PacijentController::class, 'edit']);
Route::post('/pacijent/{pacijent}', [PacijentController::class, 'update']);

Route::get('/doktor/{doktor}', [DoktorController::class, 'edit']);
Route::post('/doktor/{doktor}', [DoktorController::class, 'update']);

Route::get('/pacijentdelete/{pacijent}', [PacijentController::class, 'delete']);
Route::delete('/pacijentdelete/{pacijent}', [PacijentController::class, 'obrisiPacijenta']);

Route::get('/doktordelete/{doktor}', [DoktorController::class, 'delete']);
Route::delete('/doktordelete/{doktor}', [DoktorController::class, 'obrisiDoktora']);


