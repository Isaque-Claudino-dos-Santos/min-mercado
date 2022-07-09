<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>

<body>
    <header>
        <h1>Produtos</h1>
        <nav>
            <ul>
                <li><a href={{ route('produtos.create') }}>Registrar produto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Preço</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto['id'] }}</td>
                        <td>{{ $produto['marca'] }}</td>
                        <td>{{ $produto['preco'] }}</td>
                        <td>{{ $produto['tipo'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>

</html>
