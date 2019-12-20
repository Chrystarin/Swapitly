@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Profile</div>
                    <div class="panel-body">
                        
                        <img style="width:100%;height:30vh;"src="/storage/cover_images/{{Auth::user()->cover_image}}" class="img-responsive"><br>
                        <img style="width:25%"src="/storage/profile_images/{{Auth::user()->profile_image}}" class="img-circle col-md-2"><br>
                        
                        <h2>{{ Auth::user()->first_name }} </h1>
                        <h4>{{ Auth::user()->username }}  </h4>
                        <a href="/profile/{{Auth::user()->id}}/edit" class="btn btn-default">Edit</a>
                        <hr>
                        <h4>Description</h4>
                        <h5>{{ Auth::user()->description }}</h5>
                        <hr>
                        <h4>Contact Details</h4>
                        <h5>{{ Auth::user()->email }}</h5>
                        <h5>{{ Auth::user()->mobile_number }}</h5>
                        <h5>{{ Auth::user()->address }}</h5>
                        <hr>
                        <h4>My Trades</h4>
                        <hr>
                        <h4>Ratings & Reviews</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
