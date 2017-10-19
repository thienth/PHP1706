@extends('layout.client')
@section('content')
    @foreach ($listPost as $post)
        <div class="post @if($post['id']%2 == 1) border-red @endif">
            <h2> {{$loop->index}} - {{$post['title']}}</h2>
            <img src="{{$post['image']}}" width="400">
            <p>{!!$post['content']!!}</p>
        </div>
    @endforeach
@endsection
