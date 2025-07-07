<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.header.header')
</head>
<body>
    
    @include('admin.header.nav')
    
    <div class="container mt-4">
        @yield('dashcontent')
        @yield('genrecontent')
        @yield('moviecontent')
    </div>

    @include('admin.footer.footer')
    
</body>
</html>

