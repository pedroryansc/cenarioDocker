<!DOCTYPE html>
@php $titulo = "Escrever E-mail"; @endphp
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
    <form action="{{ route('email.store') }}" method="POST">
        @csrf
        De: <input type="email" name="remetente" size="30">
        <br><br>
        Para: <input type="email" name="destinatario" size="30">
        <br><br>
        Assunto: <input type="text" name="assunto" size="60">
        <br><br>
        <textarea name="mensagem" rows="15" cols="70"></textarea>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
