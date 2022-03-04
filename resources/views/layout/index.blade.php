<html>
    <head></head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/element-ui/2.13.0/theme-chalk/index.css">
    <style>
        @yield('css')
    </style>
    <body>
        @yield('content')
    </body>
    <script src="/plugins/vue.js"></script>
    <script src="/plugins/element.min.js"></script>
    <script src="/plugins/moment.min.js"></script>
    <script type="text/javascript"></script>
    @yield('js')
</html>
