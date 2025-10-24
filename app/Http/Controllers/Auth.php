<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Auth extends Controller
{
    public function loginPage()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        dd($request->request);
        $user = User::where('email', $request->email)->first();
    }
}
