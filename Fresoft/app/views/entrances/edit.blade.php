@section('main')
<h2>Nuevo Producto</h2>
<br/>

{{ Form::model($entrance,array('method' => 'PATCH', 'route' => ['entrances.update', $entrance->id])) }}
{{ Form::label('product_id', 'Producto:') }}
{{ Form::select('product_id',  $productos) }} 
{{ Form::text('product_id') }}<br/><br/>
{{ Form::label('entradakg', 'EntradaKg:') }}
{{ Form::text('entradakg') }}<br/><br/>
{{ Form::submit('guardar') }}
<a href="http://localhost:8000/entrances">Regresar</a>
{{ Form::close() }}
@stop