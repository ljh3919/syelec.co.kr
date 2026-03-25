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
<div id="sub_visual" class="sub_product">
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
            <li class="on"><a href="javascript:menu3sub1_3();">기중차단기 (ACB)</a></li>
            <li><a href="javascript:menu3sub1_4();">진공차단기 (VCB)</a></li>
            <li><a href="javascript:menu3sub1_5();">전자개폐기 (CONTACTORS)</a></li>
            <li><a href="javascript:menu3sub1_6();">초소형차단기 (MCB)</a></li>
            <li><a href="javascript:menu3sub1_7();">전자식모터보호계전기</a></li>
            <li><a href="javascript:menu3sub1_8();">디지털복합보호계전기</a></li>
          </ul>
          
          <p class="product_title">기중차단기 (ACB)</p>
          <p class="product_title_logo"><img src="../images/hyundai_logo2.png"></p>
          
          <div class="product_detail">
            <div class="product_detail_left">
              <p class="product_title2">HG 시리즈 - HGE, HGN Type 기중차단기</p>
                  <p class="product_title3">최대 단락용량</p>
                  <ul>
                    <li>50kA (at 500V, HGN D프레임)</li>
                  </ul>
                  <p class="product_title3_2">정격별 기종</p>
                  <ul>
                    <li>HGS 1,600/3,200A 2개 프레임</li>
                    <li>HGN 2,000/4,000/5,000/6,300A 4개 프레임</li>
                  </ul>
                  <p class="product_title3_2">다양한 부속장치및 고기능 보호계전기(OCR) 보유</p>
                  <ul>
                    <li>OCR(Over Current Relay, Trip Relay)은 기본적인 보호기능 외에 온도감시, 사고기록저장등 전력감시 기능이 강화되어 안정된 전력공급을 가능하게 합니다.</li>
                  </ul>
              </div>
            <div class="product_detail_right">
              <img src="../images/pro1_img4.png">
              </div>
          </div>
          <div class="product_detail2">
              <p class="product_title3_2">Busbar 단자 수평/수직 변경 가능</p>
              <ul>
                    <li>고객의 판넬 구조에 맞춘 90도 전환 가능한 자유로운 접속방식 구현</li>
                    <li>HGS/HGN A프레임 630 ~ 1,600A</li>
                    <li>HGS/HGN B프레임 630 ~ 3,200A</li>
              </ul>
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