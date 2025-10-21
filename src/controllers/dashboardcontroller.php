<?php
namespace App\Controllers;
use Flight;
use App\Models\Product;

class DashboardController
{
    public function index()
    {
        if (!isset($_SESSION['user_id'])) {
            Flight::redirect('/login');
            die();
        }

    // 1. Prepara o array de dados com a primeira informação (o nome do usuário)
        $viewData = [
            'userName' => $_SESSION['user_name']
        ];

    // 2. Busca os produtos no banco de dados
        $products = Product::orderBy('created_at', 'desc')->get();
    
    // 3. ADICIONA a lista de produtos ao array que já existe
        $viewData['products'] = $products;

    // 4. Renderiza a View, passando o array completo com as duas informações
        Flight::render('dashboard', $viewData);
    }

}