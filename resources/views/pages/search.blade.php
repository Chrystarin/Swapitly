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

                    @if(isset($category))
                        @if($category === "Traders")
                            @if(isset($details))
                                <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                                <table>
                                    <tbody>
                                        @foreach($details as $user)
                                        <tr>
                                            <a href="/profile/{{$user->id}}"  class="btn btn-default">
                                                <div class="card" style="width: 18rem;">
                                                    <img class="img-responsive" src="/storage/profile_images/{{$user->profile_image}}" alt="Profile Image">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{$user->first_name}} {{$user->last_name}}</h5>
                                                        <p class="card-title">{{$user->username}}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                        @endif

                        @if($category === "Items")
                            @if(isset($details))
                                <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                                <table>
                                    <tbody>
                                        @foreach($details as $prod)
                                        <tr>
                                            <a href="/products/{{$prod->id}}"  class="btn btn-default">
                                                <div class="card" style="width: 18rem;">
                                                    <img class="img-responsive" src="/storage/profile_images/default_profile.jpg" alt="Product Image">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{$prod->item_name}}</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                        @endif
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
