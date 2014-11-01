<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @section('title')
        <title>Бизнес сувениры и корпоративные подарки. Подберём несколько вариантов подарков под ваш бюджет</title>
    @show
    
    @section('stylesheets')
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,700italic,400italic&amp;subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
        {{{ stylesheet_link_tag('provider/provider') }}}
        {{{ stylesheet_link_tag('customer/css/application') }}}
    @show
</head>
<body>
    <div class="container_wrapper">
        @yield('content')
    </div>
    @section('javascripts')
        {{{ javascript_include_tag('provider/provider') }}}
        {{{ javascript_include_tag('customer/js/application') }}}
    @show
</body>
</html>