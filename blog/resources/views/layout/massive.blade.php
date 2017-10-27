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
                <div class="container">
                    <div class="row">
                        <div class="post-list">
                            <div class="col-md-4">
                                <div class="post-single">
                                    <ul class="post-cat">
                                        <li><a href="#">interface</a>
                                        </li>
                                        <li><a href="#">standard</a>
                                        </li>
                                    </ul>
                                    <div class="post-img">
                                        <a href="#">
                                            <img src="{{asset('massive/img/post/p4.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-desk">
                                        <h4 class="text-uppercase">
                                            <a href="blog-single.html">ultra modern design</a>
                                        </h4>
                                        <div class="date">
                                            <a href="#" class="author">martin smith</a> july 29, 2015
                                        </div>
                                        <p>
                                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
                                        </p>
                                        <a href="blog-single.html" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="post-single">
                                    <ul class="post-cat">
                                        <li><a href="#">interface</a>
                                        </li>
                                        <li><a href="#">standard</a>
                                        </li>
                                    </ul>
                                    <div class="post-img ">
                                        <!--<a href="#"><img src="{{asset('massive/img/post/p5.jpg')}}" alt=""></a>-->
                                        <div class="full-width ">
                                            <div class="post-slider post-img text-center relative">
                                                <ul class="slides">
                                                    <li>
                                                        <a href="javascript:;" title="Freshness Photo">
                                                            <img src="{{asset('massive/img/post/p5.jpg')}}" alt="">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" title="Awesome Lightbox">
                                                            <img src="{{asset('massive/img/post/p4.jpg')}}" alt="">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" title="Massive UI Components">
                                                            <img src="{{asset('massive/img/post/p6.jpg')}}" alt="">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-desk">
                                        <h4 class="text-uppercase">
                                            <a href="blog-single.html">Gallery post</a>
                                        </h4>
                                        <div class="date">
                                            <a href="#" class="author">martin smith</a> july 29, 2015
                                        </div>
                                        <p>
                                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
                                        </p>
                                        <a href="blog-single.html" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="post-single">
                                    <ul class="post-cat">
                                        <li><a href="#">interface</a>
                                        </li>
                                        <li><a href="#">standard</a>
                                        </li>
                                    </ul>
                                    <div class="post-img">
                                        <div class="audio-fit height-227">
                                            <iframe height="225" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/115637399&amp;auto_play=false&amp;hide_related=true&amp;visual=true"></iframe>
                                        </div>
                                    </div>
                                    <div class="post-desk">
                                        <h4 class="text-uppercase">
                                            <a href="blog-single.html">light weight theme</a>
                                        </h4>
                                        <div class="date">
                                            <a href="#" class="author">martin smith</a> july 29, 2015
                                        </div>
                                        <p>
                                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
                                        </p>
                                        <a href="blog-single.html" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="post-single">
                                    <ul class="post-cat">
                                        <li><a href="#">interface</a>
                                        </li>
                                        <li><a href="#">standard</a>
                                        </li>
                                    </ul>
                                    <div class="post-img">
                                        <a href="#">
                                            <img src="{{asset('massive/img/post/p6.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-desk">
                                        <h4 class="text-uppercase">
                                            <a href="blog-single.html">light weight theme</a>
                                        </h4>
                                        <div class="date">
                                            <a href="#" class="author">martin smith</a> july 29, 2015
                                        </div>
                                        <p>
                                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
                                        </p>
                                        <a href="blog-single.html" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="post-single">
                                    <ul class="post-cat">
                                        <li><a href="#">interface</a>
                                        </li>
                                        <li><a href="#">standard</a>
                                        </li>
                                    </ul>
                                    <div class="post-img">
                                        <div class="post-img title-img">
                                            <img src="{{asset('massive/img/post/p13.jpg')}}" alt="">
                                            <div class="info">We work together for fun</div>
                                        </div>
                                    </div>
                                    <div class="post-desk">
                                        <h4 class="text-uppercase">
                                            <a href="blog-single.html">Easy to customize</a>
                                        </h4>
                                        <div class="date">
                                            <a href="#" class="author">martin smith</a> july 29, 2015
                                        </div>
                                        <p>
                                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
                                        </p>
                                        <a href="blog-single.html" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="post-single">
                                    <ul class="post-cat">
                                        <li><a href="#">interface</a>
                                        </li>
                                        <li><a href="#">standard</a>
                                        </li>
                                    </ul>
                                    <div class="post-img">
                                        <a href="#">
                                            <img src="{{asset('massive/img/post/p4.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-desk">
                                        <h4 class="text-uppercase">
                                            <a href="blog-single.html">Build with BS3 +</a>
                                        </h4>
                                        <div class="date">
                                            <a href="#" class="author">martin smith</a> july 29, 2015
                                        </div>
                                        <p>
                                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
                                        </p>
                                        <a href="blog-single.html" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="post-single">
                                    <ul class="post-cat">
                                        <li><a href="#">interface</a>
                                        </li>
                                        <li><a href="#">standard</a>
                                        </li>
                                    </ul>
                                    <div class="post-img">
                                        <a href="#">
                                            <img src="{{asset('massive/img/post/p5.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-desk">
                                        <h4 class="text-uppercase">
                                            <a href="blog-single.html">Massive UI Collection</a>
                                        </h4>
                                        <div class="date">
                                            <a href="#" class="author">martin smith</a> july 29, 2015
                                        </div>
                                        <p>
                                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
                                        </p>
                                        <a href="blog-single.html" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="post-single">
                                    <ul class="post-cat">
                                        <li><a href="#">interface</a>
                                        </li>
                                        <li><a href="#">standard</a>
                                        </li>
                                    </ul>
                                    <div class="post-img">
                                        <div class="video-fit height-227">
                                            <iframe width="560" height="225" src="http://www.youtube.com/embed/lq_BVyou38s" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="post-desk">
                                        <h4 class="text-uppercase">
                                            <a href="blog-single.html">Video Post</a>
                                        </h4>
                                        <div class="date">
                                            <a href="#" class="author">martin smith</a> july 29, 2015
                                        </div>
                                        <p>
                                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
                                        </p>
                                        <a href="blog-single.html" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="post-single">
                                    <ul class="post-cat">
                                        <li><a href="#">interface</a>
                                        </li>
                                        <li><a href="#">standard</a>
                                        </li>
                                    </ul>
                                    <div class="post-img">
                                        <div class="video-fit height-227">
                                            <iframe src="http://player.vimeo.com/video/62184445" width="500" height="227" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="post-desk">
                                        <h4 class="text-uppercase">
                                            <a href="blog-single.html">VIMEO  Video Post</a>
                                        </h4>
                                        <div class="date">
                                            <a href="#" class="author">martin smith</a> july 29, 2015
                                        </div>
                                        <p>
                                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
                                        </p>
                                        <a href="blog-single.html" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <!--pagination-->
                                <div class="text-center">
                                    <ul class="pagination custom-pagination">
                                        <li><a href="#">Prev</a>
                                        </li>
                                        <li class="active"><a href="#">1</a>
                                        </li>
                                        <li><a href="#">2</a>
                                        </li>
                                        <li><a href="#">3</a>
                                        </li>
                                        <li><a href="#">4</a>
                                        </li>
                                        <li><a href="#">5</a>
                                        </li>
                                        <li><a href="#">Next</a>
                                        </li>
                                    </ul>
                                </div>
                                <!--pagination-->
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!--body content end-->

        @include('sub.client.footer')
    
    </div>
    @include('sub.client.js')
</body>
</html>
