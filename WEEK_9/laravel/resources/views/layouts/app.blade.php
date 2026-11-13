<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIG.Co')</title>
    <link rel="stylesheet" href="{{ asset('Asset/UI/header.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/UI/tabelInput.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/UI/formInput.css') }}">
</head>
<body>
    <div class="main">
        @include('layouts.header')
        
        <main>
            @if (session('success'))
                <div class="alert-succes">{{ session('success') }}</div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>