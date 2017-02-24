<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;

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

    public function store(RegistrationForm $form)
    {
        $form->persist();

        return redirect()->home();
    }
}
