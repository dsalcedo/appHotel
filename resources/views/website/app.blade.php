<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    @yield('css')
</head>
<body>

@yield('body')

<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
@yield('js')
</body>
</html>