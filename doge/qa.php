<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q＆A</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1 class="title"><span style = "color: #66485e;">
            領養基本Q&A
        </span></h1>
        <main class="accordion">
            <div class="faq-img">
                <img src="img/faq.svg" alt="" class="accordion-img">
            </div>
            <div class="content-accordion">
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question"><span style="color: midnightblue;font-weight:bold;">
                            領養需要費用嗎？
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
                        <p>認養無需費用，但合格的飼養設備以及相關用品您需自行準備，收容中心有販售全套合格的飼養設備，不知道該如何準備、怕準備錯了花冤枉錢的，可以直接在收容中心購買唷！</p>
                    </div>
                </div>
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question"><span style="color:midnightblue;font-weight:bold;">
                           路邊的流浪貓狗可以撿嗎?
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
                        <p>
                        可以喔!但要先確定牠們是流浪還是<span style = "color:red;">走失</span>，如果是走失可以第一時間送往附近的動物醫院，張貼相關動物資訊到社交軟體上讓更多人看見。
                        </p>
                    </div>
                </div>
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question"><span style="color:midnightblue;font-weight:bold;">
                            我第一次養貓狗，該怎麼辦?
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
                        <p>
                        我們都會有專人指導您，讓第一次養貓狗的飼主不用擔心會養不好，線上諮詢24小時為您服務。另外有「試養專案」初養者可先帶貓狗回家相處一個月後再決定，有興趣者請到現場辦理
                        </p>
                    </div>
                </div>
                <div class="question-answer">
                    <div class="question">
                        <h3 class="title-question"><span style="color:midnightblue;font-weight:bold;">
                            未成年可以領養寵物嗎?
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
                        <p>
                            未滿15歲者，請由監護人代為認養，並且由監護人填寫領養問卷。<br>15歲以上可自行填寫問卷，未滿20歲接鼠時監護人需一同簽同意書。
                        </p>
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