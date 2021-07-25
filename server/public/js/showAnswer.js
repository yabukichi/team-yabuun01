let answerOpen = document.getElementsByClassName("answer_open");
let answer = document.getElementsByClassName("answer");
for (let i = 0; i < answer.length; i++) {
    answerOpen[i].onclick = function () {
        answer[i].style.display = "block";
        answerOpen[i].style.display = "none";
    };
}
