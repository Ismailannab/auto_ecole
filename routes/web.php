
<?php

use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\PermisController;
use App\Http\Controllers\MoniteurController;
use App\Http\Controllers\CondidatController;
use Illuminate\Support\Facades\Route;

Route::get('/vehicules', [VehiculeController::class, 'index'])->name('vehicules.index');
Route::get('/vehicules/create', [VehiculeController::class, 'create'])->name('vehicules.create');
Route::post('/vehicules', [VehiculeController::class, 'store'])->name('vehicules.store');
Route::get('/vehicules/{vehicule}', [VehiculeController::class, 'show'])->name('vehicules.show');
Route::get('/vehicules/{vehicule}/edit', [VehiculeController::class, 'edit'])->name('vehicules.edit');
Route::put('/vehicules/{vehicule}', [VehiculeController::class, 'update'])->name('vehicules.update');
Route::delete('/vehicules/{vehicule}', [VehiculeController::class, 'destroy'])->name('vehicules.destroy');

Route::get('/permis', [PermisController::class, 'index'])->name('permis.index');
Route::get('/permis/create', [PermisController::class, 'create'])->name('permis.create');
Route::post('/permis', [PermisController::class, 'store'])->name('permis.store');
Route::get('/permis/{permis}', [PermisController::class, 'show'])->name('permis.show');
Route::get('/permis/{permis}/edit', [PermisController::class, 'edit'])->name('permis.edit');
Route::put('/permis/{permis}', [PermisController::class, 'update'])->name('permis.update');
Route::delete('/permis/{permis}', [PermisController::class, 'destroy'])->name('permis.destroy');

Route::get('/moniteurs', [MoniteurController::class, 'index'])->name('moniteurs.index');
Route::get('/moniteurs/create', [MoniteurController::class, 'create'])->name('moniteurs.create');
Route::post('/moniteurs', [MoniteurController::class, 'store'])->name('moniteurs.store');
Route::get('/moniteurs/{moniteur}', [MoniteurController::class, 'show'])->name('moniteurs.show');
Route::get('/moniteurs/{moniteur}/edit', [MoniteurController::class, 'edit'])->name('moniteurs.edit');
Route::put('/moniteurs/{moniteur}', [MoniteurController::class, 'update'])->name('moniteurs.update');
Route::delete('/moniteurs/{moniteur}', [MoniteurController::class, 'destroy'])->name('moniteurs.destroy');

Route::get('/condidats', [CondidatController::class, 'index'])->name('condidats.index');
Route::get('/condidats/create', [CondidatController::class, 'create'])->name('condidats.create');
Route::post('/condidats', [CondidatController::class, 'store'])->name('condidats.store');
Route::get('/condidats/{condidat}', [CondidatController::class, 'show'])->name('condidats.show');
Route::get('/condidats/{condidat}/edit', [CondidatController::class, 'edit'])->name('condidats.edit');
Route::put('/condidats/{condidat}', [CondidatController::class, 'update'])->name('condidats.update');
Route::delete('/condidats/{condidat}', [CondidatController::class, 'destroy'])->name('condidats.destroy');



use App\Http\Controllers\SeanceController;

Route::get('/seances', [SeanceController::class, 'index'])->name('seances.index');
Route::get('/seances/create', [SeanceController::class, 'create'])->name('seances.create');
Route::post('/seances', [SeanceController::class, 'store'])->name('seances.store');
Route::get('/seances/{seance}', [SeanceController::class, 'show'])->name('seances.show');
Route::get('/seances/{seance}/edit', [SeanceController::class, 'edit'])->name('seances.edit');
Route::put('/seances/{seance}', [SeanceController::class, 'update'])->name('seances.update');
Route::delete('/seances/{seance}', [SeanceController::class, 'destroy'])->name('seances.destroy');



use App\Http\Controllers\ExamController;


Route::get('/exams', [ExamController::class, 'index'])->name('exams.index');
Route::get('/exams/create', [ExamController::class, 'create'])->name('exams.create');
Route::post('/exams', [ExamController::class, 'store'])->name('exams.store');
Route::get('/exams/{exam}', [ExamController::class, 'show'])->name('exams.show');
Route::get('/exams/{exam}/edit', [ExamController::class, 'edit'])->name('exams.edit');
Route::put('/exams/{exam}', [ExamController::class, 'update'])->name('exams.update');
Route::delete('/exams/{exam}', [ExamController::class, 'destroy'])->name('exams.destroy');




use App\Http\Controllers\PaymentController;

Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
Route::get('/payments/create', [PaymentController::class, 'create'])->name('payments.create');
Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');
Route::get('/payments/{payment}', [PaymentController::class, 'show'])->name('payments.show');
Route::get('/payments/{payment}/edit', [PaymentController::class, 'edit'])->name('payments.edit');
Route::put('/payments/{payment}', [PaymentController::class, 'update'])->name('payments.update');
Route::delete('/payments/{payment}', [PaymentController::class, 'destroy'])->name('payments.destroy');




use App\Http\Controllers\ResultatController;

Route::get('/resultats', [ResultatController::class, 'index'])->name('resultats.index');
Route::get('/resultats/create', [ResultatController::class, 'create'])->name('resultats.create');
Route::post('/resultats', [ResultatController::class, 'store'])->name('resultats.store');
Route::get('/resultats/{resultat}', [ResultatController::class, 'show'])->name('resultats.show');
Route::get('/resultats/{resultat}/edit', [ResultatController::class, 'edit'])->name('resultats.edit');
Route::put('/resultats/{resultat}', [ResultatController::class, 'update'])->name('resultats.update');
Route::delete('/resultats/{resultat}', [ResultatController::class, 'destroy'])->name('resultats.destroy');
