
@section('main')
{{ Form::open(array('url' => 'login')) }}
		<h1>Login</h1>

		<!-- if there are login errors, show them here -->
		<p>
			{{ $errors->first('nombre') }}
			{{ $errors->first('password') }}
		</p>

		<p>
			{{ Form::label('nombre', 'Nombre de Usuario') }}
			{{ Form::text('nombre', Input::old('nombre'), array('placeholder' => 'Nombre de Usuario')) }}
		</p>

		<p>
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}
		</p>

		<p>
			<label>
				{{ Form::checkbox('rememberme', true ) }} No salir
			</label>
		</p>
		<p>{{ Form::submit('Entrar') }}</p>
	{{ Form::close() }}

@stop
