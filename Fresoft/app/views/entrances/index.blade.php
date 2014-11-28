@section('main')
	
	<h2><font color="blue">Entrada De Los Productos Lé-Fresé</font></h2>
	@if ( !$entrances->count() )
		Aún no se almacenado ningun registro en las entradas.!
	@else
		<ul>
			@foreach( $entrances as $entrance )
			 <li>
				<a href="{{ route('entrances.show', $entrance->id) }}">
				<font color="blue">Entradakg: </font>{{ $entrance-> entradakg }}</a>
				<p><font color="blue">Product_id: </font> {{ $entrance->product_id }}</p>
				<p><font color="blue">Fecha:</font>{{ $entrance->created_at }}</p>
				</li>
			@endforeach
		</ul>
	@endif
@stop