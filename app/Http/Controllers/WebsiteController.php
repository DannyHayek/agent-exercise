<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

use App\Models\Website;
use App\Models\Agent;

class WebsiteController extends Controller
{
    function getWebsites ($id = null) {
        if (!$id) {
            return Website::all();
        }
        return Website::findOrFail($id);
    }

    function getWebsitesWithAgents () {
        return Website::addSelect(['agent' => Agent::select('name')
        ->whereColumn('agent_id', 'agents.id')
        ->orderByDesc('url')
        ->limit(1)])->get();
    }

    function locateOrCreate ($website) {
        return Website::firstOrCreate([
            'url' => $website,
            'agent_id' => fake()->numberBetween(1, 40),
            'ip_address' => fake()->ipv4(),
        ]);
    }

}

//SELECT agents.name, websites.url FROM `agents`
// JOIN websites ON agents.id = websites.agent_id
