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
					<h6 class="indigo-text">Gestor de Casos</h6>
					<span>Bienvenidos</span>
				</div>
				<div class="section"></div>
				<div class="section"></div>
				<form method="POST" action="{{ route('login') }}" class="col s12">
					 @csrf
					<div class="row">
						<div class="col s6 input-field offset-s3">
							<input id="email" type="email" class="validate {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required >
							<label for="email">Correo</label>

							 @if ($errors->has('email'))
                                <span class="red-text">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
						</div>
					</div>

					<div class="row">
						<div class="col s6 input-field  offset-s3">
							 <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
							<label for="password">Contraseña</label>

							@if ($errors->has('password'))
                                <span class="red-text col s12 offset-l1" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
						</div>
					</div>


					 <div class="row">     
                        <p class="center">
                            <label>
                                <input  type="checkbox" {{ old('remember') ? 'checked' : '' }} >
                                <span class="indigo-text text-accent-4">Recuerdame</span>
                            </label>
                        </p>
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
				<span class="white-text text1">Testing</span><span class="white-text text2">Gestor de Casos</span>
			</div>
		</div>
        <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>