@extends('footer')
@extends('header')

@section('header')
	@parent
		<div class="row">
		  <div class="card col-sm-12 col-md-3 " style="width:400px" data-toggle="modal" data-target="#myModal">
		    <img class="card-img-top" src="{{asset('img/device.png')}}" alt="Card image" style="width:100%">
		    <div class="card-body">
		      <h4 class="card-title">{{ Auth::user()->name }}</h4>
		      <p class="card-text">Device Example</p>
		      <!-- Button to Open the Modal -->
			  <button type="button" class="btn btn-primary">
			    More Information
			  </button>
		    </div>
		  </div>

		  <!-- The Modal -->
		  <div class="modal fade" id="myModal">
		    <div class="modal-dialog">
		      <div class="modal-content">
		      
		        <!-- Modal Header -->
		        <div class="modal-header">
		          <h1 class="modal-title">Device Information</h1>
		          <button type="button" class="close" data-dismiss="modal">×</button>
		        </div>
		        
		        <!-- Modal body -->
		        <div class="modal-body">
		        	<img class="img-fluid" src="{{asset('img/device.png')}}" alt="Card image" style="width:100%">
		        	<div class="container">
		        		<p>Name: {{ Auth::user()->name }}</p>
		        		<p>Username: {{ Auth::user()->username }}</p>
		        		<p>Email: {{ Auth::user()->email }}</p>
		        		<p>Address: {{ Auth::user()->address }}</p>
		        		<p>Phone: {{ Auth::user()->phone }}</p>
		        		<p>Federal Entity: {{ Auth::user()->state }}</p>
		        		<p>City: {{ Auth::user()->city }}</p>
		        	</div>
		        </div>
		        
		        <!-- Modal footer -->
		        <div class="modal-footer">
		          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		        </div>
		        
		      </div>
		    </div>
		  </div>

		  <div class="card col-sm-12 col-md-3 offset-md-1" style="width:400px" data-toggle="modal" data-target="#myModal2">
		    <img class="card-img-top" src="{{asset('img/device.png')}}" alt="Card image" style="width:100%">
		    <div class="card-body">
		      <h4 class="card-title">{{ Auth::user()->name }}</h4>
		      <p class="card-text">Device Example</p>
		      <!-- Button to Open the Modal -->
			  <button type="button" class="btn btn-primary">
			    More Information
			  </button>
		    </div>
		  </div>

		  <!-- The Modal -->
		  <div class="modal fade" id="myModal2">
		    <div class="modal-dialog">
		      <div class="modal-content">
		      
		        <!-- Modal Header -->
		        <div class="modal-header">
		          <h1 class="modal-title">Device Information</h1>
		          <button type="button" class="close" data-dismiss="modal">×</button>
		        </div>
		        
		        <!-- Modal body -->
		        <div class="modal-body">
		        	<img class="img-fluid" src="{{asset('img/device.png')}}" alt="Card image" style="width:100%">
		        	<div class="container">
		        		<p>Name2: {{ Auth::user()->name }}</p>
		        		<p>Username2: {{ Auth::user()->username }}</p>
		        		<p>Email2: {{ Auth::user()->email }}</p>
		        		<p>Address2: {{ Auth::user()->address }}</p>
		        		<p>Phone2: {{ Auth::user()->phone }}</p>
		        		<p>Federal Entity2: {{ Auth::user()->state }}</p>
		        		<p>City2: {{ Auth::user()->city }}</p>
		        	</div>
		        </div>
		        
		        <!-- Modal footer -->
		        <div class="modal-footer">
		          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		        </div>
		        
		      </div>
		    </div>
		  </div>

		  <div class="card col-sm-12 col-md-3 offset-md-1" style="width:400px" data-toggle="modal" data-target="#myModal3">
		    <img class="card-img-top" src="{{asset('img/device.png')}}" alt="Card image" style="width:100%">
		    <div class="card-body">
		      <h4 class="card-title">{{ Auth::user()->name }}</h4>
		      <p class="card-text">Device Example</p>
		      <!-- Button to Open the Modal -->
			  <button type="button" class="btn btn-primary">
			    More Information
			  </button>
		    </div>
		  </div>

		  <!-- The Modal -->
		  <div class="modal fade" id="myModal3">
		    <div class="modal-dialog">
		      <div class="modal-content">
		      
		        <!-- Modal Header -->
		        <div class="modal-header">
		          <h1 class="modal-title">Device Information</h1>
		          <button type="button" class="close" data-dismiss="modal">×</button>
		        </div>
		        
		        <!-- Modal body -->
		        <div class="modal-body">
		        	<img class="img-fluid" src="{{asset('img/device.png')}}" alt="Card image" style="width:100%">
		        	<div class="container">
		        		<p>Name3: {{ Auth::user()->name }}</p>
		        		<p>Username3: {{ Auth::user()->username }}</p>
		        		<p>Email3: {{ Auth::user()->email }}</p>
		        		<p>Address3: {{ Auth::user()->address }}</p>
		        		<p>Phone3: {{ Auth::user()->phone }}</p>
		        		<p>Federal Entity3: {{ Auth::user()->state }}</p>
		        		<p>City3: {{ Auth::user()->city }}</p>
		        	</div>
		        </div>
		        
		        <!-- Modal footer -->
		        <div class="modal-footer">
		          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		        </div>
		        
		      </div>
		    </div>
		  </div>
	  	</div>
	</div>
	@section('footer')
		@parent
	@endsection
@endsection