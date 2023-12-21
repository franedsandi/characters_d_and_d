<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;


class PageController extends Controller
{
    public function index(){
        $characters = Character::all();
        return response()->json($characters);
    }
}
