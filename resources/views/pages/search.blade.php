@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Search Results</div>
                <div class="panel-body">
                    @if(isset($message))
                    <p> {{ $message }} </p>
                    @endif
                    @if(isset($traders))
                        <p> Traders search results for <b> {{ $query }} </b> :</p>
                        <table>
                            <tbody>
                                @foreach($traders as $trader)
                                <tr>
                                    <a href="/profile/{{$trader->id}}"  class="btn btn-default">
                                        <div class="card" style="width: 18rem;">
                                            <img class="img-responsive" src="/storage/profile_images/{{$trader->profile_image}}" alt="Image">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$trader->username}}</h5>
                                            </div>
                                        </div>
                                    </a>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                    @if(isset($items))
                        <p> Items search results for <b> {{ $query }} </b> :</p>
                        <table>
                            <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <a href="/products/{{$item->id}}"  class="btn btn-default">
                                        <div class="card" style="width: 18rem;">
                                            <img class="img-responsive" src="/storage/item_images/default_item.png" alt="Image">
                                            <div class="card-body">
                                            <h5 class="card-title">{{$item->item_name}}</h5>
                                            </div>
                                        </div>
                                    </a>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
    </div>
</div>
@endsection
