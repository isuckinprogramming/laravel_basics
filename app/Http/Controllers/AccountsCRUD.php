<?php

namespace App\Http\Controllers;

use App\Models\accounts;
use App\Http\Controllers\Controller;

use App\Http\Requests\CheckAccountCreationForm;
use App\Http\Requests\CheckAccountLoginForm;

use Illuminate\Http\Request;

class AccountsCRUD extends Controller
{

    public function index()
    {



    }

    public function show(CheckAccountLoginForm $request)
    {

        $validatedData = $request->validated();

        $loggedInAccount = accounts::where("email", $validatedData["login-email"])->where("password", $validatedData["login-password"])->get();

        if( $loggedInAccount->isNotEmpty() ) {
            return redirect()->route("homepage");
        }
    }

    public function store(CheckAccountCreationForm $request)
    {

        $validatedData = $request->validated();

        accounts::create([
            'name' => $validatedData['register-name'],
            'email' => $validatedData['register-email'],
            'password' => $validatedData['register-password']
        ]);

        return redirect()->route("homepage");
    }
}
