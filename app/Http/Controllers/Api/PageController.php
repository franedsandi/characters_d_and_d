<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;


class PageController extends Controller
{
    public function index(){
        $characters = Character::with('race', 'skills')->paginate(5);
        return response()->json($characters);
    }
    public function getCharacterBySlug($slug){
        $character = Character::where('slug', $slug)->with('race', 'skills')->first();
        $success = $character ? true : false;

        return response()->json([
            'success' => $success,
            'character' => $character,
        ]);
    }
}
