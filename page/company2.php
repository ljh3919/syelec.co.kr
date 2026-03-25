<?php
include_once('../common.php');

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


<!-- subVisual -->
<div id="sub_visual" class="sub_company">
  <div class="sub_visu_txt_area">
    <p class="sub_visu_txt">회사소개</p>
        <p class="sub_visu_line"></p>
    <p class="sub_visu_txt2">에스와이일렉트릭은 "고객 행복과 독창적 가치 실현"이라는<br> 슬로건 아래 새롭게 도약하는 젊고 역동적인 기업입니다.</p>
    </div>
</div>
<!--//Visual --> 



<div id="contents">
  <div id="leftmenu_wrap">
  <div id="left_top">
    <p class="left_top_txt">회사소개</p>
  </div>
  <div id="left_menu"> 
    <a href="javascript:menu1sub1();">인사말</a> 
    <a href="javascript:menu1sub2();" class="on">사업장위치</a>
  </div>
  </div>
<!--leftmenu_wrap-->

  <div id="article_right">
    <div id="article_top">
      <ul>
        <li class="article_tit">사업장위치</li>
        <li class="location"><i class="fa fa-home" aria-hidden="true"></i> HOME &gt; 회사소개 &gt; 사업장위치</li>
      </ul>
    </div>
    <!-- article_top -->
    <div id="article">
     <div id="map" style="width:770px;height:450px;"></div>
      <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=80543f325a337a5cad5afcdf29340e50"></script>
      <script>
        var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
            mapOption = { 
                center: new kakao.maps.LatLng(37.63779220205112, 127.12668995730364), // 지도의 중심좌표
                level: 3 // 지도의 확대 레벨
            };

        var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

        // 마커가 표시될 위치입니다 
        var markerPosition  = new kakao.maps.LatLng(37.63779220205, 127.12668995730364); 

        // 마커를 생성합니다
        var marker = new kakao.maps.Marker({
            position: markerPosition
        });

        // 마커가 지도 위에 표시되도록 설정합니다
        marker.setMap(map);
      </script>
      <div class="map-tbl-con">
        <table class="map-tbl">
          <tbody>
            <tr>
              <th>주소</th>
              <td>경기도 구리시 갈매중앙로 190, C동 5층 5029호 (갈매동, 구리갈매 휴밸나인 지식산업센터)</td>
            </tr>
            <tr>
              <th>전화번호</th>
              <td>031-591-8310</td>
            </tr>
            <tr>
              <th>팩스번호</th>
              <td>031-591-8311</td>
            </tr>
            <tr>
              <th>이메일</th>
              <td>sy-elec@naver.com</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div><!-- article -->    
</div>
<!--// contents -->
<div class="blank"></div>

<?php
include_once(G5_THEME_PATH.'/tail.php');