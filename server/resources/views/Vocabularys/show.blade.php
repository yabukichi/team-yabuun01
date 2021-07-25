{{-- @section('content') --}}
<h3>タイトル名</h3>
<p>
  単語一覧
</p>
<ol>
	@foreach ($items as $item)		
	<li>
		<div>
			<p class="question">{{$item->question}}</p>
      {{-- クリックすると回答が見られるようにする。 --}}
			<div class="answer_secret">
				<p class="answer">{{$item->answer}}</p>
				<p class="answer_open">クリックして回答を見る</p>
			</div>
		</div>
	</li>
	@endforeach
</ol>
<a href="{{route('Vocabularys.index')}}">戻る</a>
{{-- answer_openがクリックされると、answerが表示される。 --}}
<script src="{{ asset('/js/showAnswer.js') }}"></script>
<style>
	.answer {
		display: none;
	}
	.answer_open {
		display: block;
	}
	</style>
{{-- @endsection --}}