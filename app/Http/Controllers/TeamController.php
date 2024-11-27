<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::orderBy('name')->get();

        return view('teams.index')->with('teams', $teams);
    }
    public function show(int $id)
    {
        $team = Team::where('id', $id)->first();

        if($team === null){
            abort(404);
        }

        return view('teams.show')->with('team', $team);

    }
    //
}
