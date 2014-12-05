@section('main')
<h2>Nuevo Producto</h2>
<br/>

{{ Form::open(array('url' => 'products')) }}
{{ Form::label('nombre', 'Nombre:') }}
{{ Form::text('nombre') }}<br/><br/>
{{ Form::label('precio', 'Precio:') }}
{{ Form::text('precio') }}<br/><br/>
{{ Form::submit('guardar') }}
{{ Form::close() }}
@stop