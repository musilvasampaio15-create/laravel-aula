<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrado</title>
</head>
<body>
    <h1>Bem vindo ao cadastro de Produtos</h1>

    <form action="/productn" method="POST">
    @csrf

    <div>
        <label for="name">Nome do Produto:</label>
        <input type="text" name="name" id="name" placeholder="Ex: Cadeira Gamer" required>
    </div>

    <br>

    <div>
        <label for="price">Preço:</label>
        <input type="number" step="0.01" name="price" id="price" placeholder="Ex: 99.90" required>
    </div>

    <br>

    <button type="submit">Cadastrar</button>
    </form>

    <a href="/productn">Ver Produtos cadastrados</a>
</body>
</html>