<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Gestor') }}</title>
    <!-- Compiled and minified JavaScript -->

            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="back">
		<div class="row no-bottom">
			<div class="col s6 m6 l4 white fondo-form">
				<div class="section center">
					<h6 class="indigo-text">CANTV</h6>
					<span>Forensica</span>
				</div>
				<div class="section"></div>
				<div class="section"></div>
				<form action="" class="col s12">
					<div class="row">
						<div class="col s6 input-field offset-s3">
							<input type="text" id="usuario" class="validate">
							<label for="usuario">Usuario</label>
						</div>
					</div>

					<div class="row">
						<div class="col s6 input-field  offset-s3">
							<input type="text" id="pass" class="validate">
							<label for="pass">Contraseña</label>
						</div>
					</div>
					<div class="row">
						<button class="col s12 m12 l6 btn offset-l3 indigo darken-4 ">Ingresar</button>
					</div>


				</form>
				<div class="row center">
					<div class="col s12 m12 l11">
						<p class="mensaje ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, quidem ut? Odit possimus veritatis hic labore modi error iusto praesentium nostrum eius, vero libero doloribus qui ipsum blanditiis consequatur? Hic.</p>
					</div>
				
					
				</div>
				
			</div>
			<div class="section"></div>
				<div class="section"></div>
				<div class="section"></div>
				<div class="section"></div>
				<div class="section"></div>
				<div class="section"></div>
				<div class="section"></div>
				<div class="section"></div>
			<div class="col s6 m6 l7 center box">
				<span class="white-text text1">Cantv</span><span class="white-text text2">Coordinación de Informática Forense</span>
			</div>
		</div>
        <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>