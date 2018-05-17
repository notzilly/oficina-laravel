<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('storeCarros') }}" method="post">
        {{ csrf_field() }}
        Nome:
        <input type="text" name="nome" id="nome">
        Cor:
        <input type="text" name="cor" id="cor">
        Preço:
        <input type="number" name="preco" id="preco">
        <input type="submit">
    </form>
</body>
</html>
