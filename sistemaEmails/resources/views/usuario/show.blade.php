<!DOCTYPE html>
@php $titulo = "Perfil de Usuário"; @endphp
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
    <p><strong>Nome:</strong> {{ $usuario->name }}</p>
    <p><strong>E-mail:</strong> {{ $usuario->email }}</p>
    <br>
    <form action="{{ route('usuario.destroy', $usuario->id) }}" method="POST">
        @csrf
        @method("DELETE")

        <button type="submit">Excluir conta</button>
    </form>
</body>
</html>
