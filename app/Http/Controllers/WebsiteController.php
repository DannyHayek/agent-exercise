<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

use App\Models\Website;
use App\Models\Agent;

class WebsiteController extends Controller
{
    function getWebsites () {
        return Website::all();
    }

    function getWebsitesWithAgents () {
        return Website::addSelect(['agent' => Agent::select('name')
        ->whereColumn('agent_id', 'agents.id')
        ->orderByDesc('url')
        ->limit(1)])->get();
    }
}

//SELECT agents.name, websites.url FROM `agents`
// JOIN websites ON agents.id = websites.agent_id
