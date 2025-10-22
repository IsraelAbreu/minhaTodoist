<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth extends Controller
{
    function loginPage(){
        return view('login');
    }
}
