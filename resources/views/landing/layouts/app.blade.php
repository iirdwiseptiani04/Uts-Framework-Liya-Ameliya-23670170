<!DOCTYPE html>
<html lang="en">
@include('landing.layouts.partials.head')

<body>
    @include('landing.layouts.partials.header')

    @yield('content')

    @include('landing.layouts.partials.footer')
    @include('landing.layouts.partials.scripts')
    @stack('scripts')
</body>

</html>
