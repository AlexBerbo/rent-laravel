<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create(){
        return view('sign-in');
    }

    public function store(){
        $attributes = request()->validate([
            'username' =>'required|max:255|min:3',
            'password' =>'required|max:255|min:7'
        ]);

        if(auth()->attempt($attributes)){
            return redirect('/cars')->with('success', 'Dobrodosli nazad!');
        }

        throw ValidationException::withMessages([
            'email'=>'Vasi kredencijali su neispravni!'
        ]);
    }

    public function destroy(){
        auth()->logout();

        return redirect('/')->with('success', 'Dovidjenja!');
    }
}
