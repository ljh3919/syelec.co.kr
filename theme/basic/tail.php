<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>


<!-- 하단 시작 { -->
<div id="ft">

    <div id="ft_wr">
    	<div id="ft_catch"><img src="/images/footer_logo.png"></div>
        <div id="ft_link">
            <a href="javascript:menu1();">회사소개</a>
            <a href="javascript:privacy();">개인정보처리방침</a>
            <a href="javascript:menu1sub2();">오시는 길</a>
        </div>
        <div id="ft_copy">에스와이일렉트릭&nbsp;&nbsp;|&nbsp;&nbsp;대표 : 박근수&nbsp;&nbsp;|&nbsp;&nbsp;사업자등록번호 : 132-86-36191&nbsp;&nbsp;|&nbsp;&nbsp;E-MAIL : sy-elec@naver.com<br>
주소 : 경기도 구리시 갈매중앙로 190, C동 5층 5029호 (갈매동, 구리갈매 휴밸나인 지식산업센터)&nbsp;&nbsp;|&nbsp;&nbsp;TEL : 031-591-8310&nbsp;&nbsp;|&nbsp;&nbsp;FAX : 031-591-8311<br>
Copyright(C) 2025. SY Electric All Rights Reserved.</div>
    </div>
    
    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
        <script>
        
        $(function() {
            $("#top_btn").on("click", function() {
                $("html, body").animate({scrollTop:0}, '500');
                return false;
            });
        });
        </script>
</div>


<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");