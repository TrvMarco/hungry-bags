<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/back.css')}}">
    <title>{{config('app.name', 'HungryBags')}}</title>
</head>
<body>
    <div class="container backoffice_container">
        @yield('content')
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>