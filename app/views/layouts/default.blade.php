<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @section('title')
        <title>Laravel PHP Framework</title>
    @stop
    
    @section('stylesheets')
        {{-- expr --}}
    @stop
</head>
<body>
    <div class="container">
        @yield('content');
    </div>
    @section('javascripts')
        {{-- expr --}}
    @stop
</body>
</html>