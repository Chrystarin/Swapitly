@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Review</div>
                <div class="panel-body">
                    {!! Form::open(['action' => 'RatingsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                        {{Form::label('rating', 'Rating')}}
                        {{Form::select('rating', ['1' => '★☆☆☆☆ - 1 Star', '2' => '★★☆☆☆ - 2 Star', '3' => '★★★☆☆ - 3 Star', '4' => '★★★★☆ - 4 Star', '5' => '★★★★★ - 5 Star'], '', ['class' => 'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('review', 'Review')}}
                        {{Form::textarea('review', '', ['class' => 'form-control'])}}
                    </div>
                    {{Form::hidden('id', $users->id)}}
                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                {!! Form::close() !!}
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
