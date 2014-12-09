@section('main')
	<h2>Lista de Productos</h2>
	@if ( !$products->count() )
		Aún no se ha almacenado registro de productos.
	@else
		<ul>
			<table class="table table-striped" style="width: 900px">
			<thead>
				<tr align="center">
					<th><strong>Nombre</strong></th>
					<th><strong>Precio</strong></th>
					<th><strong>Existencia</strong></th>
					<th><strong>Opciones</strong></th>
				</tr>
			</thead>
			<tbody>
			@foreach( $products as $product )
				<tr>
					<td>
						<p>{{ $product->nombre }}</p>
					</td>
					<td>
						<p>{{ $product->precio }}</p>
					</td>
					<td>
						<p>{{ $product->existencia }}</p>
					</td>
					<td>				          
				             {{ Form::open(array('url' => 'products/' . $product->id, 'method' => 'DELETE'))
							}}

							{{ Form::submit('Eliminar')}}
							{{ link_to_route('products.edit', 'Editar producto', $product->id)}}

							{{ Form::close() }}				          
					</td>
				</tr>
			@endforeach
			</tbody>
			<tfoot>
			</tfoot>
			</table>			
		</ul>
		<a href="products/create">Nuevo Producto</a>
	@endif
@stop