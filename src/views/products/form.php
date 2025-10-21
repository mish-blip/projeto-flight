<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Projeto</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/efeitos.css">
    <link rel="stylesheet" href="/projeto-flight/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/projeto-flight/public/css/bootstrap-icons.min.css">
    <title>Formulário de Produto</title>
</head>
<body>

    <div class="container mt-5">
        <?php
            // Lógica para saber se estamos editando ou criando um novo produto
            $isEdit = isset($product);
        ?>
        <h1><?= $isEdit ? 'Editar Produto' : 'Novo Produto' ?></h1>

        <form action="<?= $isEdit ? '/projeto-flight/public/products/' . $product->id . '/update' : '/projeto-flight/public/products' ?>" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control bg-dark p-3" id="nome" name="nome" value="<?= $product->nome ?? '' ?>" required>
            </div>

            <div class="mb-3">
                <label for="headline_1" class="form-label">Frase de Efeito 1 (Headline 1)</label>
                <input type="text" class="form-control bg-dark p-3" id="headline_1" name="headline_1" value="<?= $product->headline_1 ?? '' ?>">
            </div>

            <div class="mb-3">
                <label for="headline_2" class="form-label">Frase de Efeito 2 (Headline 2)</label>
                <input type="text" class="form-control bg-dark p-3" id="headline_2" name="headline_2" value="<?= $product->headline_2 ?? '' ?>">
            </div>

            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição Completa</label>
                <textarea class="form-control bg-dark p-3" id="descricao" name="descricao" rows="5"><?= $product->descricao ?? '' ?></textarea>
            </div>
            
            <div class="mb-3">
                <label for="image" class="form-label">Imagem Principal</label>
                <input class="form-control bg-dark p-3 text-light" type="file" id="image" name="image" <?= $isEdit ? '' : 'required' ?>>
                <?php if ($isEdit && $product->imagem_url): ?>
                    <small>Imagem atual:</small><br>
                    <img src="<?= $product->imagem_url ?>" width="150" class="mt-2">
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="/projeto-flight/public/products" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>