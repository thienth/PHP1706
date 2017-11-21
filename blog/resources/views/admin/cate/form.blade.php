@extends('layout.metronic')
@section('content')
	<div>
		<h3>Thêm danh mục</h3>
	</div>
	<form id="cate-form" action="{{ route('cate.save') }}" method="post" enctype="multipart/form-data" novalidate>
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{$model->id}}">
		<div class="col-md-6">
			<div class="form-group row">
				<label class="col-md-3 control-label">Tên <span class="text-danger">*</span></label>
				<div class="col-md-9">
					<input type="text" class="form-control" placeholder="Tên danh mục" name="name" value="{{$model->name}}">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-md-3 control-label">Đường dẫn<span class="text-danger">*</span></label>
				<div class="col-md-9">
					<input type="text" class="form-control" placeholder="Ví dụ: the-thao" name="slug" value="{{$model->slug}}">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-md-3 control-label">Danh mục cha</label>
				<div class="col-md-9">
					<select name="parent_id" class="form-control">
						<option value="-1">-----------------</option>
						@foreach ($cates as $element)
							<option 
							@if($model->parent_id == $element->id) selected @endif
							value="{{$element->id}}">{{$element->name}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-md-3 control-label"></label>
				<div class="col-md-7">
					<input 
					@if($model->is_menu == 1) checked @endif
					id="isMenu" type="checkbox" name="is_menu" value="1">
					<label for="isMenu">Hiển thị trang chủ</label>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group row">
				<label for="image" class="col-md-3 control-label">Ảnh </label>
				<div class="col-md-9">
					<input type="file" id="image" name="image" accept="image/*">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-md-3 control-label">Mô tả </label>
				<div class="col-md-9">
					<textarea name="desc" id="editor">{{$model->desc}}</textarea>
				</div>
			</div>
		</div>
		<div class="text-center">
			<a href="{{ route('cate.index') }}" class="btn btn-danger">Huỷ</a>
			<button type="submit" class="btn btn-success">Lưu</button>
		</div>
	</form>
	<input type="hidden" id="ajaxToken" value="{{csrf_token()}}">
@endsection

@section('js')
	<script type="text/javascript">
		$(document).ready(function(){
			$('#cate-form').validate({
				rules: {
					name: {
						required: true,
						checkExisted: "{{route('cate.checkName')}}"
					},
					slug: 'required'
				},
				messages: {
					name:{
						required: 'Vui lòng nhập tên danh mục'
					},
					slug: {
						required: 'Vui lòng nhập đường dẫn'
					}
				},
				errorPlacement: function(error, element) {
					$(error).addClass('text-danger');
					error.insertAfter(element);
				}

			});
		});
	</script>


@endsection