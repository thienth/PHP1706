@extends('layout.massive')
@section('content')
	<style type="text/css" media="screen">
		.like{
			cursor: pointer;
		}
		.like:hover{
			color: red;
		}
	</style>
	<table class="table">
		<thead>
			<tr>
				<th>id</th>
				<th>title</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($posts as $element)
			<tr>
				<td>{{$element->id}}</td>
				<td>{{$element->title}}</td>
				<td>
					<span class="like @if($element->liked) text-danger @endif" post-id={{$element->id}}>
						<i class="fa fa-heart"></i>
					</span>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection
@section('js')
	<script>
		$(document).ready(function(){
            $('.like').on('click', function(){
            	var id = $(this).attr('post-id');
            	var url = '{{ route('clicked-like', ['id'=>'']) }}/' + id;
            	$.ajax({
            		url: url,
            		method: 'get',
            		dataType: 'JSON',
            		success: function(rp){
            			if(rp){
            				$(`[post-id=${id}]`).addClass('text-danger');
            			}else{
            				$(`[post-id=${id}]`).removeClass('text-danger');
            			}
            		}
            	});
            });
		});
	</script>
	
@endsection