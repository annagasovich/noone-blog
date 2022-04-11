<!-- resources/views/layouts/app.blade.php -->

<html>
<head>
    <title>App Name - @yield('title')</title>
    <link href="/css/app.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
@section('sidebar')
    @include('partials.navbar')
@show
@if (count($errors) > 0)
    <div class = "alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    @yield('content')
</div>
</body>
<script src="/js/app.js"></script>
</html>
