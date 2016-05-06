@extends('template');

@section('content')
    <h1>Create new Post</h1>

    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    {!! Form::open(['route' => 'admin.posts.store', 'method' => 'post']) !!}

    @include('admin.posts._form')
    <!-- Tags Form Imput -->
    
    <div>
        {!! Form::label('tags', 'Tags') !!}
        {!! Form::textarea('tags', null, ['class' => 'form-control']) !!}
    </div>
    
    <div>
        {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@stop