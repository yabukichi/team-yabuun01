<p>
	<a href="">新規追加</a>
</p>

<ul>
	@foreach ($notes as $note)

	<li>
		<h2>{{$note->title}}</h2>
		<div>
			<p><a href="{{route('Vocabularys.show',['id'=>$note->id])}}" >一覧</a></p>
			<p><a href="{{route('Vocabularys.edit',['id'=>$note->id])}}">編集</a></p>
		</div>
	</li>
	@endforeach
</ul>
