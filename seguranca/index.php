<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Segurança Elite</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="logo.png" alt="Logo" width="40" class="me-2"> Segurança Elite
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
        <li class="nav-item"><a class="nav-link" href="#servicos">Serviços</a></li>
        <li class="nav-item"><a class="nav-link" href="#clientes">Clientes</a></li>
        <li class="nav-item"><a class="nav-link" href="#depoimentos">Depoimentos</a></li>
        <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Carousel -->
<div id="carousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="foto3.jpeg" class="d-block w-100" alt="Segurança Residencial">
      <div class="carousel-caption">
        <h5>Segurança Residencial</h5>
        <p>Proteção 24h para sua casa.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="foto1.jpeg" class="d-block w-100" alt="Segurança Comercial">
      <div class="carousel-caption">
        <h5>Segurança Comercial</h5>
        <p>Tranquilidade para seu negócio.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="foto2.jpeg" class="d-block w-100" alt="Segurança Particular">
      <div class="carousel-caption">
        <h5>Segurança VIP</h5>
        <p>Proteção para eventos e pessoas importantes.</p>
      </div>
    </div>
  </div>
</div>

<!-- Sobre -->
<section id="sobre" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">Sobre a Empresa</h2>
    <p>A Segurança Elite nasceu em 2015, em Chapecó, com o objetivo de oferecer soluções completas em segurança privada para residências, empresas e eventos.</p>
    <p>Com experiência na área militar e patrimonial, expandimos nossa atuação por todo o Oeste de SC. Hoje somos referência pela confiança e profissionalismo.</p>
  </div>
</section>

<!-- Serviços -->
<section id="servicos" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Nossos Serviços</h2>

    <!-- BOTÃO DE ADICIONAR SERVIÇO -->
    <a href="form_servico.html" class="btn btn-success mb-4">Adicionar Serviço</a>

    <div class="row">
      <?php include "servicos.php"; ?>
    </div>
  </div>
</section>

<!-- Clientes -->
<section id="clientes" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">Clientes</h2>
    <ul>
      <li>Condomínio Jardim das Águas – Chapecó</li>
      <li>Supermercado Bom Preço – Chapecó</li>
      <li>Evento Empresarial “Tech Summit 2024” – Chapecó</li>
    </ul>
  </div>
</section>

<!-- Depoimentos -->
<section id="depoimentos" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Depoimentos</h2>

    <!-- BOTÃO DE ADICIONAR DEPOIMENTO -->
    <a href="form_depoimento.html" class="btn btn-success mb-4">Adicionar Depoimento</a>

    <div class="row">
      <?php include "depoimentos.php"; ?>
    </div>
  </div>
</section>

<!-- Contato -->
<section id="contato" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">Contato</h2>
    <form>
      <div class="mb-3">
        <input type="text" class="form-control" placeholder="Nome">
      </div>
      <div class="mb-3">
        <input type="email" class="form-control" placeholder="E-mail">
      </div>
      <div class="mb-3">
        <textarea class="form-control" rows="4" placeholder="Mensagem"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <p class="mt-3">WhatsApp:
      <a href="https://wa.me/+5549988892170" target="_blank">+55 (49) 98889-2170</a>
    </p>
  </div>
</section>

<!-- Rodapé -->
<footer class="bg-dark text-white text-center py-3">
  Desenvolvido por Nícolas Emanuel de Witt
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
