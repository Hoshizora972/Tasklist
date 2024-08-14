<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;

//Création de la route vers la vue home
Route::get('/',[TaskController::class,'index'])->name('home');
//Création de la route vers la vue list (list des taches)
Route::get('/tasks',[TaskController::class,'listing'])->name('list');
Route::get('/info', [TaskController::class,'info'])->name('info');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    
//Création des routes pour la suppression et la modification des taches + la sauvegarde de l'etat
Route::get('/task/update/{task}',[TaskController::class,'update'])->name('task.update'); 
Route::get('/task/remove/{task}',[TaskController::class,'remove'])->name('task.remove'); 
Route::get('/task/destroy/{task}',[TaskController::class,'destroy'])->name('task.destroy'); 
Route::get('/task/edit/{task}', [TaskController::class,'edit'])->name('task.edit');
Route::post('/task/maj',[TaskController::class,'maj'])->name('task.maj'); 

// Création de la route vers la vue form (formulaire d'ajout de nouvelle taches),
// et de la route post qui sauvegardera les données saisi par l'utilisateur
Route::get('/task/add',[TaskController::class,'create'])->name('task.add');
Route::post('/task/save',[TaskController::class,'store'])->name('task.save'); 
});


require __DIR__.'/auth.php';
