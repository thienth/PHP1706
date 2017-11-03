@extends('layout.massive')
@section('content')
<div class="container">
    <div class="row">
        <div class="post-list">
        	@foreach ($posts as $p)
            <div class="col-md-4">
                <div class="post-single">
                    <ul class="post-cat">
                        @php
                            $cate = $p->getCate();    
                        @endphp
                    	@if($cate != null)
                        <li><a href="{{url(App\Category::CATE_URL.$cate->slug)}}">{{$cate->name}}</a>
                        </li>
                        @endif
                    </ul>
                    <div class="post-img">
                        <a href="{{url($p->slug)}}">
                            <img src="{{asset('massive/img/post/p4.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="post-desk">
                        <h4 class="text-uppercase">
                            <a href="{{url($p->slug)}}">{{
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
                        <a href="{{url($p->slug)}}" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                    </div>
                </div>
            </div>
			@endforeach
            <!-- paginate -->
            <div class="col-md-12">
                <!--pagination-->
                <div class="text-center">
                    {{$posts->links()}}
                </div>
                <!--pagination-->
            </div>
			<!-- end paginate -->
        </div>
    </div>
</div>
@endsection