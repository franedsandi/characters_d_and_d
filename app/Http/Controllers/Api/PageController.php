<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;


class PageController extends Controller
{
    public function index(){
        $characters = Character::paginate(5);
        return response()->json($characters);
    }
}
