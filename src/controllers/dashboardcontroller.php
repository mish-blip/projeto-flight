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

        $viewData = [
            'userName' => $_SESSION['user_name']
        ];

        $products = Product::orderBy('created_at', 'desc')->get();
        $viewData['products'] = $products;
        Flight::render('dashboard', $viewData);
    }

}