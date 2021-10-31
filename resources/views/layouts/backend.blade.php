<!DOCTYPE html>
<html lang="en">
@include('layouts.includes.head')
<body>
<div id="db-wrapper">
    <!-- navbar vertical -->
    <!-- Sidebar -->
@include('layouts.includes.sidebar')
<!-- Page content -->
    <div id="page-content">
    @include('layouts.includes.navbar')
    <!-- Container fluid -->
        @yield('content')
    </div>
</div>
@yield('scripts')
@include('layouts.includes.scripts')
</body>

</html>
