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
        //criar o request validate aqui

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->route('loginPage')->withInput()->with('loginError','Usuário ou senha incorreto');
        }

        if (!password_verify($request->password, $user->password)) {
            return redirect()->route('loginPage')->withInput()->with('loginError','Usuário ou senha incorreto');
        }
        
        //redirecionar para página principal
        echo 'Login realizadooo!';
        echo '<pre>';
        print_r($user->toArray());
        

    }
}
