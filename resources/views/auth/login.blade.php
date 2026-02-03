<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

    @guest
    <div class="d-flex align-self-center align-items-center vh-100" style=" width:100%;">
        @include("componen.auth.loginCards")
    </div>
    @endguest
</body>
</html>