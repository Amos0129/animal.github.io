<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>領養規則</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1 class="title"><span style = "color: #66485e;">
            領養規則
        </span></h1>
        <main class="accordion">
            <div class="faq-img">
                <img src="img/faq.svg" alt="" class="accordion-img">
            </div>
            <div class="content-accordion">
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question"><span style="color:midnightblue;font-weight:bold;">
                           領養寵物流程
                        </span></h3>
                        <button class="question-btn">
                            <span class="up-icon">
                                <i class="fas fa-chevron-up"></i>
                            </span>
                            <span class="down-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="answer">
                        <p>1.先註冊我們浪我來養的會員<br>2.填寫相關同意書，等待我們審查過後會與您聯繫<br>3.於約定時間來寵物店挑選領養</p>
                    </div>
                </div>
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question"><span style="color:midnightblue;font-weight:bold;">
                            領養前需要注意什麼?
                        </span></h3>
                        <button class="question-btn">
                            <span class="up-icon">
                                <i class="fas fa-chevron-up"></i>
                            </span>
                            <span class="down-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="answer">
                        <p>1.您的住處可以養寵物嗎? 認養前是否取得家人或房東同意呢?<br>
                            2.您願意承擔照顧毛小孩的一生責任不離不棄即便遇到困難也會想辦法解決一起共患難嗎?<br>
                            3.您是否已滿20歲?<br>
                            4.可否承擔結紮、預防針費用，並在他們生病時給予照顧?<br></p>
                    </div>
                </div>
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question"><span style="color: midnightblue;font-weight:bold;">
                            領養可以隨時終止嗎?
                        </span></h3>
                        <button class="question-btn">
                            <span class="up-icon">
                                <i class="fas fa-chevron-up"></i>
                            </span>
                            <span class="down-icon">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="answer">
                        <p>只要你一通電話，或是經由傳真或e-mail表達終止認養，我們收到後會立即幫你辦理</p>
                    </div>
                </div>
            </div>
        </main>
        <div class="goback">
            <td><a href="index.php">回首頁</a></td>
        </div>
    </div>

    <script >
        const questions = document.querySelectorAll('.question-answer');

questions.forEach(function(question) {
    const btn = question.querySelector('.question-btn');
    btn.addEventListener("click", function() {
        questions.forEach(function(item) {
            if (item !== question) {
                item.classList.remove("show-text");
            }
        })
        question.classList.toggle("show-text");
    })
})
    </script>
</body>
</html>