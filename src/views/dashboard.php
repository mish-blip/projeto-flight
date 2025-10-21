<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/projeto-flight/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/projeto-flight/public/css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/projeto-flight/public/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/efeitos.css">
    <style>
        .navbar-transparent {
            box-shadow: 0 1px 0 rgba(0,0,0,0.1);
            background-color: transparent !important;
            z-index: 100;
        }
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
        .divimagem1 {
          height: 500px; 
          width: 100%;
          overflow: hidden; 
        }
        .divimagem1 img {
          width: 100%; 
          height: 100%;
          object-fit: cover;
          object-position: center; 
        }
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
<nav class="navbar navbar-expand-lg py-4 fixed-top px-0 navbar-transparent">
        <div class="container-fluid d-flex justify-content-start">
        <a class="navbar-brand text-body ms-3 h4 border-end pe-5" href="/projeto-flight/public/"><i class="bi bi-airplane-engines me-2"></i> Flight</a>
        </div>
        <div class="container-fluid d-flex justify-content-center">
          <a href="#" class="me-3 text-body text-decoration-none border-end pe-3" >Catálogo</a>
          <a href="#" class="disabled me-3 text-body text-decoration-none pe-3" >Serviços e Suporte</a>
        </div>
        <div class="container-fluid d-flex justify-content-end">
        <a href="/projeto-flight/public/login" class="me-3 h5 text-body"><i class="bi bi-file-person-fill"></i></a>
        <a href="/projeto-flight/public/products" class="me-3 h5 text-body"><i class="bi bi-chevron-bar-right"></i></a>
        </div>
</nav>


<!-- divisoria -->
<div class="bg-" style="height: 100px;"></div>

<section class="my-5">
<div class="container">

  <div class="row">
        <article class="col-md-4">

            <section id="news" class="pt-3 mt-4">
              <h2>BEM-VINDO</h2>
              <h5><?= htmlspecialchars($userName) ?></h5>
            </section>

        </article>
    
      <div class="col-md-8">
        <aside class="pt-5">

            <div>
              <p>Com um foco dedicado à distribuição global de peças, componentes e consumíveis de aviação, somos o parceiro ideal para operadores e oficinas de manutenção. Nossa missão é oferecer soluções que garantem a eficiência e a segurança em cada fase do ciclo de vida de uma aeronave.

Explore abaixo nosso inventário e, se interessado, solicite uma cotação.</p>
            </div>

        </aside>
      </div>

  </div>

</div>
</section>

<!-- divisoria -->
<div class="bg-dark" style="height: 50px;"></div>

<!-- secção atuação -->
<section class="my-5">
<div class="container">

  <div class="row">
        <article class="col-md-4">

            <section id="news" class="pt-3 mt-4">
              <h2> COMPONENTES │</h2>
            </section>

        </article>
    
      <div class="col-md-8">
        <aside class="pt-5">

            <div>
              <p>
            </div>

        </aside>
      </div>

  </div>

</div>
</section>
<!-- -->

<!-- componentes, catalogo! -->
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
        </div>

        <?php if (count($products) > 0): ?>
            <?php foreach ($products as $product): ?>
                <div class="card mb-4 ">
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
                                <br>
                                <button type="button" class="btn btn-primary p-2 me-3 disabled" data-bs-toggle="#" data-bs-target="#contactModal">
                                Documentos Técnicos
                                </button>
                                <button type="button" class="btn btn-info p-2" data-bs-toggle="modal" data-bs-target="#contactModal">
                                Solicitar Cotação
                                </button>
                                <p><br></p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
            <div class="alert alert-info">
                Nenhum produto cadastrado ainda.
            </div>
        <?php endif; ?>
    </div>
        <a href="/projeto-flight/public/logout" class="h5 text-body ms-3 mb-4 p-3 pb-4"><i class="bi bi-box-arrow-left"></i></a>

<!-- Modal de contato -->

<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactModalLabel">Solicitar Cotação</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="/projeto-flight/public/contato/enviar" method="POST">
            <div class="mb-3">
                <label for="contact-name" class="form-label">Seu Nome:</label>
                <input type="text" class="form-control bg-body" id="contact-name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="contact-email" class="form-label">Seu Email:</label>
                <input type="email" class="form-control bg-body" id="contact-email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="contact-tech" class="form-label">Tecnologia(s) de interesse:</label>
                <input type="text" class="form-control bg-body" id="contact-tech" name="tech" required>
            </div>
            <div class="mb-3">
                <label for="contact-message" class="form-label">Mensagem:</label>
                <textarea class="form-control bg-body" id="contact-message" name="message" rows="5" required></textarea>
            </div>
            
        </form>

      </div>
      <div class="modal-footer">
            <button type="submit" class="btn btn-info">Solicitar</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>