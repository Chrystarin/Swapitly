@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Item Registration</div>
                <div class="panel-body">
                    {!! Form::open(['action' => 'ProductsController@store', 'method' => 'POST']) !!}
                        <div class="form-group{{$errors->has('item_name') ? ' has-error' : ''}}">
                            {{Form::label('title', 'Item Name',['class' => 'col-md-3 control-label'])}}
                            <div class="col-md-7">
                                {{Form::text('item_name', '', ['class' => 'form-control', 'placeholder' => 'Item name'])}}

                                @if ($errors->has('item_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('item_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{$errors->has('description') ? ' has-error' : ''}}">
                            {{Form::label('desciption', 'Description', ['class' => 'col-md-3 control-label'])}}
                            <div class="col-md-7">
                                {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                            </div>
                        </div>
                        
                    {!! Form::close() !!}
                </div>
        </div>
    </div>
</div>
@endsection