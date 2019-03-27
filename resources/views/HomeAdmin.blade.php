@extends('footer')
@extends('headerAdmin')

@section('headerAdmin')
	@parent
		<div>
			<img src="{{asset('img/logolookup.png')}}" class="mx-auto d-block">
		</div>     
	@section('footer')
		@parent
	@endsection
@endsection