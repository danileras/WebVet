<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title> Cadastro Pet </title>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
	<link rel="stylesheet" href="style/main.css">
</head>


<body>

	<div class="container">
		<div class="p-4 header">
			<div class="row">
				<div class="col-8 ">
					<nav class='d-flex align-items-center ml-2'>
						<img src="img/logo_yellow.svg" class="justify-content-start logo">
					</nav>
				</div>
				<div class="col-4">
					<nav class='d-flex align-items-center justify-content-end'>
						<ul class="nav nav-pills nav-fill">
							<li class="nav-item">
								<a class="nav-link fs-4" href="#">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link fs-4" href="#">Blog</a>
							</li>
							<li class="nav-item">
								<a class="nav-link fs-4" href="#">Sobre</a>
							</li>
							<li class="nav-item">
								<a class="nav-link fs-4 login" href="#">Login</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="row">
				<div class="col-12 mt-5">
					<form method='POST' action='envioPet.php'>
						<div class="row justify-content-center">
							<div class="col-4">
								<div class="form-floating mb-3">
									<input type="text" class="form-control" id="petName" name="petName" placeholder="name@example.com">
									<label for="floatingInput">Nome do seu Pet 💛 </label>
								</div>
							</div>
							<div class="col-4">
								<div class="form-floating">
									<select class="form-select" id="petPorte" name="petTipo" aria-label="petTipo">
										<option value="" disabled selected> -- Escolha aqui -- </option>
										<option value="1">Cachorro 🐶</option>
										<option value="2">Gato 🐱</option>
										<option value="3">Codorninha 🦅</option>
										<option value="4">Tartaruga 🐢</option>
										<option value="5"> Coelho 🐇 </option>
										<option value="6"> Fazenda 🐮 </option>
										<option value="7"> Outro 🐫 </option>
									</select>
									<label for="petPorte">O que ele(a) é? </label>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-4">
								<div class="form-floating mb-3">
									<input type="number" class="form-control" id="petAge" name="petAge" placeholder="name@example.com">
									<label for="floatingInput">Quantos aninhos ele(a) tem? </label>
								</div>
							</div>
							<div class="col-4">
								<div class="form-floating">
									<select class="form-select" id="petPorte" name="petPorte" aria-label="petPorte">
										<option value="" disabled selected> -- Escolha aqui -- </option>
										<option value="1">Pequeno</option>
										<option value="2">Médio</option>
										<option value="3">Grande</option>
									</select>
									<label for="petPorte">Porte do seu pet </label>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-4">
								<div class="form-floating mb-3">
									<input type="number" class="form-control" id="petPeso" name="petPeso" placeholder="name@example.com">
									<label for="petPeso">Com quantos quilinhos ele(a) tá? </label>
								</div>
							</div>
						</div>
						<div class="row justify-content-center ">
							<div class="d-grid p-4 col-2">
								<button type="submit" class="btn btn-dark">Enviar</button>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
		<footer>
			<div class="p-4 footer align-text-bottom">
				<div class="row justify-content-center" style="color: white;">
					Todos os direitos reservados, Danilo Messias&copy e Gustavo Lourenço&copy
				</div>
			</div>
		</footer>

	</div>
</body>


</html>