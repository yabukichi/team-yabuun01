{{-- @section('content') --}}
<h3>タイトル名</h3>
<p>
  単語一覧
</p>
<ul>
	{{-- @foreach ($collection as $item)		 --}}
	<li>
		<div>
			<p>問題</p>
      {{-- クリックすると回答が見られるようにする。 --}}
			<p>回答</p>
		</div>
	</li>
	{{-- @endforeach --}}
</ul>
<a href="{{route('Vocabularys.index')}}">戻る</a>
{{-- @endsection --}}