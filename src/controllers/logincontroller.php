<?php

namespace App\Controllers;

use App\Models\User;
use Flight;

class LoginController
{
    public function showLoginForm()
    {
        Flight::render('login');
    }
    // método para processar o formulário de login
    public function login()
    {
        $data = Flight::request()->data;
        $loginInput = $data['login'];
        $passwordInput = $data['password'];

        $user = User::where('email', $loginInput)
                    ->orWhere('login', $loginInput)
                    ->first();

        if ($user && password_verify($passwordInput, $user->password)) {
            $_SESSION['user_id'] = $user->id;
            $_SESSION['user_name'] = $user->name;

            Flight::redirect('/dashboard');
        } else {
            Flight::redirect('/login');
        }
    }

    public function logout()
{
    session_unset();
    session_destroy();
    Flight::redirect('/');
}
}