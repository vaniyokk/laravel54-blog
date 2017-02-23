<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function create()
    {
        return view('sessions.login');
    }

    public function store()
    {
        if(!auth()->attempt(
            request(['email', 'password'])
        )) {
            return back()->withErrors([
                'message' => 'Please check you name or password.'
            ]);
        }

        return redirect()->home();
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->home();
    }
}
