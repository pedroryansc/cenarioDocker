<!DOCTYPE html>
@php $titulo = "Lista de Usuários"; @endphp
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titulo }}</title>
</head>
<body>
    @include("menu")
    <h2>{{ $titulo }}</h2>
    <hr>
    @if(!$usuarios->isEmpty())
        <table border=1>
            <thead>
                <th>Nome</th>
                <th>Endereço de e-mail</th>
                <th></th>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td><a href="{{ route('usuario.show', $usuario->id) }}">Detalhes</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nenhum usuário cadastrado.</p>
    @endif
</body>
</html>
