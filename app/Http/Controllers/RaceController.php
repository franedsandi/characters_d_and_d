<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Race;
use App\Models\Character;


class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $races = Race::orderBy('id', 'desc')->paginate(8);
        return view('races.index', compact('races'));
    }

    public function characterRaces(Race $race) {
        $characters = $race->characters()->orderBy('id', 'desc')->paginate(4);
        return view('races.character_race', compact('race', 'characters'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Race $race)
    {
        return view('races.show', compact('race'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
