<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="{{URL::asset('css/style.css')}}"> -->
    <title>My-laravel</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12 top">@include('slayout.sheader')</div>
    </div>
    <div class="row">
        <div class="col-sm-12 menu">@include('slayout.smenu')</div>
    </div>
    <div class="row">
        <div class="col-sm-12 content">@yield('content')</div>
    </div>
    <div class="row">
        <div class="col-sm-12 foot"> @include('slayout.sfooter')</div>
    </div>
</div>
</body>
</html>