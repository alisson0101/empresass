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
      <form action="{{ route('vagasemprego')}}" method="POST">
      {{ csrf_field() }}
          <div class="form-header">
              <div class="title">
                  <h1>VAGAS EMPREGO</h1>
              </div>
              <div class="login-button">
              <button type="submit">Enviar</button>
              </div>
          </div>
          </div>

          <div class="input-group">
              <div class="input-box">
                  <label for="cargo">Cargo</label>
                  <input id="cargo" type="text" name="cago" placeholder="" required>
              </div>

              <div class="input-box">
                  <label for="renumeracao">Renumeração</label>
                  <input id="renumeracao" type="text" name="renumeracao" placeholder="" required>
              </div>
              <div class="input-box">
                  <label for="resp">Responsabilidades</label>
                  <input id="resp" type="text" name="resp" placeholder="" required>
              </div>
              <div class="input-box">
                <label for="exigencias">Exigências</label>
                <input id="exigencias" type="text" name="exigencias" placeholder="" required>
            </div>
          </div>
      </form>
  </div>
</div>
</body>
</html>