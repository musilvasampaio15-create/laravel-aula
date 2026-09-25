<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Pilotos</title>
</head>
<body>

    <h1>Lista de Pilotos cadastrados</h1>

    <!-- Exibe a mensagem de sucesso se ela existir -->
    @if(isset($mensagem))
        <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
            {{ $mensagem }}
        </div>
    @endif

    <!-- Link para voltar ao formulário de cadastro -->
    <a href="/Piloto/create">Cadastrar novo piloto</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Corridas</th>
                <th>Data de Cadastro</th>
            </tr>
        </thead>
        <tbody>

            @forelse($pilotos as $piloto)

                <tr>
                    <td>{{ $piloto->id }}</td>
                    <td>{{ $piloto->name }}</td>
                    <td>{{ $piloto->runs}}</td>
                    <td>{{ $piloto->created_at }}</td>
                    <td>
                        <a href="/Piloto/edit/{{ $piloto->id }}">Editar</a>
                        <a href="/Piloto/delete/{{ $piloto->id }}">Delete</a>
                    </td>
                </tr>

            @empty

                <tr>
                    <td colspan="4" align="center">Nenhum piloto cadastrado ainda.</td>
                </tr>

            @endforelse
        </tbody>
    </table>

</body>
</html>