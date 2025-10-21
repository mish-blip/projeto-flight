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

<!-- divisoria -->
<div class="bg-dark" style="height: 50px;"></div>

<!-- secção atuação -->
<section class="my-5">
<div class="container">

  <div class="row">
        <article class="col-md-4">

            <section id="news" class="pt-3 mt-4">
              <h2> EMPRESAS PARCEIRAS │</h2>
            </section>

        </article>
    
      <div class="col-md-8">
        <aside class="pt-5">

            <div>
              <p>nossas parcerias</p>
            </div>

        </aside>
      </div>

  </div>

</div>
</section>

<br>
<br>
<br>
<br>

<footer class="bg-dark text-light mt-5 border-top border-secondary">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-12 col-lg-3 text-center text-lg-start">
                <a class="navbar-brand text-body ms-3 h4 border-end pe-5" href="/projeto-flight/public/"><i class="bi bi-airplane-engines me-2"></i> Flight</a>
                <p class="text-secondary small mb-0"><br>Soluções para a indústria aeroespacial.</p>
                <br>
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#contactModal">
                Entre em Contato
                </button>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <h5 class="text-uppercase fs-6 mb-3">Sobre nós</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="/corporate-about/pt/" class="nav-link p-0 link-light opacity-75">Sobre</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="https://www.embraer.com/corporate-innovation/pt" class="nav-link p-0 link-light opacity-75">Atuação</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="https://www.embraer.com/corporate-careers/pt" class="nav-link p-0 link-light opacity-75">Empresas Parceiras</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="https://www.embraer.com/corporate-esg/overview/pt/" class="nav-link p-0 link-light opacity-75">Contato</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/media-center/pt/" class="nav-link p-0 link-light opacity-75">Catálogo</a>
                    </li>
                </ul>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <h5 class="text-uppercase fs-6 mb-3">Areas de atuação</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="/commercial-aviation/pt/" class="nav-link p-0 link-light opacity-75">Aviação Comercial</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/defense-security-overview/pt/" class="nav-link p-0 link-light opacity-75">Defesa e Segurança</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/executive-jets-overview/pt/" class="nav-link p-0 link-light opacity-75">Aviação Executiva</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/services-and-support-overview/pt/" class="nav-link p-0 link-light opacity-75">Serviços &amp; Suporte</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/agriculture/pt/" class="nav-link p-0 link-light opacity-75">Aviação Agrícola</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/more-businesses/pt/" class="nav-link p-0 link-light opacity-75">Outros Negócios</a>
                    </li>
                </ul>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <h5 class="text-uppercase fs-6 mb-3">Transparência</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="/suppliers/pt" class="nav-link p-0 link-light opacity-75">Fornecedores</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="https://ri.embraer.com.br/en/" class="nav-link p-0 link-light opacity-75">Investidores</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="https://compliance.embraer.com.br/" target="_blank" class="nav-link p-0 link-light opacity-75">Integridade</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="https://canalconfidencial.com.br/embraerhelpline/" target="_blank" class="nav-link p-0 link-light opacity-75">Canal de denúncias - Helpline</a>
                    </li>
                </ul>
            </div>
        </div>

        <hr class="border-secondary my-4">

        <div class="row align-items-center">
            <div class="col-12 col-lg-6 text-center text-lg-start">
                <span class="small text-secondary">Flight © 2025. Todos os direitos reservados.</span>
            </div>
            <div class="col-12 col-lg-6">
                <ul class="nav justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                        <a href="/termos-de-uso/pt/" class="nav-link px-2 link-light opacity-75 small">Termos de uso</a>
                    </li>
                    <li class="nav-item">
                        <a href="/privacidade/pt/" class="nav-link px-2 link-light opacity-75 small">Privacidade</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Modal de contato -->

<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactModalLabel">Entre em Contato</h5>
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
            </div>
            <div class="mb-3">
                <label for="contact-message" class="form-label">Mensagem:</label>
                <textarea class="form-control bg-body" id="contact-message" name="message" rows="5" required></textarea>
            </div>
            
        </form>

      </div>
      <div class="modal-footer">
            <button type="submit" class="btn btn-info">Enviar Mensagem</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>