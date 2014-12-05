@section('main')
	<h2>Lista de Productos</h2>
	@if ( !$products->count() )
		Aún no se ha almacenado registro en este blog.
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
			</table>
			<!--<li>
				<strong>{{ $product-> nombre }}</strong>
				<p>{{ $product->precio }}</p>
			</li>-->
			
		</ul>
		<a href="products/create">Nuevo Producto</a>
	@endif
@stop