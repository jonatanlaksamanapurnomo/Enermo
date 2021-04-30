<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $config = config('enermo.home');
        return view('home', [
            'banner' => asset($config['banner']),
            'home_1' => asset($config['home_1']),
            'home_2' => asset($config['home_2']),
        ]);
    }
}
