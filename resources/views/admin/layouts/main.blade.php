<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>main page</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/blog-home.css" rel="stylesheet">
    {{--<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">--}}
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Theme Style -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/welcome.css">

    @yield('styles')
</head>

<body>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-12">
            @yield('content')
        </div>
        <!-- Blog Sidebar Widgets Column -->


    </div>
    <!-- /.row -->
    <hr>

    <!-- Footer -->
    @include('admin.layouts.footer')

</div>
<!-- /.container -->
@include('admin.layouts.footer-script')
@yield('scripts')

</body>

</html>
