@extends('footer')
@extends('header')

@section('header')
	@parent
		<!--{{ Auth::user()->id }}
		{{ Auth::user()->name }}
		{{ Auth::user()->username }}
		{{ Auth::user()->email }}
		{{ Auth::user()->password }}-->
		<div>
			<img src="{{asset('img/logolookup.png')}}" class="mx-auto d-block">
		</div>     
	@section('footer')
		@parent
	@endsection
@endsection