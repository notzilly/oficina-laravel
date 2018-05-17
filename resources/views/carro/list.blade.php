<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <div>
        @foreach($carros as $carro)
            <ul>
                <li>{{ $carro->nome }}</li>
                <li>{{ $carro->cor }}</li>
                <li>{{ $carro->preco }}</li>
                <li><a href="{{ route('showCarros', ['carro' => $carro->id]) }}">Link</a></li>
            </ul>
        @endforeach
    </div>
</body>
</html>