<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        //Get Email out of form and pull contact_id from contacts database
        $email = $request->validate(['email' =>['required', 'email']]);

        $contact = Contact::where('primary_email', $email)->first();

        $password = $request->get('password');
        $user_contact_id = $contact->id;

        if (Auth::attempt(['contact_id' => $user_contact_id, 'password' => $password])) {
            $request->session()->regenerate();

            return redirect()->intended('admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
