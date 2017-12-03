<form action="{{ route('auth.reset-pwd') }}" method="post">
	{{csrf_field()}}
	<input type="hidden" name="token" value="{{$token}}">
	<div>
		New password:
	    <input type="password" name="password" value="" placeholder="Password">
	</div>
	<div>
		Confirm password:
	    <input type="password" name="cfpassword" value="" placeholder="Confirm Password">
	</div>
	<div>
		<button type="submit">Submit</button>
	</div>
</form>