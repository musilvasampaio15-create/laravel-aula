<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
</head>
<body>

    <h1>Lista de Produtos Cadastrados</h1>

    <!-- Exibe a mensagem de sucesso se ela existir -->
    @if(isset($mensagem))
        <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
            {{ $mensagem }}
        </div>
    @endif

    <!-- Link para voltar ao formulário de cadastro -->
    <a href="/productn/create">Cadastrar novo produto</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Data de Cadastro</th>
            </tr>
        </thead>
        <tbody>

            @forelse($products as $product)

                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>R$ {{ number_format($product->price, 2, ',', '.') }}</td>
                    <td>{{ $product->created_at }}</td>
                </tr>

            @empty

                <tr>
                    <td colspan="4" align="center">Nenhum produto cadastrado ainda.</td>
                </tr>

            @endforelse
        </tbody>
    </table>

</body>
</html>