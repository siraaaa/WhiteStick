
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
@import url("basicStyle.css");
@import url("login.css");
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
        로그인/회원가입
      </h1>
    <div class="loginForm">
        <form method="post" name="" action="login_process.php">
           <div class="box">
            <input type="text" class="iText" value="이메일 입력하세요.">
            <br>
            <input type="password" name="" id="" class="iText">
            <br>
            <p>
              <span class="fleft"><input type="checkbox" id=""><label for=""> 아이디 저장</label></span>
              <span class="fright"><a href="">아이디 찾기</a>&nbsp;|&nbsp;<a href="">비밀번호 찾기</a></span>
            </p>
          </div>
          <button class="loginBtn" type="submit">로그인</button>
          <a href="file:///C:/Bitnami/wampstack-5.6.30-5/apache2/htdocs/SmartClimbingStick/enroll.php" class="enrollBtn">회원가입</a>
        </form>
    </div>
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
