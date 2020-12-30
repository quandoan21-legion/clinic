<form action="{{ route('post_picture') }}" enctype="multipart/form-data" method="post">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	picture
		<input type="file" name="picture" accept="image/*" >
		<button>ok</button>
</form>