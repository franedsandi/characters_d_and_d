<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;

class PageController extends Controller
{
    public function index(){
        $characters = Character::all();
        dump($characters);
        return view('home', compact('characters'));
        }
}
