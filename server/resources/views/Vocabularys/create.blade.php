{{-- @section('content') --}}
<form action="{{route('Vocabularys.add')}}" method="POST">
	@csrf
	<div>
		<h3>タイトル</h3>
		<input type="text" name='title'>
	</div>
	
	<ul id="a">
		<li>
			<p>Q.<input type="text" name='question[]'></p>
			<p>A.<input type="text" name='answer[]'></p>
			<a href="">削除</a>
		</li>
	</ul>
		<p>
			<a class='add-btn' href="">追加</a>
		</p>
		{{-- <script src="{{ mix('js/add.js') }}"></script> --}}
		<script>

  function addElement() {
    // 要素を作成する
    var elLi = document.createElement("li");
    var elP1 = document.createElement("p");
    var elP2 = document.createElement("p");
    var elInput = document.createElement("input");
    // idx++;
    // // 要素にクリックイベントを追加する
    // element.onclick = function() {
    //   element.innerText += " クリックされました!";
    // };

    // 要素を追加する「親要素」を指定する。
    var parent = document.getElementById("a");
    // 要素を追加する
    parent.appendChild(elLi);
    elLi.appendChild(elP1);
    elLi.appendChild(elP2);
    elP1.appendChild(elInput);
    elP2.appendChild(elInput);

		// elP1.innerText = "Q";
		// elP2.innerText = "A";
    // 次の要素を改行して追加するために br 要素を追加する
    // parent.appendChild(document.createElement("br"));
  } 
			console.log("hoge");
		</script>
		<p class="create-btn">
			<input type="submit" value="登録">
		</p>
	</div>
</form>

<div id="parent">
	<button onclick="addElement()">要素を追加</button><br>
</div>
<div>
{{-- @endsection --}}