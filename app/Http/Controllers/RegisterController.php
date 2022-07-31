<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store()
    {
        // return request()->all();

        $attributes = request()->validate([
            'ime' => 'required|max:255',
            'prezime' => 'required|max:255',
            'email' => 'required|email|max:255',
            'username' => 'required|max:255|min:3',
            'password' => 'required|max:255|min:7'
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/cars');
    }
}
