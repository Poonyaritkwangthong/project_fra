<?php

use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('admin')->group(function () {
    Route::get('/index', function () {
        return view('admin.index');
    });
    Route::resource('question', QuestionController::class);

    Route::resource('choice', ChoiceController::class);
    Route::get('/informant/index', function () {
        return view('admin.informant.index');
    });
    Route::get('/informant_scores/index', function () {
        return view('admin.informant_scores.index');
    });
});

Route::get('/page/form_01', [IncomeController::class, 'showForm1'])->name('form_01');
Route::post('/page/form_01', [IncomeController::class, 'processForm1'])->name('form_01.process');
Route::get('/page/form_02', [IncomeController::class, 'showNextStep2'])->name('form_02');

Route::get('/page/form_informant', function () {
    return view('/page/form_informant');
 });
