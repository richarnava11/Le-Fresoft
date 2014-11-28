@section('main')
<h2>Users</h2>
@if (!$users->count())
Aun  no se ha crreado Producto en este blog
@else
<ul>
	@foreach($users as $user)
	<li>
		<a href="{{route('users.show',$user->id)}}">
		<p>{{$user->nombre}}</p>
		<p>{{$user->password}}</p>
		<p>{{$user->email}}</p>
		
	</li>
	@endforeach
</ul>
@endif
@stop