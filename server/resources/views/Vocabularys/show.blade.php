{{-- @section('content') --}}
<h3>タイトル名</h3>
<p>
  単語一覧
</p>
<ol>
	@foreach ($items as $item)		
	<li>
		<div>
			<p>{{$item->question}}</p>
      {{-- クリックすると回答が見られるようにする。 --}}
			<p>{{$item->answer}}</p>
		</div>
	</li>
	@endforeach
</ol>
<a href="{{route('Vocabularys.index')}}">戻る</a>
{{-- @endsection --}}