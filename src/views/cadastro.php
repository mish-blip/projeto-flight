<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Projeto</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/efeitos.css">
    <title>Cadastro</title>
    <style>
        .card-img-left {
            width: 45%;
            /* A imagem de fundo é definida aqui! */
            background: scroll center url('https://i.pinimg.com/736x/86/b4/fe/86b4fe63a46d42c21ec6e02dc3b71168.jpg');
            background-size: cover;
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
        }

        .btn-google {
            color: white !important;
            background-color: #ea4335;
        }

        .btn-facebook {
            color: white !important;
            background-color: #3b5998;
        }
    </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            </div>
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Cadastre-se</h5>
            
            <form action="/projeto-flight/public/cadastro" method="POST">
              <div class="form-floating mb-3">
                <input type="text" class="form-control bg-body" id="name" name="name" placeholder="Seu Nome Completo" required autofocus>
                <label for="name">Nome</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control bg-body" id="login" name="login" placeholder="nomedeusuario" required>
                <label for="login">Login</label>
              </div>

              <div class="form-floating mb-3">
                <input type="email" class="form-control bg-body" id="email" name="email" placeholder="nome@exemplo.com" required>
                <label for="email">Email</label>
              </div>

              <hr>

              <div class="form-floating mb-3">
                <input type="password" class="form-control bg-body" id="password" name="password" placeholder="Senha" required>
                <label for="password">Senha</label>
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control bg-body" id="floatingPasswordConfirm" placeholder="Confirmar Senha" required>
                <label for="floatingPasswordConfirm">Confirmar Senha</label>
              </div>

              <br>
              <br>

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase p-3" type="submit">Cadastrar</button>
              </div>

              <hr class="my-4">
              <a class="d-block text-center mt-2 small" href="#">Já tem uma conta? Entre</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>