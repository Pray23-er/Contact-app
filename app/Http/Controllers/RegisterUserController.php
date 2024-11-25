<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterUserController extends Controller
{
    //
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // validate the request
        $validated = $request->validate([
            'name' => ['required','min:5', 'max:255','string'],
            'email'=> 'required|email|unique:users',
            'password' => ['required', 'min:8', 'confirmed'],

        ]);

        // create a user
        $user = User::create([
        'name' => $request->name,
        'email'=> $request->email,
        'password'=> $request->password,

        ]);

        // log user in
        auth()->login($user);
        //redirect the user
        return to_route('contacts.index');
    }


}
