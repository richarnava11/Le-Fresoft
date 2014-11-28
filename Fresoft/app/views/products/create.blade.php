@section('main')
<h2>Nuevo Producto</h2>

{{ Form::model(new Product, ['route' => ['products.store']]) }}
   @include('products/partials/_form', ['submit_text' => 'Registrar Producto'])
{{ Form::close() }}
@stop