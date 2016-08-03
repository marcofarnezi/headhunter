@extends('template');

@section('content')
    <h1>Produtos</h1>
    <a href="{{ route('admin.produtos.create') }}" class="btn btn-info">Novo produto</a>
    <br>
    <br>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Valor</th>
            <th>Ações</th>
        </tr>
        @foreach($produtos as $produto)
        <tr>
            <td>{{ $produto->id }}</td>
            <td>{{ $produto->nome }}</td>
            <td>{{ $produto->valor }}</td>
            <td>
                <input type="button" name="getDescricao" value="Ver descrição" onclick="getDescricao('{{ route('admin.produtos.descricao', ['id' => $produto->id]) }}')" />
                <a href="{{ route('admin.produtos.edit', ['id' => $produto->id]) }}" class="btn btn-default">Editar</a>
                <a href="{{ route('admin.produtos.destroy', ['id' => $produto->id]) }}" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $produtos->render() !!}

@stop


<script>
    function getDescricao(url) {        
        $.ajax({
            url: url, 
            success: function(result){
                alert(result);
        }});
    }
</script>