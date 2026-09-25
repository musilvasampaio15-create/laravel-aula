<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de pilotos</title>
</head>
<body>
    <h1>Bem vindo ao cadastro de Pilotos</h1>

    <form action="/Piloto" method="POST">
    @csrf

    <div>
        <label for="name">Nome do Piloto:</label>
        <input type="text" name="name" id="name" placeholder="Ex: Nome do piloto" required>
    </div>

    <br>

    <div>
        <label for="runs">Corridas:</label>
        <input type="number" step="0.01" name="runs" id="runs" required>
    </div>

    <br>

    <button type="submit">Cadastrar</button>
    </form>

    <a href="/Piloto">Ver Produtos cadastrados</a>
</body>
</html>