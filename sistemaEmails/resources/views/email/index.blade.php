<!DOCTYPE html>
@php $titulo = "Lista de E-mails"; @endphp
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
    @if(!$emails->isEmpty())
        <table border=1>
            <thead>
                <th>Remetente</th>
                <th>Destinatário</th>
                <th>Assunto</th>
            </thead>
            <tbody>
                @foreach($emails as $email)
                    <tr>
                        <td>{{ $email->remetente->email }}</td>
                        <td>{{ $email->destinatario->email }}</td>
                        <td>{{ $email->assunto }}</td>
                        <td><a href="{{ route('email.show', $email->id) }}">Abrir</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nenhum e-mail enviado.</p>
    @endif
</body>
</html>
