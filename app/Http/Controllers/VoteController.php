<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function leaderboard(){
        return view('leaderboard');
    }

    public function register(){
        return view('register');
    }

    public function login(){
        return view('login');
    }

    public function queenForm(){
        return view('queenSelectionsUploadForm');
    }

    public function kingForm(){
        return view('kingSelectionsUploadForm');
    }
}
