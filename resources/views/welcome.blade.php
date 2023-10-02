
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>
<body>
    <div class="p-4">
        @extends('layouts.clients')
        @extends('layouts.base')
        <!-- Para Font Awesome, puedes agregar esto en el head de tu plantilla -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <h1>Ingrese nuevo usuario a la db</h1>
    </div>
    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>
