<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="{{ asset('css/estilo-cadastro.css') }}">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap-reboot.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body> <div class="container">
  <div class="form-image">
      <img src="https://img.freepik.com/fotos-gratis/trabalhadores-de-fabrica-trabalhando-na-linha-de-producao_342744-136.jpg?w=740&t=st=1682079868~exp=1682080468~hmac=180b3f8584aeae4c9b3f30c98f331812c0d7292b1358f06be8afbc7a82b7e735" alt="">
  </div>
  <div class="form">
      <form action="{{ route('cadastro_empresas')}}" method="POST">
        {{ csrf_field() }}

          <div class="form-header">
              <div class="title">
                  <h1>Cadastre sua Empresa</h1>
              </div>
              <div class="login-button">
              <button type="submit">Enviar</button>
              </div>
          </div>

          <div class="input-group">
              <div class="input-box">
                  <label for="nome">Nome da Empresa</label>
                  <input id="nome" type="text" name="nome" placeholder="Digite seu primeiro nome"  required>
              </div>

              <div class="input-box">
                  <label for="cnpj">Cnpj</label>
                  <input id="cnpj" type="number" name="cnpj" placeholder="Digite seu sobrenome"  required>
              </div>
              <div class="input-box">
                  <label for="email">E-mail</label>
                  <input id="email" type="email" name="email" placeholder="Digite seu e-mail"  required>
              </div>
              <div class="input-box">
                <label for="endereco">Endereço</label>
                <input id="endereco" type="text" name="endereco" placeholder=""  required>
            </div>
              <div class="input-box">
                  <label for="numero">Celular</label>
                  <input id="numero" type="tel" name="numero" placeholder="(xx) xxxx-xxxx"  required>
              </div>

              <div class="input-box">
                  <label for="password">Senha</label>
                  <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
              </div>


              

          </div>
      </form>
  </div>
</div>

</body>
</html>