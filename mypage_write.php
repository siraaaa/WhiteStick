<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#imgInp").on('change', function(){
                readURL(this);
            });
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }
              reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

<style>
@import url("mypage_write.css");
@import url("basicStyle.css");
</style>
</head>
<body>
<div class="container">
      <header>
        <h1> <strong> Smart Climbing Stick</strong></h1>
      </header>
      <nav class="topmenu">
        <ul>
          <li> <a  class="top"href="file:///C:/Bitnami/wampstack-5.6.30-5/apache2/htdocs/SmartClimbingStick/main.php"> Home </a></li>
          <li> <a  class="top"href="file:///C:/Bitnami/wampstack-5.6.30-5/apache2/htdocs/SmartClimbingStick/mountain.php">All About Mountain</a>
              <ul class="subaam">
              <li> <a href="file:///C:/Bitnami/wampstack-5.6.30-5/apache2/htdocs/SmartClimbingStick/mountain.php"> 등산 정보 </a></li>
              <li> <a href="file:///C:/Bitnami/wampstack-5.6.30-5/apache2/htdocs/SmartClimbingStick/mountain_recommend.php"> 등산 추천 </a></li>
              <li> <a href="file:///C:/Bitnami/wampstack-5.6.30-5/apache2/htdocs/SmartClimbingStick/mountain_search.php"> 등산 검색 </a></li>
            </ul>
          </li>
          <li> <a class="top" href="file:///C:/Bitnami/wampstack-5.6.30-5/apache2/htdocs/SmartClimbingStick/mypage.php">마이 페이지 </a>
              <ul class="submyp">
              <li> <a href="file:///C:/Bitnami/wampstack-5.6.30-5/apache2/htdocs/SmartClimbingStick/mypage.php"> 마이페이지 </a></li>
              <li> <a href="file:///C:/Bitnami/wampstack-5.6.30-5/apache2/htdocs/SmartClimbingStick/mypage_information.php"> 정보수정 </a></li>
              <li> <a href="file:///C:/Bitnami/wampstack-5.6.30-5/apache2/htdocs/SmartClimbingStick/mypage_read.php"> 나의 등산 기록 </a></li>
              </ul>
           </li>
          <li> <a class="top" href="file:///C:/Bitnami/wampstack-5.6.30-5/apache2/htdocs/SmartClimbingStick/login.php">로그인 / 회원가입</a></li>
        </ul>
      </nav>
<section class="content">
<main>
  <form class="climbinglog" name="climbinglog" method="post" action="mypage_write_process.php">
    <ul>
      <li>
        <label for="climbinglogname">루트명</label>
        <input type="text" id="climbinglogname" autofocus required>
      </li>
       <li>
           <label for="starttime">시작시각</label>
           <input type="datetime-local" value="2017-09-06" id="starttime">
           <p>
           <label for="endtime">종료시각</label>
           <input type="datetime-local" value="2017-09-06" id="endtime" >
       </li>
       <li>
              <label for="climbinglevel">등산만족도</label>
              <input type="number" name="grade" max="10" min="0"> / 10.0
      </li>
      <li>
        <label for="climbingform">등산 형태 (복수선택 가능) </label>
        <input type="checkbox" name="climbingformat1" value="sole" style="width: 15px;">개인
        <input type="checkbox" name="climbingformat1" value="friend"style="width: 15px;">친구
        <input type="checkbox" name="climbingformat1" value="couple"style="width: 15px;">커플
        <input type="checkbox" name="climbingformat1" value="family"style="width: 15px;">가족
        <input type="checkbox" name="climbingformat1" value="club"style="width: 15px;">동호회
        <input type="checkbox" name="climbingformat1" value="workshop"style="width: 15px;">워크숍
      </li>
      <li>
        <label for="사진">파일첨부</label>
        <fieldset id="form1" runat="server">
        <input type='file' id="imgInp" />
        <img id="blah" src="#" alt="당신의 추억이 담긴 사진" />
      </fieldset>
      </li>
      <li>
        <label for="story" >글쓰기</label>
        <textarea name="story" rows="20" cols="800"  style="
    width: 700px;
    height: 300px;
"alt="당신의 이야기" ></textarea>
      </li>
    </ul>
    <div class="centered">
      <input type="submit" value="저장하기">
      <input type="reset"  value="다시작성">
    </div>
  </form>

</main>
<aside>
        AD
</aside>
</section>
<footer>
홈페이지
</footer>
</div>
</body>
</html>
