<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<ul>
		@foreach ($cate as $c)
			<li id="{{$c->id}}" onclick="getChild({{$c->id}})">{{$c->name}}</li>
		@endforeach
	</ul>

	<script src="{{ asset('massive/vendor/jquery/jquery-1.10.2.min.js') }}"></script>
	<script>
		function getChild(parentId){

			var url = '{{ route('cate.child') }}';
			var token = '{{csrf_token()}}';
			$.post(	url, 
					{_token: token, parentId: parentId}, 
					function(rp, status){
						console.log(status);
					});
			console.log('chay di');
			// $.ajax({
			// 	url: url,
			// 	method: 'post',
			// 	data: {
			// 		_token: token,
			// 		parentId: parentId
			// 	},
			// 	dataType: 'JSON',
			// 	success: function(rp){
			// 		var content = ``;
			// 		for (var i = 0; i < rp.length; i++) {
			// 			content +=`<li id="${rp[i].id}" onclick="getChild(${rp[i].id})">--${rp[i].name}</li>`;
			// 		}

			// 		$(`#${parentId}`).after(content);
			// 	}
			// });
		}
	</script>
</body>
</html>