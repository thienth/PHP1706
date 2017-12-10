<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from massive.markup.themebucket.net/mp-index-blog-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2017 04:49:49 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="{{asset('massive/img/favicon.png')}}">

    <title>Blog Home 2</title>
    {{-- Css include --}}
    @include('sub.client.css')
</head>

<body>

    <!--  preloader start -->
    <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div>
    <!-- preloader end -->


    <div class="wrapper">

        {{-- include header --}}
        @include('sub.client.header')

        <!--page title start-->
        <section class="page-title parallax-title ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-uppercase">Massive Blog Post</h4>
                        <span>Latest Awesome post</span>
                    </div>
                </div>
            </div>
        </section>
        <!--page title end-->

        <!--body content start-->
        <section class="body-content ">

            <div class="page-content">
                @yield('content')
            </div>


        </section>
        <!--body content end-->

        @include('sub.client.footer')
    
    </div>
    @include('sub.client.js')
    @yield('js')
</body>
</html>
