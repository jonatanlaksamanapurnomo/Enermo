<?php

namespace App\Http\Controllers;

use App\TeamMember;

class AboutController extends Controller
{
    public function index()
    {
        $team_member = TeamMember::all();
        $config = config('enermo.about');
        return view('about', [
            'about_1' => asset($config['about_1']),
            'dummy' => asset($config['dummy']),
            'team_member' => $team_member,
        ]);
    }
}
