<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body>
    <div class="d-flex align-self-center align-items-center vh-100" style=" width:100%;">
        @include("componen.auth.registerCards")
    </div>
    </body>
</html>