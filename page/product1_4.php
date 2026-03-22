<?php
include_once('../common.php');
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


<!-- subVisual -->
<div id="sub_visual">
  <div class="sub_visu_txt_area">
    <p class="sub_visu_txt">제품정보</p>
        <p class="sub_visu_line"></p>
    <p class="sub_visu_txt2">에스와이일렉트릭은 "고객 행복과 독창적 가치 실현"이라는<br> 슬로건 아래 새롭게 도약하는 젊고 역동적인 기업입니다.</p>
    </div>
</div>
<!--//Visual --> 



<!-- contents -->
<div id="contents">
  <div id="leftmenu_wrap">
  <div id="left_top">
    <p class="left_top_txt">제품정보</p>
  </div>
  <div id="left_menu"> 
    <a href="javascript:menu3sub1();" class="on">중저압 전력제품</a>  
    <a href="javascript:menu3sub2();">배전 변압기</a> 
  </div>
  </div>
<!--leftmenu_wrap-->

  <div id="article_right">
    <div id="article_top">
      <ul>
        <li class="article_tit">중저압 전력제품</li>
        <li class="location"><i class="fa fa-home" aria-hidden="true"></i> HOME &gt; 제품정보 &gt; 중저압 전력제품</li>
      </ul>
    </div>
    <!-- article_top -->
    <div id="article">
      <div class="product">
        <ul>
            <li><a href="javascript:menu3sub1();">배선용차단기 (MCCB)</a></li>
            <li><a href="javascript:menu3sub1_2();">누전차단기 (ELCB)</a></li>
            <li><a href="javascript:menu3sub1_3();">기중차단기 (ACB)</a></li>
            <li class="on"><a href="javascript:menu3sub1_4();">진공차단기 (VCB)</a></li>
            <li><a href="javascript:menu3sub1_5();">전자개폐기 (CONTACTORS)</a></li>
            <li><a href="javascript:menu3sub1_6();">초소형차단기 (MCB)</a></li>
            <li><a href="javascript:menu3sub1_7();">전자식모터보호계전기</a></li>
            <li><a href="javascript:menu3sub1_8();">디지털복합보호계전기</a></li>
          </ul>
          
          <p class="product_title">진공차단기 (VCB)</p>
          <p class="product_title_logo"><img src="../images/hyundai_logo2.png"></p>
          
          <div class="product_detail">
            <div class="product_detail_left">
              <p class="product_title2">HG 시리즈 - HGV, HVF, HVG, UVC Type<br>진공차단기</p>
                  <p class="product_title3">현대일렉트릭 진공차단기는 30년간의 제조기술을 바탕으로 자체 생산하는 진공밸브로 구성되어, 최저 누설율과 고신뢰성으로 장기간 수명 유지가 가능합니다.</p>
                  <p class="product_title3_2">HG-Series 진공차단기는 7.2 ~ 25.8kV의 고압 및 특고압 배전반에서 인입용 또는 분기용 차단기로 설치되어 제어, 선로보호, 변압기 보호, 모터 보호 등에 사용됩니다.</p>
                  <p class="product_title3_2">기존의 밀폐형, 반 밀폐형에서 벗어난 완전 개방형 구조로 밀폐형 및 반 밀폐형의 절연재료에 의존한 절연 방식에서 탈피하여 기중/연면 거리 확대에 의한 절연을 기본으로 한 이상적인 절연 방식을 채택함으로써 보조 절연물의 파손이 발생하더라도 정격 전압의 1.3배 내전압을 견딜 수 있습니다.</p>
                  <ul style="padding-top:25px">
                        <li>전기적 내구성 등급 : E2 (List3)</li>
                        <li>기계적 내구성 등급 : M2</li>
                        <li>진상 소전류 개폐 등급 : C2</li>
                  </ul>                    
              </div>
            <div class="product_detail_right">
              <img src="../images/pro1_img5.png">
              </div>
          </div>
          
          <span class="btn"><a href="javascript:menu4sub3();">카탈로그 다운로드</a></span>
          
      </div>
    </div><!-- article -->
    </div><!--article_right-->
    
</div>
<!--// contents -->
<div class="blank"></div>

<?php
include_once(G5_THEME_PATH.'/tail.php');