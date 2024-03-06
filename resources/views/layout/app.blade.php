<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document 2</title>
    
    @yield("header")
</head>
<body>
    <ul>
        <li><a href="{{route('inicio')}}">Página de inicio</a></li>
        <li><a href="{{route('edit')}}">Página de edit</a></li>
        <li><a href="{{route('show')}}">Página de show</a></li>
    </ul>
    <hr>
    @yield("contenido")
</body>
</html>
