<?php
if (!defined('_GNUBOARD_'))
    exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH . '/tail.php');
    return;
}

if (G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH . '/shop.tail.php');
    return;
}
?>
    <?php
$is_legacy_page = strpos($_SERVER['SCRIPT_NAME'], '/page/') !== false;
if (!defined('_INDEX_') && !$is_legacy_page) {
?>
    </div><!-- #sub_container -->
    <?php
}?>
</main><!-- .content-wrapper -->

<footer class="footer-wrapper">
    <div class="footer-container">
        <div class="footer-info">
            <h2 style="color:#fff; margin-top:0; font-size:1.5rem;">에스와이일렉트릭</h2>
            <p style="line-height:1.8;">
                대표자: 박근수 | 사업자등록번호: 657-06-03130 <br>
                <!-- 주소는 임시로 표기 -->
                본사: 경기도 구리시 갈매중앙로 190, C동 5층 5029호 (갈매동, 구리갈매 휴밸나인 지식산업센터) <br>
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
<?php if (!defined('_INDEX_')) { ?>
<div class="floating-chat">
    <a href="http://pf.kakao.com/_lGdxdX/chat" target="_blank" class="float-btn kakao">
        <svg width="24" height="24" viewBox="0 0 24 24">
            <path fill="#191919" d="M12 3c-4.971 0-9 3.134-9 7 0 2.478 1.637 4.659 4.14 5.92-.164.577-.591 2.083-.676 2.42-.1.396.143.392.3.287.123-.082 1.957-1.332 2.74-1.873.805.171 1.656.266 2.496.266 4.971 0 9-3.134 9-7s-4.029-7-9-7z"/>
            <text x="12" y="12.5" text-anchor="middle" font-size="5" font-weight="900" fill="#FEE500" style="font-family:sans-serif;">TALK</text>
        </svg>
        카카오톡
    </a>
    <a href="tel:031-591-8310" class="float-btn phone">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
        전화상담
    </a>
</div>
<?php
}?>

<?php
include_once(G5_PATH . '/tail.sub.php');
?>
