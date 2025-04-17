<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        
        <!--sidebar.html -->
        @include('admin.sidebar')

        <!-- Navbar -->
        @include('admin.navbar')

        <!-- Body -->
        @include('admin.body')

    </div>

    <!-- Scripts files -->
    @include('admin.script')

</body>

</html>