@section('main')
	<h2>Entrada de productos</h2>
	@if ( !$entrances->count() )
		Aún no se almacenado ningun registro en las entradas.!
	@else
		<ul>
			<table class="table table-striped" style="width: 900px">
			<thead>
				<tr align="center">
					<th><strong>Entradakg</strong></th>
					<th><strong>Id del producto</strong></th>
					<th><strong>Fecha</strong></th>
					<th><strong>Opciones</strong></th>
				</tr>
			</thead>
			<tbody>
			@foreach( $entrances as $entrance )
				<tr>
					<td>
						<p>{{ $entrance->entradakg }}</p>
					</td>
					<td>
						<p>{{ $entrance->product_id }}</p>
					</td>
					<td>
						<p>{{ $entrance->created_at }}</p>
					</td>
					<td>				          
				             {{ Form::open(array('url' => 'entrances/' . $entrance->id, 'method' => 'DELETE'))
							}}

							{{ Form::submit('Eliminar')}}
							{{ link_to_route('entrances.edit', 'Editar Entrada', $entrance->id)}}

							{{ Form::close() }}				          
					</td>
				</tr>
			@endforeach
			</tbody>
			<tfoot>
			</tfoot>
			</table>
			<!--@foreach( $entrances as $entrance )
			 <li>
				<p>
				<font color="blue">Entradakg: </font>{{ $entrance-> entradakg }}</p>
				<p><font color="blue">Product_id: </font> {{ $entrance->product_id }}</p>
				<p><font color="blue">Fecha:</font>{{ $entrance->created_at }}</p>
			</li>
			@endforeach
			-->
		</ul>
		<a href="entrances/create">Nueva Entrada</a>
	@endif
@stop