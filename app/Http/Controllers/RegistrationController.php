<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    function __construct()
    {
        // $this->middleware('guest');
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        // dd(request()->all());
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);

        auth()->login($user);

        return redirect()->home();
    }
}
