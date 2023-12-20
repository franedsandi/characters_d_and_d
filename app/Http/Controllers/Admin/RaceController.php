<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Race;
use App\Models\Character;
use App\Http\Requests\RaceRequest;


class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $races = Race::orderBy('id', 'desc')->paginate(8);
        return view('admin.races.index', compact('races'));
    }

    public function characterRaces(Race $race) {
        $characters = $race->characters()->orderBy('id', 'desc')->paginate(4);
        return view('admin.races.character_race', compact('race', 'characters'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('races.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RaceRequest $request)
    {
        $exist = Race::where('name', $request->name)->first();
        if($exist){
            return redirect()->route('admin.races.index')->with('error', 'This race already exist');
        }else{
            $new_race = new Race($form_data);
            $new_race->slug = Race::generateSlug($request['name']);
            $new_race->fill($form_data);
            $new_race->save();
            return redirect()->route('admin.races.show')->with('success', 'Race created');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Race $race)
    {
        return view('admin.races.show', compact('race'));
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