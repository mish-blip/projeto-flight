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
        header {
            position: relative;
            height: 100vh; /* This makes the header take up the full height of the screen */
            min-height: 25rem;
            width: 100%;
            overflow: hidden;
        }

        header video {
          position: absolute;
          top: 50%;
          left: 50%;
          min-width: 100%;
          min-height: 100%;
          width: auto;
          height: auto;
          z-index: -1; /* Puts the video behind the other content */
          transform: translateX(-50%) translateY(-50%);
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

    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg py-4 fixed-top px-0 navbar-transparent">
        <div class="container-fluid d-flex justify-content-start">
        <a class="navbar-brand text-body ms-3 h4 border-end pe-5" href="/projeto-flight/public/"><i class="bi bi-airplane-engines me-2"></i> Flight</a>
        </div>
        <div class="container-fluid d-flex justify-content-center">
          <a href="#" class="me-3 text-body text-decoration-none border-end pe-3" >Inicio</a>
          <a href="#" class="me-3 text-body text-decoration-none border-end pe-3" >Sobre</a>
          <a href="#" class="me-3 text-body text-decoration-none border-end pe-3" >Atuação</a>
          <a href="#" class="me-3 text-body text-decoration-none border-end pe-3" >Empresas Parceiras</a>
          <a href="#" class="me-3 text-body text-decoration-none" >Entre em contato</a>
        </div>
        <div class="container-fluid d-flex justify-content-end">
        <a href="/projeto-flight/public/login" class="me-3 h5 text-body"><i class="bi bi-file-person-fill"></i></a>
        </div>
</nav>

<header> <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="https://www.pexels.com/download/video/1631994/" type="video/mp4">
  </video>

  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3">Suporte para a Indústria Aeroespacial</h1>
        <p class="lead mb-0 text-muted">Reduzindo o tempo em solo, maximizando o tempo de voo.</p>
      </div>
    </div>
  </div>
</header>

<!-- divisoria -->
<div class="bg-dark" style="height: 100px;"></div>

<section class="my-5">
<div class="container">

  <div class="row">
        <article class="col-md-4">

            <section id="news" class="pt-3 mt-4">
              <h2>SOBRE A <br>
                FLIGHT │</h2>
              <p>FORNECEDOR GLOBAL <br>
                PARA O SETOR AÉREO</p>
            </section>

        </article>
    
      <div class="col-md-8">
        <aside class="pt-5">

            <div>
              <p>A Flight é especialista em dar suporte a proprietários de aeronaves, operadores e oficinas de manutenção (MROs), oferecendo soluções que reduzem custos e serviços de valor agregado em cada fase do ciclo de vida de uma aeronave.
              Como um dos principais fornecedores do setor, nosso foco é a distribuição global de peças, componentes e consumíveis de aviação. Através de programas inovadores de gestão de inventário e cadeia de suprimentos, garantimos que nossos clientes tenham a peça certa, no lugar certo e na hora certa.
              Trabalhamos em parceria com nossos clientes para garantir que, à medida que suas necessidades mudem, tenhamos a solução de serviço ideal e pronta para ser adaptada.</p>
            </div>

        </aside>
      </div>

  </div>

</div>
</section>

<section class="my-5">
<div class="container">

  <div class="row">
        <article class="col-md-8">

            <section id="news" class="pt-3 mt-4">
            <div class="divimagem1 position-relative hover-effect">
              <img src="https://i.pinimg.com/736x/09/e8/23/09e823d6130f5d5dbf1abefd685e4b4b.jpg" class="img-fluid">
            </div>
            </section>

        </article>
    
      <div class="col-md-4">
        <aside class="pt-5">

            <div>
              <h2>"Nosso catálogo global garante a peça exata para sua necessidade, com a precisão e a confiabilidade que a sua operação exige para voar mais alto."</h2>
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
              <h2> ATUAÇÃO │</h2>
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

<!-- painel de 4 -->
<section class="my-5">
<div class="container">

  <div class="row justify-content-center mb-5">
        <article class="col-md-5 me-3">

            <section id="news" class="">
            <div class="divimagem2 position-relative hover-effect">
              <img src="https://www.colorhexa.com/4f595b.png" class="img-fluid">
            </div>
            </section>

        </article>
      <div class="col-md-5">
        <aside class="">
            <div class="divimagem2 position-relative hover-effect">
              <img src="https://www.colorhexa.com/4f595b.png" class="img-fluid">
            </div>
        </aside>
      </div>

  </div>

  <div class="row justify-content-center">
        <article class="col-md-5 me-3">

            <section id="news" class="">
            <div class="divimagem2 position-relative hover-effect">
              <img src="https://www.colorhexa.com/4f595b.png" class="img-fluid">
            </div>
            </section>

        </article>
      <div class="col-md-5">
        <aside class="">
            <div class="divimagem2 position-relative hover-effect">
              <img src="https://www.colorhexa.com/4f595b.png" class="img-fluid">
            </div>
        </aside>
      </div>

  </div>

</div>
</section>
<!-- -->







<footer class="bg-light py-3"> <div class="container text-center">
      <span class="text-muted">Footer</span>
    </div>

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>