<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agent;

class AgentController extends Controller
{
    function getAgents () {
        $agents = Agent::all();
        return $agents;
    }

    function countInactiveAgents () {
        return Agent::where("isActive", false)->count();
    }

    function listTenActiveAgents () {
        return Agent::select('name')->where("isActive", true)->orderBy('name')->limit(10)->get();
    }

    function rejectActive() {
        $agents = Agent::all();

        $agents = $agents->reject(function (Agent $agent) {
            return $agent->isActive;
        });

        return $agents;
    }
}
