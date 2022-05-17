<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;
use App\Models\User;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        //Get Email out of form and pull contact_id from contacts database
        $email = $request->validate(['email' =>['required', 'email']]);

        $contact = Contact::where('primary_email', $email)->first();
        //dd($contact->id);
        $user = User::where('contact_id', $contact->id)->first();
        //dd($user->permission_id);
        $password = $request->get('password');
        $user_contact_id = $contact->id;

        if (Auth::attempt(['contact_id' => $user_contact_id, 'password' => $password])) {
            $request->session()->regenerate();

            if($user->permission_id === 1 || 2 || 3){
                //dd($user->permission_id);
                return redirect()->intended('admin/dashboard');
            }

            if($user->permission_id === 4){
                dd($user->permission_id);
                return redirect()->intended('user/dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
