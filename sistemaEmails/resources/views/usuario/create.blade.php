<!DOCTYPE html>
@php $titulo = "Cadastro de Usuário"; @endphp
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
    <form action="{{ route('usuario.store') }}" method="POST">
        @csrf
        Nome: <input type="text" name="name" size="30">
        <br><br>
        Endereço de e-mail: <input type="email" name="email" size="30">
        <br><br>
        Senha: <input type="password" name="password">
        <br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
