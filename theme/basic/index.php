<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
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

<div id="visual">
  <div id="jssor_1" style="position: absolute; left:50%; margin-left:-480px; visibility: hidden;">
    <div data-u="slides" style="position: relative; width:1920px; height:670px; text-align:center; overflow: hidden;">
      <div style="display: block;"><img src="images/main_visu1.png" usemap="#prroduct_link"></div>
      <div style="display: none;"><img src="images/main_visu2.png" usemap="#prroduct_link"></div>
      <div style="display: none;"><img src="images/main_visu3.png" usemap="#prroduct_link"></div>
      <map name="prroduct_link" id="prroduct_link">
      <area shape="rect" coords="888,540,1030,590" href="/page/product1.php">
    </div>
    
    <!-- Arrow Navigator Skin Begin -->
    <style>
            .jssora051 {display:block;position:absolute;cursor:pointer;}
            .jssora051 .a {fill:none;stroke:#fff;stroke-width:1100;stroke-miterlimit:10;}
            .jssora051:hover {opacity:.8;}
            .jssora051.jssora051dn {opacity:.5;}
            .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <!-- Arrow Navigator -->
    
    <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75"> <svg viewbox="0 0 16000 16000" style="position:absolute;top:250px;left:338px;width:100%;height:100%;">
      <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
      </svg> </div>
    <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75"> <svg viewbox="0 0 16000 16000" style="position:absolute;top:250px;right:-1102px;width:100%;height:100%;">
      <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
      </svg> </div>
  </div>
  <script>
        jssor_1_slider_init("jssor_1");
    </script> 
</div>

<!-- <div id="section1">
  <div class="section1">
    <div class="section1_left">
      <p class="title">중전압전력제품</p>
      <span class="btn"><a href="/page/product1.php">바로가기</a></span> </div>
    /
  </div>
</div> -->

<div id="section2">
	<div class="section2">
    	<p class="section2_logo"><img src="images/section2_logo.png"></p>
        <p class="section2_txt">에스와이일렉트릭은 "고객 행복과 독창적 가치 실현"이라는<br> 슬로건 아래 새롭게 도약하는 젊고 역동적인 기업입니다.</p>
        <p class="section2_tel"><i class="fa fa-phone" aria-hidden="true"></i> 031-591-8310&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope" aria-hidden="true"></i> sy-elec@naver.com</p>
        <div class="section2_btn">
            <span class="btn" style="margin-left:0"><a href="page/company1.php">회사소개</a></span> 
            <span class="btn"><a href="page/estimate.php">온라인문의</a></span> 
            <span class="btn"><a href="bbs/board.php?bo_table=catalogue">카탈로그 다운로드</a></span>
        </div>
    </div>
</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');