<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simplemde.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cropper.min.css') }}">
    <title>Laravel</title>

</head>

<body>
    <div id="app"></div>
    <div class="lock-screen-back" id="lock_screen_back"></div>
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>