<!doctype html>
<html lang="en">
@include('layouts.back.user.head')
<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
<!--begin::App Wrapper-->
<div class="app-wrapper">
    @include('layouts.back.user.header')
    @include('layouts.back.user.sidebar')
    @yield('content')
    @include('layouts.back.user.footer')
</div>
<!--end::App Wrapper-->
@include('layouts.back.user.scripts')
</body>
<!--end::Body-->
</html>
