{{-- @section('content') --}}
<form action="{{route('Vocabularys.add')}}" method="POST">
	@csrf
	<div>
		<h3>タイトル</h3>
		<input type="text" name='title'>
	</div>
	<div>
		<p>Q.<input type="text" name='question'></p>
		<p>A.<input type="text" name='answer'></p>
		<a href="">削除</a>
	</div>
	<div>
		<p>
			<a href="">追加</a>
		</p>
		<p class="create-btn">
			<input type="submit" value="登録">
		</p>
	</div>
</form>
{{-- @endsection --}}