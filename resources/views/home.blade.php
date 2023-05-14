<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home-estilo.css') }}">
    
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><h1>Sua Empresa <img src="https://cdn-icons-png.flaticon.com/512/1599/1599904.png" alt="" id="incon"></h1 ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        </li>
        <li class="nav-item">   
          <a class="nav-link" href="/cadastro_empresas">Cadastre sua empresa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">Fazer Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/vagasemprego">Insira Vagas em sua empresa</a>
        </li>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </li>    
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
      <li class="nav-item">
        <a class="nav-link" href="#">Busca avançada <img id ="lupa"src="data:image/png;base64,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" alt=""></a>
      </li>
    </div>
  </div>
</nav>
</head>

<body id="">

<h2>Vagas disponíveis</h2>
@foreach ($vagas as $vaga)
<div class="card" style="width: 18rem;">  
<div class="card-body">
    <h5 class="card-title">{{$vaga -> cargo}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">Renumeracão:{{$vaga -> renumeracao}}</h6>
    <p class="card-text">Exigências{{$vaga ->exigencias }}</p>
    <p class="card-text">Responsabilidades:{{$vaga ->responsa }}</p>
    <p class="card-text">CNPJ:{{$vaga ->cnpj }}</p>
    <a href="#" class="card-link"></a>
    <a href="#" class="card-link">Candidatar</a>
  </div>
</div>
@endforeach
</body>
<footer></footer>
</html>