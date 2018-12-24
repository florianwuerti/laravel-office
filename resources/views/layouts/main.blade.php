<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials._head')
</head>

<body class="@yield('pageClass', '')">

@if(Route::current()->getName() !== null && Route::current()->getName() !== 'login' && Route::current()->getName() !== 'password/reset' && Route::current()->getName() !== 'register')
    @include('partials._nav')
@endif

<main class="app">
    <div class="page-content">
        @yield('content')
    </div>
</main>

</body>

</html>