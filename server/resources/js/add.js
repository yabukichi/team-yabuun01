$(function () {
    $(".add-btn").click(function () {
        $(".list-item li").after(
            "<li>",
            "<p>Q.<input type='text' name='question[]'></p>",
            "<p>A.<input type='text' name='answer[]'></p>",
            "<a href=''>削除</a>",
            "</li>"
        );
    });
});
