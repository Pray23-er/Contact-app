<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // validate the form data
        $validated = $request->validate([
            'email'=> 'required|email',
            'password' => ['required', 'min:8', 'string'],

        ]);
        // attempt to login the user
        if(Auth::guard('web')->attempt(['email'=>$request->email, 'password' => $request->password],
        $request->remember)){
            // if sucessful then redirect to their intended location
            return redirect()->intended(route('contacts.index'));
        }
        else{
            // if unsucessful, thrn redirect back to the login page
            return back()->withErrors([
                'email'=>'The provided credentials does not match our records'
            ]);
        }


    }
   /**
     * Log out the user.
     */

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return view('welcome');

    }
}
