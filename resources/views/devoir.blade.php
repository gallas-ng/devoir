<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gestion Etudiant</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/l2_2022/exercice/public/css/bootstrap.css">

</head>

<body>
<nav class="navbar bg-dark" data-bs-theme="dark">
    <div class="col-12 col-md-2 text-end">
		<a class="btn btn-success" href="{{route('homepage')}}">Ajouter Etudiant</a>
	</div>
    <div class="col-8 col-md-2 text-end">
		<a class="btn btn-primary" href="{{route('index')}}">Liste des etudiantds</a>
	</div>
</nav>

	<div class="container p-3 bg-light mt-2">
		@yield('content')
	</div>
</body>
</html>