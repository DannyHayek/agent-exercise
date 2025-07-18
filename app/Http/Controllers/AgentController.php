<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agent;

class AgentController extends Controller
{
    function getAgents () {
        return Agent::all();

    }

    function countActiveAgents () {
        return Agent::where("isActive", true)->count();
    }
}
