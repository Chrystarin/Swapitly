@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <h1>Add Product</h1> --}}
    {!! Form::open(['action' => ['ProductsController@update', $prod->id], 'method' => 'POST']) !!}
        <div class='page-header'>
            <div class='btn-toolbar pull-right'>
                <a href="\products" class="btn btn-success">Go Back</a>
            </div>
            <h2>Edit Product</h2>
        </div>
        <div class="form-group{{$errors->has('item_name') ? ' has-error' : ''}}">
            {{Form::label('title', 'Product Name')}}
            {{Form::text('item_name', $prod->item_name, ['class' => 'form-control', 'placeholder' => 'Item name'])}}

            @if ($errors->has('item_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('item_name') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{$errors->has('description') ? ' has-error' : ''}}">
            {{Form::label('desciption', 'Description')}}
            {{Form::textarea('description', $prod->description, ['class' => 'form-control', 'placeholder' => 'Description'])}}

            @if ($errors->has('description'))
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection