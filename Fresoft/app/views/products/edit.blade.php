@section('main')
<h2>Nuevo Producto</h2>
<br/>

{{ Form::model($product,array('method' => 'PATCH', 'route' => ['products.update', $product->id])) }}
{{ Form::label('nombre', 'Nombre:') }}
{{ Form::text('nombre') }}<br/><br/>
{{ Form::label('precio', 'Precio:') }}
{{ Form::text('precio') }}<br/><br/>
{{ Form::submit('guardar') }}
<a href="http://localhost:8000/products">Regresar</a>
{{ Form::close() }}
@stop