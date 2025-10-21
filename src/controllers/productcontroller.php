<?php

namespace App\Controllers;

// Importa as ferramentas que vamos usar
use App\Models\Product;
use App\Services\ImageUploadService;
use Flight;

class ProductController
{
    /**
     * READ (Ler): Mostra uma lista de todos os produtos.
     */
    public function index()
    {
        // Pede ao Model para buscar todos os produtos, do mais novo para o mais antigo
        $products = Product::orderBy('created_at', 'desc')->get();
        
        // Renderiza a View 'index.php' dentro da pasta 'products'
        // e envia a lista de produtos para ela
        Flight::render('products/index', ['products' => $products]);
    }

    /**
     * CREATE (Criar): Mostra o formulário para adicionar um novo produto.
     */
    public function create()
    {
        // Apenas renderiza a View que contém o formulário em branco
        Flight::render('products/form');
    }

    /**
     * CREATE (Salvar): Pega os dados do formulário e salva um novo produto no banco.
     */
    public function store()
    {
        // 1. Pega os dados de texto do formulário
        $data = Flight::request()->data->getData();

        // 2. Pega o arquivo de imagem enviado
        $imageFile = Flight::request()->files['image'] ?? null;
        
        // 3. Se uma imagem foi enviada, faz o upload para a nuvem
        if ($imageFile) {
            $uploadService = new ImageUploadService();
            $imageUrl = $uploadService->upload($imageFile);
            
            // Adiciona a URL da imagem aos dados que serão salvos
            $data['imagem_url'] = $imageUrl;
        }

        // 4. Usa o Eloquent para criar o produto no banco com todos os dados
        Product::create($data);

        // 5. Redireciona o usuário de volta para a lista de produtos
        Flight::redirect('/products'); //
    }

    /**
     * EDIT (Editar): Mostra o formulário para editar um produto existente.
     */
    public function edit($id)
    {
        // 1. Pede ao Model para encontrar o produto com o ID específico
        $product = Product::find($id);

        // 2. Se não encontrar o produto, mostra um erro 404 (pode ser melhorado depois)
        if (!$product) {
            Flight::notFound();
            return;
        }

        // 3. Renderiza a MESMA View de formulário, mas agora passando os dados do produto
        Flight::render('products/form', ['product' => $product]);
    }

    /**
     * UPDATE (Atualizar): Pega os dados do formulário de edição e salva as alterações.
     */
    public function update($id)
    {
        // 1. Encontra o produto existente
        $product = Product::find($id);
        if (!$product) {
            Flight::notFound();
            return;
        }
        
        // 2. Pega os novos dados do formulário
        $data = Flight::request()->data->getData();
        
        // 3. (Lógica de Upload Opcional) Se uma NOVA imagem for enviada, faz o upload
        $imageFile = Flight::request()->files['image'] ?? null;
        if ($imageFile && $imageFile['error'] === UPLOAD_ERR_OK) {
            $uploadService = new ImageUploadService();
            $imageUrl = $uploadService->upload($imageFile);
            $data['imagem_url'] = $imageUrl;
            // No futuro, poderíamos adicionar uma lógica para deletar a imagem antiga no Cloudinary
        }

        // 4. Usa o método 'update' do Eloquent para atualizar o produto com os novos dados
        $product->update($data);

        // 5. Redireciona para a lista de produtos
        Flight::redirect('/products'); //
    }

    /**
     * DELETE (Deletar): Apaga um produto do banco de dados.
     */
    public function destroy($id)
    {
        // 1. Encontra o produto
        $product = Product::find($id);

        // 2. Se ele existir, apaga
        if ($product) {
            $product->delete();
            // No futuro, poderíamos deletar a imagem do Cloudinary também
        }

        // 3. Redireciona para a lista de produtos
        Flight::redirect('/products'); //
    }
}