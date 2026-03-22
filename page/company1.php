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
    <p class="sub_visu_txt">회사소개</p>
        <p class="sub_visu_line"></p>
    <p class="sub_visu_txt2">에스와이일렉트릭은 "고객 행복과 독창적 가치 실현"이라는<br> 슬로건 아래 새롭게 도약하는 젊고 역동적인 기업입니다.</p>
    </div>
</div>
<!--//Visual --> 



<!-- contents -->
<div id="contents">
  <div id="leftmenu_wrap">
  <div id="left_top">
    <p class="left_top_txt">회사소개</p>
  </div>
  <div id="left_menu"> 
    <a href="javascript:menu1sub1();" class="on">인사말</a> 
    <a href="javascript:menu1sub2();">사업장위치</a>
  </div>
  </div>
<!--leftmenu_wrap-->

  <div id="article_right">
    <div id="article_top">
      <ul>
        <li class="article_tit">CEO 인사말</li>
        <li class="location"><i class="fa fa-home" aria-hidden="true"></i> HOME > 회사소개 > CEO 인사말</li>
      </ul>
    </div>
    <!-- article_top -->
    <div id="article">
      <div class="greeting">
        <p class="greeting_tit">에스와이일렉트릭 홈페이지를 찾아주신 고객 여러분께 진심으로 환영의 인사를 전합니다.</p>
          <p class="greeting_txt">에스와이일렉트릭은 "고객 행복과 독창적 가치 실현"이라는<br> 슬로건 아래 새롭게 도약하는 젊고 역동적인 기업입니다.
          <br><br>
          오랜 시간 축적된 뛰어난 기술과 노하우를 바탕으로, <br>고객과 더불어 혁신적인 비즈니스 성공을 <br>이루기 위해 지속적으로 노력하겠습니다.<br>
          <br>
          앞으로도 변함없는 관심과 응원을 부탁드립니다.</p>
      </div>        
    </div><!-- article -->
    </div><!--article_right-->
    
</div>
<!--// contents -->
<div class="blank"></div>

<?php
include_once(G5_THEME_PATH.'/tail.php');