<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AgentController;

Route::get('/agents', [AgentController::class, "getAgents"]);
Route::get('/inactive_agents', [AgentController::class, "countInactiveAgents"]);
Route::get('/ten_agents', [AgentController::class, "listTenActiveAgents"]);
Route::get('/reject_agents', [AgentController::class, "rejectActive"]);
