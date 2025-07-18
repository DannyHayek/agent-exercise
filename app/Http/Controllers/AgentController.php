<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

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

    function loopAgents () {
        $agents = Agent::all();
        foreach ($agents as $a) {
            echo "This is agent " . $a->name . "<br>";
        }
    }

    function getChunks () {
        Agent::chunk(10, function (Collection $agents) {
            foreach ($agents as $a) {
                echo "Agent " . $a->name . " is " . ($a->isActive ? " active " : " inactive ") . "<br>";
            }
        });
    }

    function updateChunks () {
        Agent::where("isActive", false)->chunkById(10, function (Collection $agents) {
            $agents->each->update(['isActive' => true]);
        });
    }

    function updateLazy () {
        Agent::where("isActive", true)->lazyById(10)->each->update(['isActive' => false]);
    }
}
