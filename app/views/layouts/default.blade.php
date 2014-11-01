<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @section('title')
        <title>Laravel PHP Framework</title>
    @show
    
    @section('stylesheets')
        {{-- expr --}}
    @show
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    @section('javascripts')
        {{-- expr --}}
    @show
</body>
</html>