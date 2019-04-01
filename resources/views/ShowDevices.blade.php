@extends('footer')
@extends('header')

@section('header')
@parent
<div class="row">
    @foreach($data as $localizad)
    <div class="card col-sm-12 col-md-3 offset-md-1" style="width:400px; margin-top: 10px;" data-toggle="modal" data-target="#myModal">
        <img class="card-img-top" src="{{asset('img/device.png')}}" alt="Card image" style="width:100%">
        <div class="card-body">
            <h4 class="card-title">{{ $localizad->name }}</h4>
            <p class="card-text">Device Example</p>
            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-primary" >
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
                        <p>Name: {{ $localizad->name }}</p>
                        <p>Username: {{ $localizad->username }}</p>
                        <p>Phone: {{ $localizad->phone }}</p>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
@section('footer')
@parent
@endsection
@endsection 