<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@extends('layouts.metadata')

<body>

    <div id="app">

        <!-- Navbar -->
        @extends('layouts.navbar')

        
        
        <main class="py-4">
            @yield('content')
        </main>

    </div>
</body>

</html>
