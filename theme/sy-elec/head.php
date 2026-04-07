<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

/*
if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}
*/

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
add_stylesheet('<link rel="stylesheet" as="style" crossorigin href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard@v1.3.9/dist/web/static/pretendard.min.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/css/style.css?ver='.time().'">', 0);
?>
<header class="header-wrapper">
    <div class="header-container">
        <a href="<?php echo G5_URL; ?>" class="logo" style="text-decoration:none; display:flex; align-items:center;">
            <img src="<?php echo G5_IMG_URL ?>/logo.png" alt="<?php echo isset($config['cf_title']) ? $config['cf_title'] : '에스와이일렉트릭'; ?>" style="max-height:40px;">
        </a>
        <nav class="gnb">
            <ul class="gnb-list">
                <?php
                if(function_exists('get_menu_db')) {
                    $menu_datas = get_menu_db(0, true);
                    foreach( $menu_datas as $row ){
                        if( empty($row) ) continue;
                ?>
                <li class="gnb-item <?php echo (isset($row['sub']) && is_array($row['sub']) && count($row['sub']) > 0) ? 'has-sub' : ''; ?>">
                    <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb-link"><?php echo $row['me_name'] ?></a>
                    <?php if(isset($row['sub']) && is_array($row['sub']) && count($row['sub']) > 0) { ?>
                    <ul class="gnb-sublist">
                        <?php foreach( (array) $row['sub'] as $row2 ){ ?>
                        <li><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb-sublink"><?php echo $row2['me_name'] ?></a></li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </li>
                <?php }
                } else {
                    echo '<li class="gnb-item"><a href="#" class="gnb-link">메뉴를 설정해주세요</a></li>';
                }
                ?>
            </ul>
        </nav>
        <div class="header-contact">
            <a href="tel:031-591-8310" class="header-tel-btn">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                <span class="tel-text">031-591-8310</span>
            </a>
        </div>
        <button type="button" class="m-menu-btn" id="mobileMenuBtn">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>
<script>
$(function(){
    $('#mobileMenuBtn').click(function(){
        $('body').toggleClass('mobile-active');
    });

    // 모바일 아코디언 메뉴
    $('.gnb-item.has-sub > .gnb-link').click(function(e){
        if(window.innerWidth <= 768) {
            e.preventDefault(); // 링크 이동을 완전히 차단
            
            var $item = $(this).parent();
            var $sub = $(this).next('.gnb-sublist');
            
            if($item.hasClass('active')) {
                $sub.slideUp(300);
                $item.removeClass('active');
            } else {
                $('.gnb-sublist').slideUp(300);
                $('.gnb-item').removeClass('active');
                $sub.slideDown(300);
                $item.addClass('active');
            }
        }
    });
});
</script>
<main class="content-wrapper">
    <?php 
    $is_legacy_page = strpos($_SERVER['SCRIPT_NAME'], '/page/') !== false;
    if(!defined('_INDEX_') && !$is_legacy_page) { 
    ?>
    <!-- 서브페이지 상단 타이틀 (게시판 등에만 출력) -->
    <h2 id="sub_page_title"><?php echo get_head_title($g5['title']); ?></h2>
    <div id="sub_container">
    <?php } ?>
