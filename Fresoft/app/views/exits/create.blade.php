@section('main')
<h2>Agregar Salidas</h2>

{{ Form::model(new Exitt, ['route' => ['exits.store']]) }}
   @include('exits/partials/_form', ['submit_text' => 'Registrar Salida'])
{{ Form::close() }}
@stop