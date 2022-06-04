<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CEVController;
use App\Http\Controllers\ParticipantController;
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

Route::get('/for', function () {
    return view('Formulaire');

})->name('Formulaire');

Route::get('/Acceuil', function () {
    return view('PageAcceuil');
});

Route::get('/Connect', function () {
    return view('Connexion');
})->name('Connexion');

Route::get('/spacePart', function () {
    return view('EspaceParticipant');
})->name('dashboard.Part');


Route::get('/Bar', function () {
    return view('Barre');
});

Route::get('/for', [CEVController::class, 'create'])->name('post.create');
Route::post('/for', [CEVController::class, 'store'])->name('post.store');

Route::get('/for.Cert', [CertificatController::class, 'Afficher_Annuaire'])->name('post.Afficher_Annuaire');
Route::post('/for.Cert', [CertificatController::class, 'Ajouter_un_certificat'])->name('post.Ajouter_un_certificat');
Route::post('/verification', [ParticipantController::class, 'Authentification_Participant'])->name('post.AuthPart');


