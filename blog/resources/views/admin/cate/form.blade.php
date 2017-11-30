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
					<input id="cateName" type="text" class="form-control" placeholder="Tên danh mục" name="name" value="{{old('name', $model->name)}}">
					@if(count($errors) > 0)
						<span class="text-danger">{{$errors->first('name')}}</span>
					@endif
				</div>
			</div>
			<div class="form-group row">
				<label class="col-md-3 control-label">Đường dẫn<span class="text-danger">*</span></label>
				<div class="col-md-9 div-cate-relative">
					<input id="slug" type="text" class="form-control" placeholder="Ví dụ: the-thao" name="slug" value="{{$model->slug}}">
					<button type="button" class="btn btn-sm btn-success btn-asl-form">
						<i class="fa fa-bolt"></i>
					</button>
					@if(count($errors) > 0)
						<span class="text-danger">{{$errors->first('slug')}}</span>
					@endif
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
				<div class="col-md-offset-3">
					
					<img src="@if($model->image == "") 
							{{asset('uploads/default-img.jpg')}} 
						@else 
							{{asset($model->image)}} 
						@endif" id="exampleImage" width="200">

					
				</div>
			</div>
			<div class="form-group row">
				
				<label for="image" class="col-md-3 control-label">Ảnh </label>
				<div class="col-md-9">
					<input type="file" id="image" name="image" accept="image/*">
					@if(count($errors) > 0)
						<span class="text-danger">{{$errors->first('image')}}</span>
					@endif
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
			$('#image').change(function(event){
				var tmppath = URL.createObjectURL(event.target.files[0]);
				$('#exampleImage').attr('src',tmppath);
			});

			$('.btn-asl-form').on('click', function(){
				var cateName = $('#cateName').val();
				cateName = cateName.trim();
				if(cateName == "" || cateName == null){
					return false;
				}

				// gửi request để lấy ra url mới
				$.ajax({
					url: "{{route('getSlug')}}",
					method: 'post',
					data: {
						value : cateName,
						_token: $('#ajaxToken').val()
					},
					dataType: "JSON",
					success: function (rs){
						$('#slug').val(rs.data);
					}
				}); 
			
			});

			// $('#cate-form').validate({
			// 	rules: {
			// 		name: {
			// 			required: true,
			// 			checkExisted: {
			// 				requestUrl : "{{route('cate.checkName')}}", 
			// 				modelId: '{{$model->id}}'
			// 			}
			// 		},
			// 		slug: {
			// 			required: true,
			// 			checkExisted: {
			// 				requestUrl: "{{route('cate.checkSlug')}}", 
			// 				modelId: '{{$model->id}}'
			// 			}
			// 		}
			// 	},
			// 	messages: {
			// 		name:{
			// 			required: 'Vui lòng nhập tên danh mục'
			// 		},
			// 		slug: {
			// 			required: 'Vui lòng nhập đường dẫn',
			// 			checkExisted: 'Đường dẫn đã tồn tại'
			// 		}
			// 	},
			// 	errorPlacement: function(error, element) {
			// 		$(error).addClass('text-danger');
			// 		error.insertAfter(element);
			// 	}

			// });
		});
	</script>


@endsection