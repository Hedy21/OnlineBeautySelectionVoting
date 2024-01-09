<?php

namespace App\Http\Controllers;

use App\Models\Voter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class VoterController extends Controller
{
    public function login(Request $request){
          // Attempt to authenticate the user
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Authentication passed, redirect to the desired page or show a success message
        return redirect()->route('success#leaderboard')->with('success', 'Login successful!');
    }
        // Authentication failed, redirect back with an error message
        return redirect()->back()->withErrors(['email' => 'Invalid email or password'])->withInput();
    }

    public function register(Request $request){
        //dd($request->all());
        // validation start
        $validationRulesRegister = [
            'email' => 'required|email|ends_with:ucstgi.edu.mm|unique:voters,email',
            'password' => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]/',
            'c_password' => 'required|same:password'
        ];
        $validationMessagesRegister = [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.ends_with' => 'The email must end with "ucstgi.edu.mm".',
            'email.unique' => 'This email is already in use.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 6 characters long.',
            'password.regex' => 'The password must contain at least one lowercase letter, one uppercase letter, one digit, and one special character.',
            'c_password.same' => "Passwords do not match."
        ];
        $validator = Validator::make($request->all(),$validationRulesRegister,$validationMessagesRegister);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // validation end



        // create in DB start
        $data = $this->getRegisterData($request);
        Voter::create($data);
        // create in DB end
        return view('leaderboard');
    }

    private function getRegisterData($request){
        // Hash the password before saving to the database
        $hashedPassword = Hash::make($request->input('password'));

        $data = [
            'email' => $request->email,
            'password' => $hashedPassword
        ];
        return $data;
    }
}
