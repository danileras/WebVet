<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title> Cadastro Pet </title>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
		crossorigin="anonymous"></script>
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
					<form method='POST' action='submit.php'>
						<div class="row align-items-center">
							<div class="col-12">
								<p class='fs-5 text-center'>Dados Pessoais</p>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-4">
								<div class="form-floating mb-3">
									<input type="text" class="form-control" id="donoFirstName" name="donoFirstName"
										placeholder="name@example.com">
									<label for="floatingInput">Primeiro nome </label>
								</div>
							</div>
							<div class="col-4">
								<div class="form-floating mb-3">
									<input type="text" class="form-control" id="donoLastName" name="donoLastName"
										placeholder="name@example.com">
									<label for="floatingInput">Sobrenome </label>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-4">
								<div class="form-floating mb-3">
									<input type="text" class="form-control" id="donoTel" name="donoTel"
										placeholder="name@example.com">
									<label for="floatingInput">Telefone </label>
								</div>
							</div>
							<div class="col-4">
								<div class="form-floating mb-3">
									<input type="text" class="form-control" id="donoCPF" name="donoCPF"
										placeholder="name@example.com">
									<label for="floatingInput">CPF </label>
								</div>
							</div>
						</div>
						<div class="row align-items-center">
							<div class="col-12">
								<p class='fs-5 text-center'>Endereço</p>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-6">
								<div class="form-floating mb-3">
									<input type="text" class="form-control" id="donoLog" name="donoLog"
										placeholder="name@example.com">
									<label for="floatingInput">Logradouro </label>
								</div>
							</div>
							<div class="col-2">
								<div class="form-floating mb-3">
									<input type="number" class="form-control" id="donoNum" name="donoNum"
										placeholder="name@example.com">
									<label for="floatingInput">Número </label>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-4">
								<div class="form-floating mb-3">
									<input type="text" class="form-control" id="donoBairro" name="donoBairro"
										placeholder="name@example.com">
									<label for="floatingInput">Bairro </label>
								</div>
							</div>
							<div class="col-4">
								<div class="form-floating mb-3">
									<input type="text" class="form-control" id="donoCidade" name="donoCidade"
										placeholder="name@example.com">
									<label for="floatingInput">Cidade </label>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-4">
								<div class="form-floating mb-3">
									<input type="text" class="form-control" id="donoEstado" name="donoEstado"
										placeholder="name@example.com">
									<label for="floatingInput">Estado </label>
								</div>
							</div>
							<div class="col-4">
								<div class="form-floating mb-3">
									<input type="text" class="form-control" id="donoCEP" name="donoCEP"
										placeholder="name@example.com">
									<label for="floatingInput">CEP </label>
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