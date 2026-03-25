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
            <li class="on"><a href="javascript:menu3sub1_5();">전자개폐기 (CONTACTORS)</a></li>
            <li><a href="javascript:menu3sub1_6();">초소형차단기 (MCB)</a></li>
            <li><a href="javascript:menu3sub1_7();">전자식모터보호계전기</a></li>
            <li><a href="javascript:menu3sub1_8();">디지털복합보호계전기</a></li>
          </ul>
          
          <p class="product_title">전자개폐기 (CONTACTORS)</p>
          <p class="product_title_logo"><img src="../images/hyundai_logo2.png"></p>
          
          <div class="product_detail">
            <div class="product_detail_left">
              <p class="product_title2">HG 시리즈 - HGC Type 전자개폐기</p>
                  <p class="product_title3">견고한 내구성과 절연성능 향상으로 다양한 산업설비에 적용 가능한 모터 보호 제어 솔루션!<br>
상부 보조접점 구조로 설치면적 축소</p>
                  <p class="product_title3_2">다양한 제품범위</p>
                  <ul>
                    <li>18AF~800AF 8종의 Frame</li>
                  </ul>
                  <p class="product_title3_2">정격절연전압 (Ui)</p>
                  <ul>
                    <li>HGC 50A~800A</li>
                  </ul>
                  <p class="product_title3_2">과부화 계전기 직결</p>
                  <ul>
                    <li>HGT 18AF~800AF</li>
                  </ul>
                  <p class="product_title3_2">소비전력 절감형 보조계전기</p>
                  <ul>
                    <li>HGC DC : 영구자석 적용</li>
                  </ul>
                  <p class="product_title3_2">TOR 안전보호 커버 및 Test, Reset 버튼 구분</p>
                  <ul>
                    <li>안전을 위한 착탈식 커버 적용</li>
                  </ul>
                  <p class="product_title3_2">AC/DC Free Voltage</p>
              </div>
            <div class="product_detail_right">
              <img src="../images/pro1_img6.png">
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