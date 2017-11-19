@extends('layout.metronic')
@section('content')
	
	<div class="search-form">

		<form action="" method="get" id="filterForm">
			<div class="page-size form-group col-xs-1">
				<select id="pageSize" name="pagesize" class="form-control">
					<option value="2">2</option>
					<option value="5">5</option>
					<option value="10">10</option>
				</select>
			</div>
			<div class="form-group col-sm-3">
				<input class="form-control" type="text" name="keyword" value="{{$keyword}}" placeholder="Tìm kiếm...">
				<button class="btn btn-success btn-sm" type="submit">
					<i class="fa fa-search"></i>
				</button>
			</div>
			
		</form>
	</div>

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
				 {{$element->getParentName()}}
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
	<tr>
		<td colspan="5" class="text-center">
			{{$cates->links()}}
		</td>
	</tr>
	</tbody>
	</table>

@endsection
@section('js')
<script type="text/javascript">
	$(document).ready(function(){
		$('#pageSize').on('change', function(){
			// Xử lý url mỗi khi select pagesize đc thay đổi giá trị
			// redirect trang sang url theo giá trị đc thay đổi
			$('#filterForm').submit();
		});
	});
</script>
@endsection