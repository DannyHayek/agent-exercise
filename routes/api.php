<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AgentController;
use App\Http\Controllers\WebsiteController;
use App\Models\Website;

Route::get('/agents', [AgentController::class, "getAgents"]);
Route::get('/inactive_agents', [AgentController::class, "countInactiveAgents"]);
Route::get('/ten_agents', [AgentController::class, "listTenActiveAgents"]);
Route::get('/reject_agents', [AgentController::class, "rejectActive"]);
Route::get('/loop_agents', [AgentController::class, "loopAgents"]);
Route::get('/chunk_agents', [AgentController::class, "getChunks"]);
Route::get('/chunk_update_agents', [AgentController::class, "updateChunks"]);
Route::get('/lazy_update_agents', [AgentController::class, "updateLazy"]);

Route::get('/websites', [WebsiteController::class, "getWebsites"]);
Route::get('/agents_websites', [WebsiteController::class, "getWebsitesWithAgents"]);
