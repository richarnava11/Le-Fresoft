<div>

	<div>
	{{ Form::label('nombre', 'Nombre:') }}
	{{ Form::text('nombre') }}
	</div>

	<div>
	{{ Form::label('precio', 'Precio:') }}
	{{ Form::text('precio') }}
	</div>
	<br>


	<div>
	{{ Form::submit($submit_text) }}
	</div>
</div>