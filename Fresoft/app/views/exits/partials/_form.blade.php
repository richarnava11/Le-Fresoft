<div>

	<div>
	{{ Form::label('created_at', 'Fecha:') }}
	{{ Form::text('created_at') }}
	</div>

	<div>
	{{ Form::label('importe', 'Importe:') }}
	{{ Form::text('importe') }}
	</div>
	<div>
	{{ Form::label('pesototal', 'Peso Total:') }}
	{{ Form::text('pesototal') }}
	</div>
	<br>


	<div>
	{{ Form::submit($submit_text) }}
	</div>
</div>