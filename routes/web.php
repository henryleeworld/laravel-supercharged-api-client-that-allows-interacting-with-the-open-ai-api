<?php

use App\Http\Controllers\OpenAIController;
use Illuminate\Support\Facades\Route;

Route::get('opne-ai/create-image/', [OpenAIController::class, 'createImage']);
