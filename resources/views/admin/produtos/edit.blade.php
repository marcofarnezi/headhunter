@extends('template');

@section('content')
    <h1>Editar produto {{ $produto->nome }}</h1>

    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    {!! Form::model($produto, ['route' => ['admin.produtos.update', $produto->id], 'method' => 'put']) !!}

    @include('admin.produtos._form')
    <!-- Tags Form Imput -->
    <br />
    <div>
        {!! Form::submit('Salvar produto', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@stop