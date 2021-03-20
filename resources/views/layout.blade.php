<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : UpRight
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130526

-->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="{{url("")}}/css/bulma.css" rel="stylesheet"/>
    <link href="{{url("")}}/css/app.css" rel="stylesheet"/>
    @yield('head')
</head>
<body>
<div id="header" class="container">
    <div id="logo">
        <h1><a href="#">TaskMate</a></h1>
    </div>
    <div id="menu">
        <ul>
            <li accesskey="1" class="{{Request::is('/') ? 'current_page_item' : ''}}"><a href="{{url("")}}">Главная</a></li>
            <li accesskey="2" class="{{Request::is('tasks') || Request::is('tasks/*') ? 'current_page_item' : ''}}"><a href="{{url("tasks")}}">Планы</a></li>
            <li accesskey="3" class="{{Request::is('counting') ? 'current_page_item' : ''}}"><a href="{{url("counting")}}">Рассчеты</a></li>
            <li accesskey="4" class="{{Request::is('helper') ? 'current_page_item' : ''}}"><a href="{{url("helper")}}">Помощник</a></li>
            <li accesskey="5" class="{{Request::is('constitution') ? 'current_page_item' : ''}}"><a href="{{url("constitution")}}">Конституция</a></li>
        </ul>
    </div>
</div>
@yield('main')
@yield('footer')
    <!-- Copyright -->
<div id="footer" class="container">
    <p>&copy; Untitled. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
<!-- Header -->
{{--<div id="header">--}}
{{--    <div class="container">--}}

{{--        <!-- Logo -->--}}
{{--        <div id="logo">--}}
{{--            <h1><a href="#">TASKMATE</a></h1>--}}
{{--            <span>Life is good!</span>--}}
{{--        </div>--}}

{{--        <!-- Nav -->--}}
{{--        <nav id="nav">--}}
{{--            <ul>--}}
{{--                <li class="{{Request::is('/') ? 'active' : ''}}"><a href="{{url("")}}">Главная</a></li>--}}
{{--                <li class="{{Request::is('task') ? 'active' : ''}}"><a href="{{url("task")}}">Планы</a></li>--}}
{{--                <li class="{{Request::is('counting') ? 'active' : ''}}"><a href="{{url("counting")}}">Рассчеты</a></li>--}}
{{--                <li class="{{Request::is('helper') ? 'active' : ''}}"><a href="{{url("helper")}}">Помощник</a></li>--}}
{{--                <li class="{{Request::is('constitution') ? 'active' : ''}}"><a href="{{url("constitution")}}">Конституция</a></li>--}}
{{--            </ul>--}}
{{--        </nav>--}}
{{--    </div>--}}

{{--    @yield('main')--}}

{{--    @yield('featured')--}}

{{--    <!-- Footer -->--}}
{{--        <div id="footer">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <h2>Footer</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    <!-- Copyright -->--}}
{{--        <div id="copyright">--}}
{{--            <div class="container">--}}
{{--                Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)--}}
{{--            </div>--}}
{{--        </div>--}}


{{--</body>--}}
{{--</html>--}}
