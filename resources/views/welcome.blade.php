<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{url('css/app.css')}}">

    </head>
    <body>
        <div id="app">
            <productions/>
        </div>

    </body>
    <script src="{{url('js/app.js')}}"></script>
</html>
