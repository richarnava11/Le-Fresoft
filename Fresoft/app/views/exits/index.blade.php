@section('main')
	<h2>Ventas de Productos</h2>
	@if ( !$exits->count() )
		Aún no se almacenado ningun registro en las entradas.!
	@else
		<ul>
			<table class="table table-striped" style="width: 900px">
			<thead>
				<tr align="center">
					<th><strong>Importe</strong></th>
					<th><strong>Peso Total</strong></th>
					<th><strong>Fecha</strong></th>
					<th><strong>Opciones</strong></th>
				</tr>
			</thead>
			<tbody>
			@foreach( $exits as $exit )
				<tr>
					<td>
						<p>{{ $exit->importe }}</p>
					</td>
					<td>
						<p>{{ $exit->pesototal }}</p>
					</td>
					<td>
						<p>{{ $exit->created_at }}</p>
					</td>
				</tr>
			@endforeach
			</tbody>
			<tfoot>
			</tfoot>
			</table>
			 <!--<li>
				<font color="blue">Entradakg: </font>{{ $exit->importe }}</a>
				<p><font color="blue">Product_id: </font> {{ $exit->pesototal }}</p>
				<p><font color="blue">Fecha:</font>{{ $exit->created_at }}</p>
				</li>-->
			
		</ul>
	@endif
@stop