<div>

	<div>
	{{ Form::label('entradakg', 'EntradaKg:') }}
	{{ Form::text('entradakg') }}
	</div>

	<div>
	{{ Form::label('created_at', 'Fecha:') }}
	{{ Form::text('created_at') }}
	</div>

	<div>
	{{ Form::label('product_id', 'IdProducto:') }}
	{{ Form::text('product_id') }}
	</div>
	<br>


	<div>
	{{ Form::submit($submit_text) }}
	</div>
</div>