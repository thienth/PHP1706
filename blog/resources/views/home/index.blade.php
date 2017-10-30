@extends('layout.massive')
@section('content')
<div class="container">
    <div class="row">
        <div class="post-list">
        	@foreach ($posts as $p)
            <div class="col-md-4">
                <div class="post-single">
                    <ul class="post-cat">
                    	@if($p->getCate() != null)
                        <li><a href="#">{{$p->getCate()->name}}</a>
                        </li>
                        @endif
                    </ul>
                    <div class="post-img">
                        <a href="#">
                            <img src="{{asset('massive/img/post/p4.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="post-desk">
                        <h4 class="text-uppercase">
                            <a href="blog-single.html">{{
                            	str_limit($p->title, 40, ' ...')
                            }}</a>
                        </h4>
                        <div class="date">
                            <a href="#" class="author">{{$p->author}}</a> july 29, 2015
                        </div>
                        <p>
                        	{!! 
                        		str_limit($p->short_desc, 110, ' ...')
                        	!!}
                        </p>
                        <a href="blog-single.html" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                    </div>
                </div>
            </div>
			@endforeach
            <!-- paginate -->
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
			<!-- end paginate -->
        </div>
    </div>
</div>
@endsection