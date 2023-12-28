<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Race;
use App\Models\Skill;


class PageController extends Controller
{
    public function index(){
        $characters = Character::with('race', 'skills')->paginate(5);
        return response()->json($characters);
    }

    public function getRaces(){
        $races = Race::all();
        return response()->json($races);
    }
    public function getSkills(){
        $skills = Skill::all();
        return response()->json($skills);
    }
    public function getCharacterBySlug($slug){
        $character = Character::where('slug', $slug)->with('race', 'skills')->first();
        $success = $character ? true : false;

        return response()->json([
            'success' => $success,
            'character' => $character,
        ]);
    }

    public function getCharacterByRace($race_slug){
        $race = Race::where('slug' , $race_slug)->with('characters')->first();
        return response()->json($race);
    }

    public function getCharacterBySkill($skill_slug){
        $skill = Skill::where('slug' , $skill_slug)->with('characters')->first();
        return response()->json($skill);
    }
}
