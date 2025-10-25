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
        $request->validate(
            [
                'email'    => 'required|email',
                'password' => 'required|min:6|max:12'
            ],
            [
                'email.required' => 'O campo de usuário é obrigatório',
                'email.email' => 'O campo de usuário precisa ser um email',
                'password.required' => 'A senha é obrigatória',
                'password.min' => 'A senha precisa ter no mínimo :min caracteres',
                'password.max' => 'A senha precisa ter no máximo :max caracteres',
            ]
        );

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
