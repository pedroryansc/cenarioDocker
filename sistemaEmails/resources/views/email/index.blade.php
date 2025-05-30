<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de E-mails</title>
</head>
<body>
    <h2>Lista de E-mails</h2>
    <hr>
    @if(!$emails->isEmpty())
        <table>
            <thead>
                <th>Remetente</th>
                <th>Destinatário</th>
                <th>Assunto</th>
            </thead>
            <tbody>
                @foreach($emails as $email)
                    <tr>
                        <td>{{ $email->remetente_id }}</td>
                        <td>{{ $email->destinatario_id }}</td>
                        <td>{{ $email->assunto }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nenhum e-mail foi enviado.</p>
    @endif
</body>
</html>
