@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Search Results</div>
                <div class="panel-body">
                    @if(isset($message))
                     <p> {{ $message }} </p>
                    @endif
                        @if(isset($details))
                        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($details as $user)
                                <tr>
                                    <td>{{$user->first_name}}</td>
                                    <td>{{$user->last_name}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>{{$user->email}}</td>
                                    <td><a href="/profile/{{$user->id}}"  class="btn btn-default">Profile</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
