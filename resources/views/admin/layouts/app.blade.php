<!doctype html>
<html lang="en" data-bs-theme="blue-theme">
@include('admin.layouts.partials.head')

<body>
    @unless ($__env->hasSection('no_menu'))
        @include('admin.layouts.partials.header')
        @include('admin.layouts.partials.sidebar')
    @endunless

    <main class="page-content">
        @yield('content')
    </main>

    @unless ($__env->hasSection('no_menu'))
        @include('admin.layouts.partials.footer')
    @endunless

    @include('admin.layouts.partials.scripts')
    @stack('scripts')
</body>

</html>
