@section('footer')
<script type="text/javascript" src="{{asset('js/angular.js')}}"></script>
<script type="text/javascript" src="{{asset('js/angular-route.js')}}"></script>
<script type="text/javascript" src="{{asset('js/Controller.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
			</div>
	    </div>
	</div>
</body>
</html>
<script>
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
@show