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
    <?php 
    $is_legacy_page = strpos($_SERVER['SCRIPT_NAME'], '/page/') !== false;
    if(!defined('_INDEX_') && !$is_legacy_page) { 
    ?>
    </div><!-- #sub_container -->
    <?php } ?>
</main><!-- .content-wrapper -->

<footer class="footer-wrapper">
    <div class="footer-container">
        <div class="footer-info">
            <h2 style="color:#fff; margin-top:0; font-size:1.5rem;">에스와이일렉트릭</h2>
            <p style="line-height:1.8;">
                대표자: (대표자명) | 사업자등록번호: (사업자번호) <br>
                <!-- 주소는 임시로 표기 -->
                본사: (사업장이 위치한 주소지 입력) <br>
                TEL: 031-591-8310 | EMAIL: sy-elec@naver.com <br>
                COPYRIGHT &copy; SY-ELECTRIC. ALL RIGHTS RESERVED.
            </p>
        </div>
        <div class="footer-links">
            <a href="<?php echo G5_URL; ?>/bbs/content.php?co_id=privacy">개인정보처리방침</a>
            <span style="color:#555; margin:0 10px;">|</span>
            <a href="<?php echo G5_URL; ?>/bbs/content.php?co_id=provision">이용약관</a>
        </div>
    </div>
</footer>

<!-- Floating Buttons -->
<div class="floating-chat">
    <a href="https://pf.kakao.com/_xxxx" target="_blank" class="float-btn kakao">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
        카카오톡
    </a>
    <a href="tel:031-591-8310" class="float-btn phone">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
        전화상담
    </a>
</div>

<?php
include_once(G5_PATH.'/tail.sub.php');
?>
