<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // projetc vista laika
    public function index() {
        return view('homeLaika');
    }
}
