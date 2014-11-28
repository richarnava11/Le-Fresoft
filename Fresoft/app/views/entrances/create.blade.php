@section('main')
<h2>Agregar Entradas</h2>

{{ Form::model(new Entrance, ['route' => ['entrances.store']]) }}
   @include('entrances/partials/_form', ['submit_text' => 'Registrar Venta'])
{{ Form::close() }}
@stop