<!doctype html>
<html lang="en">

@include('admin.includes.header')
<body>

    <header>
@include('admin.includes.adminProfile')
@include('admin.includes.NAVbar')
    </header>

<div class="container my-5">
<div class="mx-2">
    @yield('content')


@include('admin.includes.JSlib')
</body>
</html>
