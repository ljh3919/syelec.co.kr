<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/css/index.css">', 0);

include_once(G5_THEME_PATH.'/head.php');
?>

<!-- 메인 히어로 배너 -->
<section class="hero-section">
    <div class="hero-inner">
        <h2>고객 행복과 독창적 가치 실현</h2>
        <p>새롭게 도약하는 젊고 역동적인 기업, 에스와이일렉트릭입니다.</p>
        <a href="<?php echo G5_URL; ?>/page/company1.php" class="btn-more">자세히 보기</a>
    </div>
</section>

<!-- 주요 사업 영역 -->
<section class="business-section">
    <div class="container">
        <h3 class="section-title">BUSINESS AREA</h3>
        <p style="text-align:center; margin-bottom: 50px; color:#666; font-size:1.1rem;">에스와이일렉트릭의 핵심 솔루션 라인업을 소개합니다.</p>
        <div class="business-grid">
            <!-- 중저압 전력제품 1 -->
            <a href="<?php echo G5_URL; ?>/page/product1.php" class="b-card">
                <div class="b-img"><img src="<?php echo G5_THEME_URL ?>/img/mccb_banner.png?v=<?php echo time(); ?>" alt="배선용차단기"></div>
                <div class="b-txt">
                    <span class="b-cate">중저압 전력제품</span>
                    <h4>배선용차단기 (MCCB)</h4>
                    <p>안정적인 전력 공급을 지원하는 최고 품질의 차단기</p>
                </div>
            </a>
            <!-- 중저압 전력제품 2 -->
            <a href="<?php echo G5_URL; ?>/page/product1.php" class="b-card">
                <div class="b-img"><img src="<?php echo G5_THEME_URL ?>/img/vcb_banner.png?v=<?php echo time(); ?>" alt="진공차단기"></div>
                <div class="b-txt">
                    <span class="b-cate">중저압 전력제품</span>
                    <h4>진공차단기 (VCB)</h4>
                    <p>뛰어난 차단 성능과 뛰어난 신뢰성의 고압 보호기기</p>
                </div>
            </a>
            <!-- 배전 변압기제품 1 -->
            <a href="<?php echo G5_URL; ?>/page/product1.php" class="b-card">
                <div class="b-img"><img src="<?php echo G5_THEME_URL ?>/img/cast_resin_banner.png?v=<?php echo time(); ?>" alt="몰드변압기"></div>
                <div class="b-txt">
                    <span class="b-cate">배전 변압기제품</span>
                    <h4>몰드변압기</h4>
                    <p>화재 위험성을 최소화한 친환경 고효율 설계 변압기</p>
                </div>
            </a>
            <!-- 배전 변압기제품 2 -->
            <a href="<?php echo G5_URL; ?>/page/product1.php" class="b-card">
                <div class="b-img"><img src="<?php echo G5_THEME_URL ?>/img/oil_immersed_banner.png?v=<?php echo time(); ?>" alt="유입변압기"></div>
                <div class="b-txt">
                    <span class="b-cate">배전 변압기제품</span>
                    <h4>고효율 유입변압기</h4>
                    <p>전력 손실을 획기적으로 낮춘 경제적인 변압기 라인업</p>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- 최신글 (공지사항 등) -->
<section class="latest-section">
    <div class="container">
        <h3 class="section-title">LATEST NOTICE</h3>
        <div style="text-align:center; padding: 40px; background:#f9f9f9; border-radius:10px;">
            <p style="color:#666;">기본 테마의 공지사항 최신글 노출 영역입니다.<br>게시판(notice) 스킨 제작 후 이 위치에 최신글 위젯을 바인딩할 수 있습니다.</p>
            <?php
            // 최신글 불러오기 예시
            // echo latest('theme/basic', 'notice', 4, 25);
            ?>
        </div>
    </div>
</section>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
