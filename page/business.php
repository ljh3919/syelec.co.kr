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
<div id="sub_visual" class="sub_business">
  <div class="sub_visu_txt_area">
    <p class="sub_visu_txt">사업영역</p>
        <p class="sub_visu_line"></p>
    <p class="sub_visu_txt2">에스와이일렉트릭은 "고객 행복과 독창적 가치 실현"이라는<br> 슬로건 아래 새롭게 도약하는 젊고 역동적인 기업입니다.</p>
    </div>
</div>
<!--//Visual -->


<!-- contents -->
<div id="contents">
  	<div id="leftmenu_wrap">
    <div id="left_top">
      <p class="left_top_txt">사업영역</p>
    </div>
    <div id="left_menu"> 
     <a href="javascript:menu2sub1();" class="on">사업분야</a> 
    </div>
   </div>
  <!--leftmenu_wrap-->
  
  	<div id="article_right">
      <div id="article_top">
        <ul>
          <li class="article_tit">사업분야</li>
          <li class="location"><i class="fa fa-home" aria-hidden="true"></i> HOME &gt; 사업영역 &gt; 사업분야</li>
        </ul>
      </div>
      <!-- article_top -->
      <div id="article">
      	<img src="../images/business.png">
      </div><!-- article -->
     </div><!--article_right-->
     
  </div>


<?php
include_once(G5_THEME_PATH.'/tail.php');