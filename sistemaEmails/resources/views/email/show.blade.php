<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-mail "{{ $email->assunto }}"</title>
</head>
<body>
    @include("menu")
    <h2>{{ $email->assunto }}</h2>
    <hr>
    <span><strong>{{ $email->remetente->name }}</strong></span><br>
    <span>para {{ $email->destinatario->name }}</span>
    <p>{{ $email->mensagem }}</p>
    <br>
    <form action="{{ route('email.destroy', $email->id) }}" method="POST">
        @csrf
        @method("DELETE")

        <button type="submit">Apagar e-mail</button>
    </form>
</body>
</html>
