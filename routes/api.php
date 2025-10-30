<?php

use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\Api\RuleController;
use App\Http\Controllers\ResultController;
use Illuminate\Support\Facades\Route;

Route::get('/questions', [QuestionController::class, 'index']);
Route::get('/rules', [RuleController::class, 'index']);
Route::post('/results', [ResultController::class, 'store']);
