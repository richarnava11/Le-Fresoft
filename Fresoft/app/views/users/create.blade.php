@section('main')
<h2>{{$user->nombre}}</h2>
<span>Por:{{$product->user->nombre}}
el {{$user->created_at}}</span>
<p>
{{$user->nombre}}
</p>
<!--<p><strong>Tags:</strong>{{$user->rol}}
<p>-->
@stop