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
    <a href="javascript:menu3sub1();">중저압 전력제품</a> 
    <a href="javascript:menu3sub2();" class="on">배전 변압기제품</a> 
  </div>
  </div>
<!--leftmenu_wrap-->
  
<div id="article_right">
    <div id="article_top">
      <ul>
        <li class="article_tit">배전 변압기제품</li>
        <li class="location"><i class="fa fa-home" aria-hidden="true"></i> HOME &gt; 제품정보 &gt; 배전 변압기제품</li>
      </ul>
    </div>
    <!-- article_top -->
    <div id="article">
      <div class="product">
        <ul>
            <li class="on"><a href="javascript:menu3sub2();">배전용 유입변압기</a></li>
            <li><a href="javascript:menu3sub2_2();">배전용 몰드변압기</a></li>
          </ul>
          
          <p class="product_title">배전용 유입변압기</p>
          <p class="product_title_logo"><img src="../images/hyundai_logo2.png"></p>
          
          <div class="product_detail">
            <div class="product_detail_left">
              <p class="product_title2"></p>
                  <ul>
                    <li>정격용량 : 100 ~ 50,000kVA</li>
                    <li>정격전압 : 220V ~ 36,000V</li>
                    <li>생산능력 : 7,000MVA</li>
                  </ul>
              </div>
            <div class="product_detail_right">
              <img src="../images/product6-photo-3.jpg" width="300px">
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