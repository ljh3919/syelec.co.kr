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

<?php
include_once(G5_PATH.'/tail.sub.php');
?>
