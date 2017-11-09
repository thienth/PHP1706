<form action="{{ route('login') }}" method="post">
	{{csrf_field()}}
	@if (session('msg'))
		<div>
			<span style="background: red; color: white;">{{session('msg')}}</span>
		</div>
	@endif
	<div>
		
	</div>
	<div>
		<label for="">Email</label>
		<input type="text" name="email" value="" placeholder="Email">
		@if (count($errors) > 0)
			<span style="color: red">{{$errors->first('email')}}</span>
		@endif
	</div>
	<div>
		<label for="">Password</label>
		<input type="password" name="password" value="" placeholder="password">
		@if (count($errors) > 0)
			<span style="color: red">{{$errors->first('password')}}</span>
		@endif
	</div>
	<div>
		<input id="remember" type="checkbox" name="remember" value="1" >
		<label for="remember">Remember</label>
	</div>
	<div>
		<button type="submit">Login</button>
	</div>
</form>