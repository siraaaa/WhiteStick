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
@import url("enroll.css");
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
    <h1 class="menuname">
      회원가입
    </h1>
<form class="" action="enroll_process.php" method="post">
  <fieldset>
     <legend>로그인 정보</legend>
    <ol>
      <li>
        <label for="userid">아이디</label>
        <input id="userid" name="userid" type="text" equired autofocus>
      </li>
      <li>
        <label for="pwd1">비밀번호</label>
        <input id="pwd1" name="pwd1" type="password"  required>
     </li>
     <li>
        <label pwd="pwd2">비밀번호 확인</label>
        <input id="pwd2" name="pwd2" type="password" required>
     </li>
  </fieldset>
  <fieldset>
    <legend>개인 정보</legend>
    <ol>
        <li>
          <fieldset>
         <label pwd="profile" style="padding-left: 0px;">프로필 사진</label>
         <fieldset id="form1" runat="server">
         <input type="file" name="profile" value="파일 업로드" class="upload" style="padding-left: 10px;margin-left: 40px;"id="imgInp" />
         <input type="submit" name="upload" style="margin-left: 0px;width: 45px;">
         <img id="blah" src="#" alt="당신의 사진" />
           </fieldset>
       </fieldset>
       </li>
      <li>
        <label pwd="fullname">이름</label>
        <input id="fullname" name="fullname" type="text" placeholder="5자미만 공백없이" required>
      </li>
      <li>
        <label pwd="email">메일 주소</label>
        <input id="email" name="email" type="email" placeholder="abcd@domain.com" required autocomplete="off">
      </li>
      <li>
        <label pwd="tel">연락처</label>
        <input id="tel" name="tel" type="tel"placeholder="000-0000-0000" autocomplete="off">
     </li>
    </ol>
  </fieldset>
  <fieldset>
     <legend class="climbingtype">등산 유형</legend>
     <ol>
       <li>
         <label>등산 숙련도 </label>
        <input type="radio" name="climbingskill" value="verygood"> 아주 잘함
        <input type="radio" name="climbingskill" value="good"> 잘함
        <input type="radio" name="climbingskill" value="soso"> 보통
        <input type="radio" name="climbingskill" value="bad"> 못함
        <input type="radio" name="climbingskill" value="bad"> 아주 못함
       </li>
       <li>
         <label>등산 형태 (복수선택 가능) </label>
        <input type="checkbox" name="climbingformat1" value="sole" style="width: 15px;">개인
        <input type="checkbox" name="climbingformat1" value="friend"style="width: 15px;">친구
        <input type="checkbox" name="climbingformat1" value="couple"style="width: 15px;">커플
        <input type="checkbox" name="climbingformat1" value="family"style="width: 15px;">가족
        <input type="checkbox" name="climbingformat1" value="club"style="width: 15px;">동호회
        <input type="checkbox" name="climbingformat1" value="workshop"style="width: 15px;">워크숍
       </li>
     </ol>
   </fieldset>
   <fieldset>
    <button type="submit"> 제출 </button>
   </fieldset>
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
