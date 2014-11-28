@section('main')
	<h2>Product</h2>
	@if ( !$products->count() )
		Aún no se ha almacenado registro en este blog.
	@else
		<ul>
			@foreach( $products as $product )
			 <li>
				<!--<a href="{{ route('products.show', $product->id) }}">-->
				<strong>{{ $product-> nombre }}</strong></a>
				<p>{{ $product->precio }}</p>
				</li>
			@endforeach
		</ul>
	@endif
@stop