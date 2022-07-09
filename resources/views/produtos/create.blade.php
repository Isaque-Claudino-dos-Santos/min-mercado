<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Protudos</title>
</head>

<body>
    <header>
        <h1>Registrar Produtos</h1>
    </header>
    <form action={{ route('produtos.store') }} method="POST">
        @csrf
        <label for="marca">Marca</label>
        <input type="text" id="marca" name="marca" class="@error('marca') is-invalid @enderror">

        @error('marca')
            <div>{{ $message }}</div>
        @enderror

        <label for="preco">preço</label>
        <input type="text" id="preco" name="preco" class="@error('preco') is-invalid @enderror">

        @error('preco')
            <div>{{ $message }}</div>
        @enderror

        <select name="tipo" id="tipo" class="@error('tipo') is-invalid @enderror">
            <option value="" hidden selected>Tipo de produto</option>
            <option value="bebida">Bebida</option>
            <option value="grao">Grão</option>
            <option value="tempero">Tempero</option>
        </select>

        @error('tipo')
            <div>{{ $message }}</div>
        @enderror

        <button>Registrar produtos</button>
    </form>
</body>

</html>
