@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Homepage</div>
                <div class="panel-body">
                    <div>This is the homepage</div>
                    <br>
                    <a href="/products" class="btn btn-default btn-lg">Products</a>
                    <br><br>
                    <a href="/ratings" class="btn btn-default btn-lg">Ratings</a>
                    <div class="test">This is a test</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
