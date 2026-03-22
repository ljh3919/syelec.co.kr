<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->

<header>
	<div id="top_navi_wrap">
    
    <div class="top_navi_wrap2">
		<div class="navi_wrap">
			<div class="top_logo"><a href="/"><img src="/images/logo.png"></a></div>
			<div class="top_navi">
				<div class="navi_dep1 float01">
				<div class="navi_dep1_position navi1"><a href="javascript:menu1();">회사소개</a></div>
					<div class="navi_dep2_wrap navi_dep2_wrap01">
						<ul class="navi_dep2_ul01">
							<li><a href="javascript:menu1sub1();" class="subtop">CEO 인사말</a></li>
							<li class="last"><a href="javascript:menu1sub2();" class="subtop">사업장위치</a></li>
						</ul>
					</div>
				</div><!--float1-->
                                                    
				<div class="navi_dep1 float02">
				<div class="navi_dep1_position"><a href="javascript:menu2();">사업영역</a></div>
					<div class="navi_dep2_wrap navi_dep2_wrap02">
						<ul class="navi_dep2_ul02">
                            <li class="last"><a href="javascript:menu2sub1();" class="subtop">사업분야</a></li>
						</ul>
					</div>
				</div><!--float2-->
                
				<div class="navi_dep1 float03">
				<div class="navi_dep1_position"><a href="javascript:menu3();">제품정보</a></div>
					<div class="navi_dep2_wrap navi_dep2_wrap03">
						<ul class="navi_dep2_ul03">
                        	<li><a href="javascript:menu3sub1();" class="subtop">중저압 전력제품</a></li>                            
                        	<li class="last"><a href="javascript:menu3sub2();" class="subtop">배전 변압기제품</a></li>                            
						</ul>
					</div>
				</div><!--float3-->
                                
			  <div class="navi_dep1 float04">
				<div class="navi_dep1_position"><a href="javascript:menu4();">고객지원</a></div>
					<div class="navi_dep2_wrap navi_dep2_wrap04">
						<ul class="navi_dep2_ul04">
							<li><a href="javascript:menu4sub1();" class="subtop">공지사항</a></li>
							<li><a href="javascript:menu4sub2();" class="subtop">온라인문의</a></li>
                            <li class="last"><a href="javascript:menu4sub3();" class="subtop">카탈로그 다운로드</a></li>
						</ul>
					</div>
				</div><!--float4--> 
			</div><!--top_navi-->
		</div>      
	</div><!-- top_navi_wrap2 -->
    
	</div><!--top_navi_wrap-->
</header>
<script type="text/javascript" src="/js/jssor.slider.min.js"></script>
<script>
        jssor_1_slider_init = function() {
            var jssor_1_SlideshowTransitions = [
            {$Duration:1200,$Opacity:2}
            ];
           
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $ChanceToShow: 2
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
        };
</script>
<!-- } 상단 끝 -->


<hr>

<!-- 콘텐츠 시작 { -->
