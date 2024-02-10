<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>

        <link rel="stylessheet" href="{{ asset('css/bootstrap.app.css')}}">
        <link rel="stylessheet" href="{{ asset('css/style.css')}}">

        <script src="{{ asset('js/bootstrap.app.js')}}"></script>
        <script src="{{ asset('js/bootstrap.bootstrab.js')}}"></script>

    </head>
    <body>
        header
        <hr />
            @yield("content")
        <hr />
        footer
    </body>
</html>
