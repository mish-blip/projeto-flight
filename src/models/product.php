<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['nome', 'descricao', 'imagem_url', 'headline_1', 'headline_2'];
}

//"products" é protegida, fillable são as editáveis