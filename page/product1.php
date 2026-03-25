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
<div id="sub_visual" class="sub_product sub_mccb">
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
    <a href="javascript:menu3sub2();">배전 변압기제품</a> 
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
            <li class="on"><a href="javascript:menu3sub1();">배선용차단기 (MCCB)</a></li>
            <li><a href="javascript:menu3sub1_2();">누전차단기 (ELCB)</a></li>
            <li><a href="javascript:menu3sub1_3();">기중차단기 (ACB)</a></li>
            <li><a href="javascript:menu3sub1_4();">진공차단기 (VCB)</a></li>
            <li><a href="javascript:menu3sub1_5();">전자개폐기 (CONTACTORS)</a></li>
            <li><a href="javascript:menu3sub1_6();">초소형차단기 (MCB)</a></li>
            <li><a href="javascript:menu3sub1_7();">전자식모터보호계전기</a></li>
            <li><a href="javascript:menu3sub1_8();">디지털복합보호계전기</a></li>
          </ul>
          
          <p class="product_title">배선용차단기 (MCCB)</p>
          <p class="product_title_logo"><img src="../images/hyundai_logo2.png"></p>
          
          <div class="product_detail">
            <div class="product_detail_left">
              <p class="product_title2">HG 시리즈 - HGM Type 배선용차단기</p>
                  <p class="product_title3">절연성능 극대화</p>
                  <ul>
                    <li>절연 전압 향상으로 제품의 안전성을 극대화 하였습니다.</li>
                    <li>정격 절연전압 Ui : 1,000V</li>
                    <li>정격 임펄스 내전압 Uimp : 8kV</li>
                  </ul>
                  <p class="product_title3_2">차단용량 극상</p>
                  <ul>
                    <li>차단용량 극상으로 국내 최대 차단용량을 구현하였습니다.</li>
                    <li>16~30kA at 460V (100AF)</li>
                    <li>20~55kA at 460V (125~250AF)</li>
                    <li>38~85kA at 460V (400~800AF)</li>
                  </ul>
                  <p class="product_title3_2">선로 절연성능 적합성<br>
전 Frame 정격전류 가조정 기본 채택<br>
다양한 저압 계통 보호 가능</p>
              </div>
            <div class="product_detail_right">
              <img src="../images/pro1_img1.png">
              </div>
          </div>
          
          <div class="product_line"></div>
          
          <div class="product_detail">
            <div class="product_detail_left">
              <p class="product_title2">HG 시리즈 - HGP Type 배선용차단기</p>
                  <p class="product_title3">완벽한 보호협조와 차단용량 극대화<br>
50~800AF까지 4종의 외형크기로 단순화<br>
전모델 정격전류 가조정화<br>
전 Frame 국내 최고의 차단용량 보유 : 150kA at 460V<br>
선택차단등 다양한 차단협조 가능<br>
역접속 차단성능 보증</p>
              </div>
            <div class="product_detail_right">
              <img src="../images/pro1_img2.png">
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