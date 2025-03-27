<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArmyCorpsController;
use App\Http\Controllers\BarracksController;
use App\Http\Controllers\CompaniesController;
use App\Models\army_corps;

Route::get('/cuerpo-ejercito/create', [ArmyCorpsController::class, 'create'])->name('cuerpo_ejercito.create');
Route::post('/cuerpo-ejercito/store', [ArmyCorpsController::class, 'store'])->name('cuerpo_ejercito.store');

Route::get('/cuartel/create', [BarracksController::class, 'create'])->name('cuartel.create');
Route::post('/cuartel/store', [BarracksController::class, 'store'])->name('cuartel.store');

Route::get('/compania/create', [CompaniesController::class, 'create'])->name('compania.create');
Route::post('/compania/store', [CompaniesController::class, 'store'])->name('compania.store');


