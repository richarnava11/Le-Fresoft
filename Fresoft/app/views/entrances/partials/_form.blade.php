<div>

	{{ Form::label('product_id', 'Producto') }}
	{{ Form::select('product_id',  $productos) }}


	<div>
	{{ Form::label('entradakg', 'EntradaKg:') }}
	{{ Form::text('entradakg') }}
	</div>

	<br>


	<div>
	{{ Form::submit($submit_text) }}
	<a href="http://localhost:8000/entrances">Regresar</a>

	</div>
</div>