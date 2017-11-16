@extends('layout.metronic')
@section('content')
	<table class="table table-hover">
	<thead>
	<tr>
		<th>
			 #
		</th>
		<th>
			 Tên danh mục
		</th>
		<th>
			 Danh mục cha
		</th>
		<th class="hidden-480">
			 Hiển thị menu
		</th>
		<th>
			 <a href="{{ route('cate.add') }}" class="btn btn-success">
			 	<i class="fa fa-plus"></i>
			 	Thêm
			 </a>
		</th>
	</tr>
	</thead>
	<tbody>
	@foreach ($cates as $element)
		<tr>
			<td>
				 {{$loop->iteration}}
			</td>
			<td>
				 {{$element->name}}
			</td>
			<td>
				 {{$element->parent_id}}
			</td>
			<td class="hidden-480">
				 
			</td>
			<td>
				<a href="{{ route('cate.edit', ['id' => $element->id]) }}" title="" class="btn btn-sm btn-primary">
					<i class="fa fa-pencil"></i>
				</a>
				<a href="{{ route('cate.remove', ['id' => $element->id]) }}" title="" class="btn btn-sm btn-danger">
					<i class="fa fa-remove"></i>
				</a>
			</td>
		</tr>
	@endforeach
	
	</tbody>
	</table>
@endsection