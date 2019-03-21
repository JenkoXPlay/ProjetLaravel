<?php

namespace App\Http\Controllers;

use App\Chanson;
use Illuminate\Http\Request;

class MonControleur extends Controller
{
    public function index() {
        $chansons = Chanson::all();
        return view("index", ['chansons' => $chansons]);
    }
}
