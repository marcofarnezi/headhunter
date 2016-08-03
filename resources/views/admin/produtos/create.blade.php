@extends('template');

@section('content')
    <h1>Novo Produto</h1>

    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    {!! Form::open(['route' => 'admin.produtos.store', 'method' => 'produto']) !!}

    @include('admin.produtos._form')
    <br />
    <div>
        {!! Form::submit('Salvar produto', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@stop