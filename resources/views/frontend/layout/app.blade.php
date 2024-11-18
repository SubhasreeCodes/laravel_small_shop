<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title', 'Default Title')
    </title>
</head>
<body>
    <!-- Include the Header Partial -->
     @include('frontend.layout.header')

    <!-- Include the Topbar Partial -->
     @include('frontend.layout.topbar')

     @yield('content')

    <!-- Include the Footer Partial -->
     @include('frontend.layout.footer')
    
</body>
</html>