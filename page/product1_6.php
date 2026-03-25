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
            <li><a href="javascript:menu3sub1_3();">기중차단기 (ACB)</a></li>
            <li><a href="javascript:menu3sub1_4();">진공차단기 (VCB)</a></li>
            <li><a href="javascript:menu3sub1_5();">전자개폐기 (CONTACTORS)</a></li>
            <li class="on"><a href="javascript:menu3sub1_6();">초소형차단기 (MCB)</a></li>
            <li><a href="javascript:menu3sub1_7();">전자식모터보호계전기</a></li>
            <li><a href="javascript:menu3sub1_8();">디지털복합보호계전기</a></li>
          </ul>
          
          <p class="product_title">초소형차단기 (MCB)</p>
          <p class="product_title_logo"><img src="../images/hyundai_logo2.png"></p>
          
          <div class="product_detail">
            <div class="product_detail_left">
              <p class="product_title2">HG 시리즈 - HGD Type 초소형차단기</p>
                  <p class="product_title3">DIN-Rail 취부구조의 컴팩트한 초소형 차단기<br>
0.5~125A 까지의 폭넓은 정격전류</p>
                  <p class="product_title3_2">Deluxe Type</p>
                  <ul>
                    <li>6kA, 10kA 차단용량</li>
                    <li>IEC 60898-2 for DC application</li>
                    <li>IEC 60947-2 for industrial application</li>
                    <li>IEC 60898-1 for household application</li>
                  </ul>
                  <p class="product_title3_2">Standard Type</p>
                  <ul>
                    <li>3kA, 4.5kA, 6kA, 10kA 차단용량</li>
                    <li>IEC 60898-1 for household application</li>
                  </ul>
                  <p class="product_title3_2">보조접점 등의 다양한 악세서리 지원</p>
              </div>
            <div class="product_detail_right">
              <img src="../images/pro1_img7.png">
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