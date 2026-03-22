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
            <li class="on"><a href="javascript:menu3sub1_2();">누전차단기 (ELCB)</a></li>
            <li><a href="javascript:menu3sub1_3();">기중차단기 (ACB)</a></li>
            <li><a href="javascript:menu3sub1_4();">진공차단기 (VCB)</a></li>
            <li><a href="javascript:menu3sub1_5();">전자개폐기 (CONTACTORS)</a></li>
            <li><a href="javascript:menu3sub1_6();">초소형차단기 (MCB)</a></li>
            <li><a href="javascript:menu3sub1_7();">전자식모터보호계전기</a></li>
            <li><a href="javascript:menu3sub1_8();">디지털복합보호계전기</a></li>
          </ul>
          
          <p class="product_title">누전차단기 (ELCB)</p>
          <p class="product_title_logo"><img src="../images/hyundai_logo2.png"></p>
          
          <div class="product_detail">
            <div class="product_detail_left">
              <p class="product_title2">HG 시리즈 - HGE Type 누전차단기</p>
                  <p class="product_title3">MCCB와 동일한 차단성능 확보, 외형 크기 및<br>부속장치 호환성 유지</p>
                  <ul>
                    <li>서비스 단락 전류 Ics = 100% Icu</li>
                    <li>정격 임펄스 내전압 Uimp : 6kV</li>
                  </ul>
                  <p class="product_title3_2">누전보호 특성</p>
                  <ul>
                    <li>역 결선 소손 방지 기능 : 고객의 오 사용으로 인한 역결선 사용 중에도 PCB 및 Trip Coil의 소손을 방지할 수 있는 회로가 적용되었습니다.</li>
                    <li>일시적인 누전및 노이즈 신호로 일어나는 누전차단기의 불필요한 오동작 방지 기능이 탑재되어 더욱 안전합니다.</li>
                    <li>3상 전원 공급 방식으로 결상에 의한 계통 전압 이상시에도 안전하게 차단합니다.</li>
                    <li>IC에 필터회로 채용으로 인버터 부하를 지락으로부터 안전하게 보호합니다.</li>
                  </ul>
              </div>
            <div class="product_detail_right">
              <img src="../images/pro1_img3.png">
              </div>
          </div>
          <p class="product_title3_2">정격 감도전류 / 동작시간 가조정</p>
          <article class="table01">
        <table class="stockTbl">
          <colgroup>
          <col width="10%">
          <col width="10%">
          <col width="10%">
          <col width="10%">
          <col width="10%">
          <col width="10%">
          <col width="10%">
          <col width="10%">
          <col width="10%">
          <col width="10%">
          </colgroup>
          <tbody><tr>
            <th rowspan="2">구분</th>
            <th colspan="5">정격 감도 전류</th>
            <th colspan="4">관성 부동작 시간</th>
          </tr>
          <tr>
            <th>30mA</th>
            <th>100mA</th>
            <th>300mA</th>
            <th>500mA</th>
            <th>1,000mA</th>
            <th>0ms</th>
            <th>200ms</th>
            <th>500ms</th>
            <th>1,000ms</th>
          </tr>
          <tr>
            <td class="cr">종래</td>
            <td>고정</td>
            <td colspan="3">가조정 (3단계)</td>
            <td>-</td>
            <td>고정</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
          <tr>
            <td class="cr">신제품</td>
            <td>고정</td>
            <td colspan="4">가조정 (4단계)</td>
            <td colspan="4">가조정 (4단계)</td>
          </tr>
        </tbody></table>
      </article>
          
          <span class="btn"><a href="javascript:menu4sub3();">카탈로그 다운로드</a></span>
          
      </div>
    </div><!-- article -->
    </div><!--article_right-->
    
</div>
<!--// contents -->
<div class="blank"></div>

<?php
include_once(G5_THEME_PATH.'/tail.php');