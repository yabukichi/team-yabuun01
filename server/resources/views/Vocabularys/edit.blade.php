{{-- @section('content') --}}
<form action="{{route('Vocabularys.update',['id'=>$notes->id])}}" class="" method="POST">
    @csrf
    <div>
		<h3>タイトル</h3>
		<input type="text" name='title' value="{{$notes->title}}">
	</div>
	<div>
		<p>Q.<input type="text" name='question' value="{{$words->question}}"></p>
		<p>A.<input type="text" name='answer' value="{{$words->answer}}"></p>

	</div>
	<div>
		<p class="create-btn">
			<input type="submit" value="更新する">
		</p>
	</div>
</form>
{{-- @endsection --}}
