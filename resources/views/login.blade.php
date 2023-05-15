<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilo-login.css') }}">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap-reboot.min.css">
    <title>Login</title>
</head>
<body id="fundo">

    <div class="card" id="telaLogin">
  <!-- <img src="..." class="card-img-top" alt="..."> -->
  <div class="card-body">
    <form action="/login"method="POST">
    {{ csrf_field() }}

      <h1></h1> 
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp"  name ="email" placeholder="Digite seu email">
        
      <div class="mb-3">
        <label for="password" class="form-label">Password </label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Insira sua senha">
      </div>
      <button type="submit" class="btn btn-success">Entrar</button>
      <a href="/cadastro">Cadastrar</a>

    </form>
  </div>
</div>
       
</body>
</html> 