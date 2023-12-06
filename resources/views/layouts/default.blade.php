<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    @include('includes.head')
</head>

<body>
    <header>
        @include('includes.header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('includes.footer')
    </footer>
</body>

</html>
