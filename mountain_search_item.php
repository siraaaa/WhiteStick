<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta charset="utf-8">
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
    var directionsDisplay;
    var directionsService = new google.maps.DirectionsService();
    var map;

    function initialize() {
      directionsDisplay = new google.maps.DirectionsRenderer();
      var chicago = new google.maps.LatLng(41.850033, -87.6500523);
      var mapOptions = {
        zoom:7,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: chicago
      }
      map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
      directionsDisplay.setMap(map);
    }

    function calcRoute() {
      var start = document.getElementById('start').value;
      var end = document.getElementById('end').value;
      var mode = document.getElementById('mode').value;

      var request = {
          origin:start,
          destination:end,
          travelMode: eval("google.maps.DirectionsTravelMode."+mode)
      };
      directionsService.route(request, function(response, status) {
        alert(status);  // 확인용 Alert..미사용시 삭제
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
        }
      });
    }

    google.maps.event.addDomListener(window, 'load', initialize);

    </script>

<style>
@import url("mountain_search_item.css");
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
      등산 검색
    </h1>
    <div id="panel" >
           <b>Start: </b>
           <input type="text" id="start" />
           <b>End: </b>
           <input type="text" id="end" />
           <div>
               <strong>Mode of Travel: </strong>
               <select id="mode">
               <option value="DRIVING">Driving</option>
               <option value="WALKING">Walking</option>
               <option value="BICYCLING">Bicycling</option>
               <option value="TRANSIT">Transit</option>
               </select>
               <input type="button" value="길찾기" onclick="Javascript:calcRoute();" />
           </div>
       </div>
       <div id = "map_background" style="
    flex-basis= 500px;
    flex-shrink:1;
    height: 500px;
    width: 800px;
    margin-top: 20px;
    margin-bottom: 20px;
">
       <div id="map-canvas"></div>
     </div>

</section>
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
