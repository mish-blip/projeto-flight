<?php

namespace App\Models;

// importa a classe Model principal do Eloquent, e User herda da Model 
use Illuminate\Database\Eloquent\Model;
class User extends Model

{
    // a tabela do bd associada ao model
    protected $table = 'users';
    // os campos que podem ser preenchidos 
    protected $fillable = ['name', 'login', 'email', 'password'];
}