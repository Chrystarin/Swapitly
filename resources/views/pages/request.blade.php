@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Request</div>
                <div class="panel-body">
                    {{-- {!! Form::open(['action' => 'RequestController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} --}}

                    {!! Form::open() !!}
                    {{Form::text('item_name', '', ['class' => 'form-control', 'placeholder' => 'Item name'])}}
                    {{Form::submit('Send Request')}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
