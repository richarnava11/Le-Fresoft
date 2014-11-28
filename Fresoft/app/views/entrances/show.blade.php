
@section('main')
	<!--<h2>{{ $entrance->entradakg }}</h2>
	<span>Por: {{ $entrance->user->nombre }}
	el {{ $entrance->created_at }}</span>
	<p>
		{{ $entrance->product_id }}
	</p>

	<p>
		{{ $entrance->user_id }}
	</p>-->

	<!--<div> 
	@foreach($entrance->exits as $exitss)
		<div style="border: 1px solid #ccc; margin-bottom:4px;">
			<span>{{$exitss->user->nombre}} el {{ $exitss->created_at}}</span>

			<p>{{$exitss->}}</p>
		</div>

	@endforeach

	</div>-->

		<!--<p></p><div align="center"><h3><strong>Agregar nueva entrada</strong></h3></div><p></p>

		<div align="center">
		@include('coments/partials/_comment')
			
		</div>-->


	<p>
	{{ link_to_route('entrances.index', 'Volver a Entradas')}}
	</p>

@stop