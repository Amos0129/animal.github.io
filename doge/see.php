<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>發現浪貓の處理辦法</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1 class="title"><span style = "color: #66485e;">
            發現浪貓の處理辦法
        </span></h1>
        <main class="accordion">
            <div class="faq-img">
                <img src="img/faq.svg" alt="" class="accordion-img">
            </div>
            <div class="content-accordion">
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question"><span style="color: midnightblue;font-weight:bold;">
                           社群軟體
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
                        <p>現在時代發達，有許多人在發現流浪貓狗的時候會將他們的照片及資訊放在facebook，instagram，ttwitter等社交軟體分享給大家看</p>
                    </div>
                </div>
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question"><span style="color:midnightblue;font-weight:bold;">
                            通報1999市民專線
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
                        <p>動保處表示，許多流浪犬貓其實都是被主人不當棄養，高雄市基於尊重生命的態度， 依街道犬貓遺體處理作業流程妥善處理流浪犬貓遺體，民眾只要在街頭發現犬貓曝屍，即可通報1999市民專線，由環保局清潔到場處理。</p>
                    </div>
                </div>
                <h2><span style="color: brown;text-align: center;">第一時間看到動物受困需要幫助的時候，建議馬上打給動物保護專線，然後在能力可行的範圍內將動物送往<br>附近的寵物醫院才可以在第一時間救助到牠們喔!!</span></h2>
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