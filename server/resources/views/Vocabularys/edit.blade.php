{{-- @section('content') --}}
<form action="{{route('Vocabularys.update',['id'=>$notes->id])}}" class="" method="POST">
    @csrf
    <div>
		<h3>タイトル</h3>
		<input type="text" name='title' value="{{$notes->title}}">
	</div>
	<div>
		@foreach($words as $word)
		<p>ID : {{ $word->id }}</p>
		<p>Q.<input type="text" name='question{{$word->id}}' value="{{$word->question}}"></p>
		<p>A.<input type="text" name='answer{{$word->id}}' value="{{$word->answer}}"></p>
		@endforeach
	</div>
	<div>
		<p class="create-btn">
			<input type="submit" value="更新する">
		</p>
	</div>
</form>
{{-- @endsection --}}
