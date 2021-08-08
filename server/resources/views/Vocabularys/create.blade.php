<head>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="jquery.min.js" type="text/javascript"></script>
</head>
<form action="{{route('Vocabularys.add')}}" method="POST">
	@csrf
	<div>
		<h3>タイトル</h3>
		<input type="text" name='title'>
	</div>
	
	<ul id="list-item">
		<li>
			<p>Q.<input type="text" name='question[]'></p>
			<p>A.<input type="text" name='answer[]'></p>
			<p class="delete-btn">削除</p>
		</li>
	</ul>
	{{-- <script src="{{ mix('js/add.js') }}"></script> --}}
		<p class="create-btn">
			<p class='add-btn'>追加</p>
			<input type="submit" value="登録">
		</p>
	</div>
</form>
<script>
	jQuery(document).ready(function(){
 		//jQueryで実行する内容
		$(document).on("click", ".delete-btn", function() {
			$(this).closest('li').remove();
		});

		$(".add-btn").on("click", function(){
			$("<li><p>Q.<input type='text' name='question[]'></p><p>A.<input type='text' name='answer[]'></p><p class='delete-btn'>削除</p></li>").appendTo("ul");
		});
	});
</script>
<div>
{{-- @endsection --}}