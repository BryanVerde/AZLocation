@extends('footer')
@extends('header')

@section('header')
	@parent
		{{ Auth::user()->name }}
		{{ Auth::user()->username }}    
	@section('footer')
		@parent
			document.getElementById("sidebarCollapse").addEventListener("click", function () {
				var menu = document.querySelector('#sidebar')
				menu.classList.toggle('active');

				var men = document.querySelector('#content')
				men.classList.toggle('active');

				/*var me = document.querySelector('#sidenavActivation')
				me.classList.toggle('active');*/

				//var me = document.querySelector('.collapse.in')
				//me.classList.toggle('in');

				//document.getElementStyle('a[aria-expanded=true]').getAttribute('aria-expanded', 'false');		
			});
		</script>
	@endsection
@endsection