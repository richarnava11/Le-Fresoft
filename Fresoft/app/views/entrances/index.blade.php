@section('main')
	
	<h2><font color="blue">Entrada de Productos</font></h2>
	@if ( !$entrances->count() )
		Aún no se almacenado ningun registro en las entradas.!
	@else
		<ul>
			
			<!--<li>
				<a href="{{ route('entrances.show', $entrance->id) }}">
				<font color="blue">Entradakg: </font>{{ $entrance-> entradakg }}</a>
				<p><font color="blue">Product_id: </font> {{ $entrance->product_id }}</p>
				<p><font color="blue">Fecha:</font>{{ $entrance->created_at }}</p>
				<p><font color="blue">Producto:</font>{{ $products->nombre }}</p>
			</li>-->
			<table class="table table-striped" style="width: 900px">
			<thead>
				<tr align="center">
					<th><strong>Producto</strong></th>
					<th><strong>Entradakg</strong></th>
					<th><strong>Fecha</strong></th>
					<th><strong>Opciones</strong></th>
				</tr>
			</thead>
			<tbody>
			@foreach( $entrances as $entrance )
				<tr>
					<td>
						<p>{{ $product->nombre }}</p>
					</td>
					<td>
						<p>{{ $entrance->entradakg }}</p>
					</td>
					<td>
						<p>{{ $entrance->created_at }}</p>
					</td>
					<!--<td>
						
						
				          
				             {{ Form::open(array('url' => 'products/' . $product->id, 'method' => 'DELETE'))
							}}

							{{ Form::submit('Eliminar')}}
							{{ link_to_route('products.edit', 'Editar producto', $product->id)}}

							{{ Form::close() }}
				          
				          
					</td>-->
					<td>
						
					</td>
				</tr>
				@endforeach
			</tbody>
			<tfoot>
				<tr>
					<td>
							
					</td>
				</tr>
			</tfoot>
			</table>		
		</ul>
	@endif
@stop