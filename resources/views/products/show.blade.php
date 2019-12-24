@extends('layouts.app')

@section('content')
<div class="container">
    <div class='page-header'>
        @if (!Auth::guest())
            @if (Auth::user()->id == $post->user_id)
                <div class='btn-toolbar pull-right'>
                    <a href="\products" class="btn btn-success">Go Back</a>
                    <a href="\products\{{$prod->id}}\edit" class='btn btn-primary'>Edit</a>&nbsp;
                    {!!Form::open(['action' => ['ProductsController@destroy', $prod->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                </div>
            @endif
        @endif
        <h2>{{$prod->item_name}}</h2>
        <small>Posted on {{$prod->created_at}}</small>
    </div>
    <p>{{$prod->description}}</p>
</div>
@endsection
