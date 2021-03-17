<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet" />

</head>
<body>
<div class="container-fluid">
    <div class="row">

        <div class="col-3 sidebar">
          @include('admin.sidebar')
        </div>

        <div class="col-9">
        @yield('content')
        </div>

    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
