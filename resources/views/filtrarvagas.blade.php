<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="{{ asset('css/estilo-login.css') }}">-->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap-reboot.min.css">
    <title> </title>
</head>
<body>
<form method="GET" action="{{ url('/filtrarvagas') }}">
    <div>
        <label for="nome">Cargo:</label>
        <input type="text" id="cargo" name="cargo">
    </div>
 <!--   <div>
        <label for="localizacao">Localização:</label>
        <input type="text" id="localizacao" name="localizacao">
    </div>
    <div>
        <label for="categoria">Categoria:</label>
        <select id="categoria" name="categoria">
            <option value="">Selecione</option>
            <option value="TI">TI</option>
            <option value="Marketing">Marketing</option>
            <option value="Finanças">Finanças</option>
        </select>
    </div> -->
    <button type="submit">Filtrar vagas</button>
</form>

</body>
<footer>
</footer>
</html>