<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //validate the user input for the user table
        $userAttributes = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(6)],
        ]);

        //validate the employer input for the employer table
        $employerAttributes = $request->validate([
            'employer' => 'required',
            'logo' => ['required', File::types(['png', 'jpg', 'webp'])],
        ]);

        //add the user to the db once validated
        $user = User::create($userAttributes);

        /*
         * We need to save the logo to the directory and save a url to the db
         */
        $logoPath = $request->logo->store('logos');

        //add the empoloyer to the user, if we do it this way, we automaticcally add the user id
        $user->employer()->create([
            'name' => $employerAttributes['employer'],
            'logo' => $logoPath,
        ]);

        //log the user in
        Auth::login($user);

        return redirect('/');

    }

}
