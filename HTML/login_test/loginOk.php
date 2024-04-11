<?php
session_start ();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="page-enter" content="blendTrans(duration=0.1)">
    <meta http-equiv="page-exit" content="blendTrans(duration=0.1)">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KJS-LOGINPAGE</title>
    <link rel="stylesheet" href="css/kjs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="Website Icon" type="png" href="../photo/naver.png">
    <link rel="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="../js/index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>
<body>
    <div class="container">
        <!--상단-->
        <div class="header">
            <div class = "header-top">
                <form class="search-container " id="searchForm" onsubmit="submitForm(event)">
                    <input type="text" class="search-input sparkle-input" id="search-input" autocomplete="off" onclick="showPlaceholder()" onblur="hidePlaceholder()">
                    <button type="submit" class="search-button">
                        <i class="fas fa-search fa-2x"></i> 
                    </button> 
                </form>
            </div>
            <div class="header-footer">
                <div class="icon-container">
                    <a href="https://www.google.co.kr/?hl=ko"> 
                        <img class= "iconBox" src="../photo/Goggle.png" style="display:block;"> <span>구글</span>
                    </a>
                    <a href="https://www.youtube.com/">
                        <img class= "iconBox" src="../photo/youtube.png" style="display:block;"> <span>유튜브</span>
                    </a>
                    <a href="https://www.instagram.com/">
                        <img class= "iconBox" src="../photo/instagram.png" style="display:blcok;">  <span style="margin-top: -3px;">인스타</span>
                    </a>
                    <a href="https://naver.com">
                        <img class= "iconBox" src="../photo/naver.png" style="display:blcok;"> <span style="margin-top: -3px;">네이버</span>                
                    </a>
                    <a href="https://www.op.gg/">
                        <img class= "iconBox" src="../photo/OPGG.png" style="display:blcok;"> <span style="margin-top: -3px;">롤전적</span> 
                    </a>
                    <a href="https://comic.naver.com/index">
                    <img class= "iconBox" src="../photo/webtoon.png" style="display:blcok;"> <span>웹툰</span> 
                    </a>
                    <a href="https://kjs.gumeho.i234.me/leesky">
                        <img class= "iconBox" src="../leesky/asset/icon.png" style="display:blcok;"> <span style="margin-top: -3px;">이하늘</span> 
                    </a>
                    <a href="../html/meurbo.html">
                        <img class= "iconBox" src="../photo/UnKnown.png" style="display:blcok;"> <span>미정</span> 
                    </a>
                    <a href="../html/meurbo.html">
                        <img class= "iconBox" src="../photo/UnKnown.png" style="display:blcok;"> <span>미정</span> 
                    </a>       
                </div>
            </div>
        </div>
        
        <!--중앙-->
        <div class="content">
            <!--왼쪽-->
            <div class="left">
                <a href="https://xe.gumeho.i234.me/">
                    <img class="left-Ad" src="../photo/s1.png" style="display: block;">
                </a>
                <a href="https://dsm.gumeho.i234.me:5001/#/signin">
                    <img class="left-Ad" src="../photo/s2.png" style="display: none;">
                </a>
                <a href="https://z.gumeho.i234.me/">
                    <img class="left-Ad" src="../photo/univers.png" style="display: none;">
                </a>
                <!-- 왼쪽 광고 -->
                <div class="left-benner">
                    <div class="news-stand ">
                        <h1 class="stand">뉴스 스탠드</h1>
                    </div>
                    <div class="go-news">
                        <div style=" width:100%; height:50%;">
                            <div class="news">
                                <a href="https://newsstand.naver.com/?list&pcode=052">
                                    <img src="https://s.pstatic.net/static/newsstand/2020/logo/light/0604/052.png">
                                </a>
                            </div>      
                            <div class="news">
                                <a href="https://newsstand.naver.com/?list&pcode=029">
                                    <img src="https://s.pstatic.net/static/newsstand/2020/logo/light/0604/029.png">
                                </a>
                            </div>
                        
                            <div class="news">
                                <a href="https://newsstand.naver.com/?list&pcode=002">
                                    <img src="https://s.pstatic.net/static/newsstand/2020/logo/light/0604/002.png">
                                </a>
                            </div>
                            <div class="news">
                                <a href="https://newsstand.naver.com/?list&pcode=038">
                                    <img src="https://s.pstatic.net/static/newsstand/2020/logo/light/0604/038.png">
                                </a>
                            </div>
                        </div>
                        <div style=" width:100%; height:50%;">
                            <div class="news">
                                <a href="https://newsstand.naver.com/?list&pcode=214">
                                    <img src="https://s.pstatic.net/static/newsstand/2020/logo/light/0604/214.png">
                                </a>
                            </div>
                            <div class="news">
                                <a href="https://newsstand.naver.com/?list&pcode=055">
                                    <img src="https://s.pstatic.net/static/newsstand/2020/logo/light/0604/055.png">
                                </a>
                            </div>
                            <div class="news">
                                <a href="https://newsstand.naver.com/?list&pcode=081">
                                    <img src="https://s.pstatic.net/static/newsstand/up/2022/0208/nsd16121208.png">
                                </a>
                            </div>
                            <div class="news">
                                <a href="https://newsstand.naver.com/?list&pcode=073">
                                    <img src="https://s.pstatic.net/static/newsstand/up/2020/0708/nsd94830278.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shopping" onclick="stopAnimation_top()">
                    <img src="https://camo.githubusercontent.com/a0d58634789b846466557b4c210c1638560a4bd4457161899e026ce7345bb288/687474703a2f2f32352e6d656469612e74756d626c722e636f6d2f63393961353739646233616530666331363462663463636131343838383564332f74756d626c725f6d6a6776386b45754d67317338376e37396f315f3430302e676966"  style="animation-play-state: running;" alt="">
                </div>
                
                <div class="recommend"onclick="stopAnimation_bot()">
                    <img src="https://camo.githubusercontent.com/a0d58634789b846466557b4c210c1638560a4bd4457161899e026ce7345bb288/687474703a2f2f32352e6d656469612e74756d626c722e636f6d2f63393961353739646233616530666331363462663463636131343838383564332f74756d626c725f6d6a6776386b45754d67317338376e37396f315f3430302e676966"  style="animation-play-state: running;" alt="">
                </div>
                
            </div>
            <!--오른쪽-->
            <div class="right">
                <div class="right-benner">
                    <form method="post">
                        <div class="login-ok">
                        <p><?php 
                        echo $_SESSION['name'];?>님</p>
                        <?php
                        echo $_SESSION['email'];?> 
                        <p style="cursor: pointer;" onclick="logout()"><br>로그아웃</p>
                    </div>
                    </form>
                    <div>
                        <a href="https://blog.naver.com/ansocto" >
                            <img class="right-ad" src="../photo/a1.jpg" style="display: block;">
                        </a>
                        <a href="https://blog.naver.com/ansocto">
                            <img class="right-ad" src="../photo/a2.jpg" style="display: none;" >
                        </a>
                        <a href="https://blog.naver.com/ansocto">
                            <img class="right-ad" src="../photo/a3.jpg" style="display: none;" >
                        </a>
                        <a href="https://blog.naver.com/ansocto">
                            <img class="right-ad" src="../photo/a4.jpg" style="display: none;" >
                        </a>
                    </div>
                    <div id="weather-container" class="weather-container">
                    </div>
                    <div class="chat_page">
                        <div class="chat">
                            <h3>LeeSky와 소통</h3>
                            <div class="messages" id="messages">
                            </div>
                            <div class="input-container">
                                <input type="text" class="message-input" id="messageInput" onkeydown="handleKeyDown(event)">
                                <button class="send-button" id="sendButton" onclick="sendMessage()">전송</button>
                            </div>
                            <script>
                                let socket = new WebSocket("wss://xe.gumeho.i234.me:5377");
                                let visitorCount = 0;
                                const visitorCountElement = document.getElementById("visitorCount");

                                // process when message is received
                                socket.onmessage = function(event) {
                                    const messageBlob = event.data;

                                    const reader = new FileReader();

                                    reader.onload = function() {
                                        const messageText = reader.result;
                                        const message = JSON.parse(messageText);

                                        // Add the received message to the message area
                                        const messagesDiv = document.getElementById("messages");
                                        const newMessageDiv = document.createElement("div");
                                        const formattedMessage = `${message.email}(${message.name}) [${message.time}]: ${message.message}`;
                                        newMessageDiv.textContent = formattedMessage;

                                        messagesDiv.appendChild(newMessageDiv);
                                        messagesDiv.scrollTop = messagesDiv.scrollHeight; // 메시지 영역 맨 아래로 스크롤
                                    };

                                    reader.readAsText(messageBlob);
                                };

                                // message sending function
                                function sendMessage() {
                                    const messageInput = document.getElementById("messageInput");
                                    const message = messageInput.value.trim(); // 입력된 메시지의 양쪽 공백 제거
                                    const time = getCurrentTime();
                                    const email = "<?php echo $_SESSION['email']; ?>";
                                    const name = "<?php echo $_SESSION['name']; ?>";
                                    const level = "<?php echo $_SESSION['level']; ?>";

                                    if (message !== "") { // 입력된 메시지가 비어 있지 않은 경우에만 메시지를 보냅니다.
                                    const jsonMessage = {
                                        time: time,
                                        name: name,
                                        email: email,
                                        level: level,
                                        message: message
                                    };

                                const messageText = JSON.stringify(jsonMessage);
                                socket.send(messageText);
                                messageInput.value = "";
                                messageInput.focus(); // 입력 필드에 다시 포커스 설정
                                }
                            }

                            

                                // 현재 시간을 HH:mm 형식으로 반환하는 함수
                                function getCurrentTime() {
                                    const now = new Date();
                                    const hours = now.getHours().toString().padStart(2, "0");
                                    const minutes = now.getMinutes().toString().padStart(2, "0");
                                    return `${hours}:${minutes}`;
                                }

                                // Enter 키 입력 처리
                                function handleKeyDown(event) {
                                    if (event.keyCode === 13) {
                                        event.preventDefault(); // 입력 필드에서 줄바꿈 방지
                                        sendMessage(); // Enter 키를 누를 때 sendMessage 함수 호출
                                    }
                                }
                            </script>
                        </div>
                    </div>
                </div>
                </div>
            </div>       
        </div>
    </div>    
        <!--하단-->
    <div class="footer">
        <div class="notice_area_1">

        </div>
        <div class="notice_area_2">
            
        </div>

        <div class="notice_area_3">
            <div class="notice_box">
            <h4> Address 
                <div style="margin-top:8px"> 서울시 관악구 조원로 13길 5</div>
            </h4>
            </div>
            <div class="notice_box">
            <h4> Email
                <br>
                <a href="mailto:wlstjr2011@naver.com">
                <div> wlstjr2011@naver.com</div>
                </a>
            </h4>
            </div>
            <div class="notice_box" style="border:0;">
            <h4> Phone
                <br>
                <a href="tel:010-4903-3073">
                <div> 010-4903-3073</div>
                </a>
            </h4>
            </div>
        </div>
    </div>
        <!--                                   스크립트                                                -->
    <script>
    window.onload = function() {
        fetchWeather(); // 첫 번째 함수 호출
        setInterval(fetchWeather, 60 * 60 * 1000); // 두 번째 함수 호출 (일정 시간마다 갱신)
        setInterval(changeLeftImage, 5000); // 이미지 이동 함수 호출 (5초마다 왼쪽 이미지 변경)
        setInterval(changeRightImage, 4000); // 이미지 이동 함수 호출 (4초마다 오른쪽 이미지 변경)
    };

    // API 호출 및 데이터 처리
    function fetchWeather() {
        var apiKey = 'b87f58f6619260bcecace6dda1989d4e'; // OpenWeatherMap API 키
        var city = 'Seoul'; // 날씨를 가져올 도시 이름
        var url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}`;
        
        $.getJSON(url, function(data) {
            // 날씨 데이터 처리
            var w_id_arr = [201,200,202,210,211,212,221,230,231,232,300,301,302,310,311,312,313,314,321,500,501,502,503,504,511,520,521,522,531,600,601,602,611,612,615,616,620,621,622,701,711,721,731,741,751,761,762,771,781,800,801,802,803,804,900,901,902,903,904,905,906,951,952,953,954,955,956,957,958,959,960,961,962];
            var w_kor_arr = ["가벼운 비를 동반한 천둥구름","비를 동반한 천둥구름","폭우를 동반한 천둥구름","약한 천둥구름","천둥구름","강한 천둥구름","불규칙적 천둥구름","약한 연무를 동반한 천둥구름","연무를 동반한 천둥구름","강한 안개비를 동반한 천둥구름","가벼운 안개비","안개비","강한 안개비","가벼운 적은비","적은비","강한 적은비","소나기와 안개비","강한 소나기와 안개비","소나기","악한 비","중간 비","강한 비","매우 강한 비","극심한 비","우박","약한 소나기 비","소나기 비","강한 소나기 비","불규칙적 소나기 비","가벼운 눈","눈","강한 눈","진눈깨비","소나기 진눈깨비","약한 비와 눈","비와 눈","약한 소나기 눈","소나기 눈","강한 소나기 눈","박무","연기","연무","모래 먼지","안개","모래","먼지","화산재","돌풍","토네이도","구름 한 점 없는 맑은 하늘","약간의 구름이 낀 하늘","드문드문 구름이 낀 하늘","구름이 거의 없는 하늘","구름으로 뒤덮인 흐린 하늘","토네이도","태풍","허리케인","한랭","고온","바람부는","우박","바람이 거의 없는","약한 바람","부드러운 바람","중간 세기 바람","신선한 바람","센 바람","돌풍에 가까운 센 바람","돌풍","심각한 돌풍","폭풍","강한 폭풍","허리케인"];
            
            for(var i=0; i<w_id_arr.length; i++) {
                if(w_id_arr[i] == data.weather[0].id){
                    var weatherDescription = w_kor_arr[i];
                    break;
                }
            }
            var temperature =  Math.round(data.main.temp - 273.15);
            var humidity = data.main.humidity;
            var iconCode = data.weather[0].icon;
            var aa = new Date()
            var year = aa.getFullYear()    
            var month = aa.getMonth()+1
            var date = aa.getDate()
            var dayLabel = aa.getDay()

            // 날씨 정보 표시
            var weatherContainer = document.getElementById('weather-container');
            weatherContainer.innerHTML = `
                <p>${year}-${month}-${date}</p>    
                <p>지역: ${city}</p>
                <p>날씨: ${weatherDescription}</p> <img id="weather-icon" src="" alt="날씨 아이콘" class="weatherIcon">
                <p>기온: ${temperature} °C</p>
                <p>습도: ${humidity}%</p>
            `;
            var weatherIcon = document.getElementById('weather-icon');
            weatherIcon.src = `http://openweathermap.org/img/wn/${iconCode}.png`;
        });
    }

         // 왼쪽 이미지 변경 함수

        var leftImages = document.getElementsByClassName("left-Ad");
        var leftCurrentIndex = 0;

    function changeLeftImage() {
    

        leftImages[leftCurrentIndex].style.display = "none";

        leftCurrentIndex = (leftCurrentIndex + 1) % leftImages.length;

        leftImages[leftCurrentIndex].style.display = "block";
    }

         // 오른쪽 이미지 변경 함수
    
        var rightImages = document.getElementsByClassName("right-ad");
        var rightCurrentIndex = 0; 

    function changeRightImage() {
        
        
        rightImages[rightCurrentIndex].style.display = "none";

        rightCurrentIndex = (rightCurrentIndex + 1) % rightImages.length;

        rightImages[rightCurrentIndex].style.display = "block";
    }

    </script>
    <script>
        function showPlaceholder() {
            var searchInput = document.getElementById("search-input");
            if (searchInput.value === "") {
                searchInput.placeholder = "검색어를 입력하세요";
            }
        }

        function hidePlaceholder() {
            var searchInput = document.getElementById("search-input");
            if (searchInput.value === "") {
                searchInput.placeholder = "";
            }
        }
    </script>
    <script>
        const $topBtn = document.querySelector(".btn");

        // 버튼 클릭 시 맨 위로 이동
        $topBtn.onclick = () => {
        window.scrollTo({ top: 0, behavior: "smooth" });  
        }
    </script>
    <script>
        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');

        togglePassword.addEventListener('click', function() {
            if (passwordInput.type === 'password') {
            // 현재는 비밀번호 입력 상태이므로, 일반 텍스트 필드로 변경하여 비밀번호를 보이도록 설정
            passwordInput.type = 'text';
            } else {
            // 현재는 일반 텍스트 상태이므로, 비밀번호 입력 필드로 변경하여 비밀번호를 감추도록 설정
            passwordInput.type = 'password';
            }
        })
    </script>
    <script>
    function stopAnimation_top() {
        const imgElement = document.querySelector('.shopping img');
        const currentState = imgElement.style.animationPlayState;

        if (currentState === 'paused') {
            imgElement.style.animationPlayState = 'running';
        } else {
            imgElement.style.animationPlayState = 'paused';
        }
    }
    </script>

    <script>
    function stopAnimation_bot() {
        const imgElement = document.querySelector('.recommend img');
        const currentState = imgElement.style.animationPlayState;

        if (currentState === 'paused') {
            imgElement.style.animationPlayState = 'running';
        } else {
            imgElement.style.animationPlayState = 'paused';
        }
    }
</script>
</body> 

</html>