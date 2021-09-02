<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Trang chủ</title>
    <base href="{{ asset('') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/customize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tagsinput.css') }}">
</head>
<body>
    @include('layouts.header')
    <!-- content -->
    <div id="content">
        @yield('content')
    </div>
    <!-- footer -->
    @include('layouts.footer')
    <!-- Javascript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/library.js') }}"></script>
    <script src="{{ asset('js/tagsinput.js') }}"></script>
    @yield('script')
</body>

</html> 
