<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Online Store')</title>
    <!-- nav -->
    @include("layouts.nav")

    <!-- header -->
    @include("layouts.header")
</head>
<body>



<div class="container my-4">
    @yield('content')
</div>

<!-- footer -->
@include("layouts.footer")

</body>
</html>
