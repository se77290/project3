<!DOCTYPE html>
<html>
<head>
    <title> Master95</title>
    <style>
        </style>
</head>
<body>
    <header>
        @include('layout.header')
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('layouts.sidebar')
            </div>
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>
