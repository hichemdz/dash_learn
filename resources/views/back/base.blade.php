<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset("main.css")}}" />
        <link rel="stylesheet" href="{{asset("css/back/app.css")}}" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> 
    </head>
    <body class="">
        <div class="wraper">
            @section('aside')
            @show
            @section('content')
            @show  
        </div>
    <script src='{{asset('js/back/app.js')}}'></script>
    </body>  
</html>
