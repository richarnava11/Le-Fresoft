<div>

	<div>
	{{ Form::label('cantidadkg', 'CantidadKg:') }}
	{{ Form::text('cantidadkg') }}
	</div>

	<div>
	{{ Form::label('importe', 'Importe:') }}
	{{ Form::text('importe') }}
	</div>

	<div>
	{{ Form::label('exit_id', 'Id de la venta:') }}
	{{ Form::text('exit_id') }}
	</div>

	<div>
	{{ Form::label('product_id', 'Id del producto:') }}
	{{ Form::text('product_id') }}
	</div>
	<br>


	<div>
	{{ Form::submit($submit_text) }}
	</div>
</div>