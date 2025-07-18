<?php

use App\Http\Controllers\AgentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/agents', [AgentController::class, "getAgents"]);
Route::get('/active_agents', [AgentController::class, "countActiveAgents"]);

