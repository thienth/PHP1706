@extends('layout.metronic')
@section('content')
	<form action="{{ route('cate.add') }}" method="post" enctype="multipart/form-data" novalidate>
		<div class="form-group">
			<label class="col-md-3 control-label">Tên danh mục <span class="text-danger">*</span></label>
			<div class="col-md-9">
				<input type="text" class="form-control" placeholder="Tên danh mục" name="name">
			</div>
		</div>
	</form>
@endsection