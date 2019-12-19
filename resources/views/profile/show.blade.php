@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Profile</div>
                    <div class="panel-body">
                        
                        <a href="/profile/{{Auth::user()->id}}/edit" class="btn btn-default">Edit</a>
                        <h2>{{ Auth::user()->first_name }} </h1>
                        <h4>{{ Auth::user()->username }}  </h4>
                        <hr>
                        <h4>Description</h4>
                        <h5>{{ Auth::user()->description }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
