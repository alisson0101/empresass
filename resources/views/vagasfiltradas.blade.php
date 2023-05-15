<!DOCTYPE html>
<html>
<head>
	<title>Vagas Filtradas</title>
</head>
<body>
	<h1>Vagas Disponíveis:</h1>
	@if(count($vagas) > 0)
		@foreach($vagas as $vaga)
			<h2>{{ $vaga->cargo }}</h2>
			
		@endforeach
	@else
		<p>Nenhuma vaga encontrada para os filtros selecionados.</p>
	@endif
</body>
</html>
