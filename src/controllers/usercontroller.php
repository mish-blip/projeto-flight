<?php

namespace App\Controllers;

use App\Models\User;
use Flight;

class UserController
{
    public function showRegistrationForm()
    {
        Flight::render('cadastro'); //render o formulário
    }

    // método para processar o formulário de cadastro
    public function store()
    {
        // pega todos os dados enviados no forms
        $data = Flight::request()->data;

        // criptografa a senha
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        // o método 'create' usa a lista '$fillable' e cria o usuário
        User::create($data->getData());

        // no fim, redireciona para a pagina seguinte
        Flight::redirect('/login');
    }
}