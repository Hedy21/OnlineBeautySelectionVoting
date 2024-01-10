<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Voter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }
    public function registerPost(Request $request){
        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->noOfVote = 1;
        $user->save();
        return view('login')->with('success','Register successfully');
    }

    public function login(){
        return view('login');
    }
    public function loginPost(Request $request){
        $user = User::where('email', $request->email)->first();

        if($user && Hash::check($request->password, $user->password)){
            Auth::login($user);
            \Log::info('Login successful');
            return redirect()->route('leaderboard');
        }

        \Log::info('Login failed: ' . $request->email);
        return back()->with('error','Email or Password incorrect');
    }



}
