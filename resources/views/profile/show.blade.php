@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">My Profile</div>
                    <div class="panel-body">
                        <img style="width:100%;height:30vh;"src="/storage/cover_images/{{$users->cover_image}}" class="img-responsive"><br>
                        <img style="width:25%"src="/storage/profile_images/{{$users->profile_image}}" class="img-circle col-md-2"><br>
                        <h2>{{ $users->first_name }} </h1>
                        <h4>{{ $users->username }}  </h4>
                        @if(!Auth::guest())
                            @if(Auth::user()->id==$users->id)
                                <a href="/profile/{{Auth::user()->id}}/edit" class="btn btn-default">Edit</a>
                            @endif
                        @endif
                        @if(!Auth::guest())
                            @if(Auth::user()->id!==$users->id)
                                <a href="\" class="btn btn-default btn-lg">Chat</a></li>
                            @endif
                        @endif
                        <hr>
                        <h4>Description</h4>
                        <h5>{{ $users->description }}</h5>
                        <hr>
                        <h4>Contact Details</h4>
                        <h5>{{ $users->email }}</h5>
                        <h5>{{ $users->mobile_number }}</h5>
                        <h5>{{ $users->address }}</h5>
                        <hr>
                        <h4>My Trades</h4>
                        <hr>
                        <h4>Ratings & Reviews</h4>
                        @if(!Auth::guest())
                            @if(Auth::user()->id!==$users->id)
                                <a href="\r\rate\{{$users->id}}" class="btn btn-default btn-lg">Rate Me</a></li>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
