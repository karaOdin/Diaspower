@if(Auth::user()->role_id == 2)
	@foreach($hotels as $hotel)
		{{$hotel->name}}
		{{$hotel->adress}}
	@endforeach

@endif