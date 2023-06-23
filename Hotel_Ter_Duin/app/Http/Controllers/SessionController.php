<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    public function create()
    {
        return view('login');
    }
    
    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($attributes)) {
            return redirect('/');
        }
        throw ValidationException::withMessages([
            'email' => 'Your login information was incorrect.'
        ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }
}
