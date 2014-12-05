@section('main')
<h2>Editar Post</h2>

{{Form::model($product, array('method' => 'PATCH', 'route'=> ['products.update', $product->id], 'role' => 'form', 'class' => 'form-horizontal'))}}

@include('posts/partials/_form')