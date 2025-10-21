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
    <title>Login</title>
    <style>
        .login {
            min-height: 100vh;
        }
        .bg-image {
            background-image: url(https://i.pinimg.com/1200x/60/15/e1/6015e1b944f7653924de3e603d868034.jpg);
            background-size: cover;
            background-position: center;
        }
        .login-heading {
            font-weight: 300;
        }
        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

<div class="container-fluid ps-md-0">
    <div class="row g-0">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image divimagem1 position-relative hover-effect"></div>
        <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto">
                            <h3 class="login-heading mb-4">Bem-Vindo</h3>
                            <p>Faça login na sua conta para continuar ao catálogo</p>

                            <form method="POST" action="">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="login" name="login" placeholder="Login ou Email" required>
                                    <label for="login">Login ou Email</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Senha" required>
                                    <label for="password">Senha</label>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="on" name="remember-me" id="rememberPasswordCheck">
                                    <label class="form-check-label" for="rememberPasswordCheck">
                                        Lembrar senha
                                    </label>
                                </div>

                                <div class="d-grid">
                                    <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Entrar</button>
                                    <div class="text-center">
                                        <p class="mt-2 small">Não tem uma conta? <a href="/projeto-flight/public/cadastro">Cadastre-se aqui</a>.</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>