<?php

namespace App\Controllers;

use App\Models\Product;
use App\Services\ImageUploadService;
use Flight;

class ProductController
{
    //READ

    public function index()
    {
        // Model pega todos os produtos, do mais novo para o mais antigo
        $products = Product::orderBy('created_at', 'desc')->get();
        
        // render a View 'index.php' dentro da pasta 'products' e envia a lista de produtos para ela
        Flight::render('products/index', ['products' => $products]);
    }

    //CREATE

    public function create()
    {
        // render a View do formulário
        Flight::render('products/form');
    }

    //STORE

    public function store()
    {
        // pega os dados de texto do formulário
        $data = Flight::request()->data->getData();

        // pega o arquivo de imagem enviado
        $imageFile = Flight::request()->files['image'] ?? null;

        // se uma imagem foi adicionada, faz o upload para a nuvem
        if ($imageFile) {
            $uploadService = new ImageUploadService();
            $imageUrl = $uploadService->upload($imageFile);
            
            // adiciona a URL da imagem aos dados que serão salvos
            $data['imagem_url'] = $imageUrl;
        }

        // Eloquent cria o produto no banco com todos os dados
        Product::create($data);

        // no fim, redireciona o usuário de volta para a lista de produtos
        Flight::redirect('/products'); //
    }

    //EDIT

    public function edit($id)
    {
        // Model encontra o produto com o ID específico
        $product = Product::find($id);

        // se não encontrar o produto, mostra um erro 404
        if (!$product) {
            Flight::notFound();
            return;
        }

        // render a View de formulário, mas agora passando os dados do produto
        Flight::render('products/form', ['product' => $product]);
    }

    //UPDATE

    public function update($id)
    {
        // encontra o produto existente
        $product = Product::find($id);
        if (!$product) {
            Flight::notFound();
            return;
        }
        
        // pega os novos dados do formulário
        $data = Flight::request()->data->getData();

        // se uma nova imagem for enviada, faz o upload
        $imageFile = Flight::request()->files['image'] ?? null;
        if ($imageFile && $imageFile['error'] === UPLOAD_ERR_OK) {
            $uploadService = new ImageUploadService();
            $imageUrl = $uploadService->upload($imageFile);
            $data['imagem_url'] = $imageUrl;
        }

        // usa o método 'update' do Eloquent para atualizar o produto com os novos dados
        $product->update($data);

        // no fim, redireciona para a lista de produtos
        Flight::redirect('/products'); //
    }

    //DELETE
    
    public function destroy($id)
    {
        // encontra o produto
        $product = Product::find($id);

        // se ele existir, apaga
        if ($product) {
            $product->delete();
        }

        // no fim, redireciona para a lista de produtos
        Flight::redirect('/products'); //
    }
}