<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Produtos</title>
    <link rel="stylesheet" href="/projeto-flight/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/projeto-flight/public/css/bootstrap-icons.min.css">
    <style>
        .imagemproduto {
            max-height: 500px;
            max-width: 400px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .imagemproduto img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Catálogo (editar)</h1>
            <a href="/projeto-flight/public/products/create" class="btn btn-primary">Adicionar Novo Produto</a>
        </div>

        <?php if (count($products) > 0): ?>
            <?php foreach ($products as $product): ?>
                <div class="card mb-4">
                    <h5 class="card-header p-3"><?= htmlspecialchars($product->nome) ?></h5>
                    <div class="row g-0">
                        <div class="col-md-4 p-3 imagemproduto">
                            <?php if ($product->imagem_url): ?>
                                <img src="<?= $product->imagem_url ?>" class="img-fluid rounded-start" alt="<?= htmlspecialchars($product->nome) ?>">
                            <?php else: ?>
                                <img src="https://via.placeholder.com/400x300.png?text=Sem+Imagem" class="img-fluid rounded-start" alt="Sem imagem">
                            <?php endif; ?>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title"><?= htmlspecialchars($product->headline_1) ?></h4>
                                <p class="card-text"><?= htmlspecialchars($product->headline_2) ?></p>
                                <p class="card-text"><?= htmlspecialchars($product->descricao) ?></p>
                                <p class="card-text"><small class="text-muted">Adicionado em: <?= $product->created_at->format('d/m/Y H:i') ?></small></p>
                                <a href="/projeto-flight/public/products/<?= $product->id ?>/edit" class="btn btn-secondary btn-sm">Editar</a>
                                <form action="/projeto-flight/public/products/<?= $product->id ?>/delete" method="POST" style="display:inline;">
                                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="alert alert-info">
                Nenhum produto cadastrado ainda.
            </div>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>