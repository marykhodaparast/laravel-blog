<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="memories of a programmer">
    <meta name="author" content="">
    <meta name="Keywords" content="blog,programming,programmer,memories,weblog,blogger">
    <title>A blog memories of a programmer</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/fontiran.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/blog-home.css" rel="stylesheet">

    <!--  Bootstrap-RTL -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/welcome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    @yield('styles')

</head>

<body>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-12 my-content">

            @yield('content')

        </div>

    </div>
    <!-- /.row -->

    <!-- Footer -->

</div>

<!-- /.container -->
@include('web.layouts.footer-script')
@yield('scripts')

</body>

</html>
