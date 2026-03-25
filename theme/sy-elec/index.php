<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/css/index.css">', 0);

include_once(G5_THEME_PATH.'/head.php');
?>

<!-- 메인 히어로 배너 (ChatGPT Image.png 스타일) -->
<section class="hero-section">
    <div class="hero-inner container">
        <span class="hero-badge">현대차단기 전문기업</span>
        <h2>HD 현대일렉트릭 특약점</h2>
        <p>10년 이상 현장 경험과 기술력으로 완성하는 맞춤 솔루션</p>
        
        <div class="hero-btns">
            <a href="tel:010-1234-5678" class="btn-blue">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" style="margin-right:15px;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                전화 상담하기
            </a>
            <a href="<?php echo G5_URL ?>/page/estimate.php" class="btn-orange">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" style="margin-right:15px;"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                빠른 견적 요청
            </a>
        </div>

        <div class="hero-bottom-info">
            <div class="info-item">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                10년 이상 경력
            </div>
            <div class="info-item">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><polyline points="9 12 11 14 15 10"></polyline></svg>
                맞춤 제작 전문
            </div>
            <div class="info-item">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                전국 시공 가능
            </div>
        </div>

        <!-- 카카오 상담 박스 (ChatGPT Image.png 스타일로 수정) -->
        <div class="kakao-floating">
            <div class="k-header">
                <div class="k-circle">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 3c-4.971 0-9 3.134-9 7 0 2.478 1.637 4.659 4.14 5.92-.164.577-.591 2.083-.676 2.42-.1.396.143.392.3.287.123-.082 1.957-1.332 2.74-1.873.805.171 1.656.266 2.496.266 4.971 0 9-3.134 9-7s-4.029-7-9-7z"/>
                    </svg>
                </div>
                <div class="k-title-group">
                    <span class="k-mtxt">카카오톡 상담</span>
                    <span class="k-stxt">실시간 빠른 답변</span>
                </div>
            </div>
            <a href="tel:031-591-8310" class="k-button">031-591-8310</a>
        </div>
    </div>
</section>

<!-- OUR BUSINESS 섹션 -->
<section class="business-section">
    <div class="container">
        <p class="st">OUR BUSINESS</p>
        <h2 class="mt">핵심 제품 & 사업 분야</h2>
        <p class="sd">산업 현장에 최적화된 전기 제어 솔루션을 제공합니다</p>
        
        <div class="business-grid">
            <a href="<?php echo G5_URL ?>/page/product1.php" class="b-card">
                <div class="b-img"><img src="<?php echo G5_THEME_URL ?>/img/bussnies_sub.png" alt="배전반"></div>
                <div class="b-content">
                    <h4>배전반</h4>
                    <div class="b-tags"><span class="b-tag">저압/고압</span><span class="b-tag">동력/분전</span></div>
                    <p class="b-desc">산업용·건물용 전력 분배 시스템 구축</p>
                </div>
                <div class="b-link">자세히 보기 &rarr;</div>
            </a>
            <a href="<?php echo G5_URL ?>/page/product1_8.php" class="b-card">
                <div class="b-img"><img src="<?php echo G5_THEME_URL ?>/img/product_sub.png" alt="자동제어반"></div>
                <div class="b-content">
                    <h4>자동제어반</h4>
                    <div class="b-tags"><span class="b-tag">PLC</span><span class="b-tag">인버터</span></div>
                    <p class="b-desc">공장 자동화 제어 시스템 정밀 설계</p>
                </div>
                <div class="b-link">자세히 보기 &rarr;</div>
            </a>
            <a href="<?php echo G5_URL ?>/page/product_business.php" class="b-card">
                <div class="b-img"><img src="<?php echo G5_THEME_URL ?>/img/company_sub.png" alt="자동화 설비"></div>
                <div class="b-content">
                    <h4>자동화 설비</h4>
                    <div class="b-tags"><span class="b-tag">FA System</span><span class="b-tag">SCADA</span></div>
                    <p class="b-desc">생산라인 지능형 자동화 구축 솔루션</p>
                </div>
                <div class="b-link">자세히 보기 &rarr;</div>
            </a>
            <a href="<?php echo G5_URL ?>/page/estimate.php" class="b-card">
                <div class="b-img"><img src="<?php echo G5_THEME_URL ?>/img/support_sub.png" alt="유지보수"></div>
                <div class="b-content">
                    <h4>유지보수</h4>
                    <div class="b-tags"><span class="b-tag">정기점검</span><span class="b-tag">긴급출동</span></div>
                    <p class="b-desc">A/S 및 설비 진단 유지관리 서비스</p>
                </div>
                <div class="b-link">자세히 보기 &rarr;</div>
            </a>
        </div>
    </div>
</section>

<!-- PORTFOLIO 섹션 -->
<section class="portfolio-section">
    <div class="container">
        <p class="st">PORTFOLIO</p>
        <h2 class="mt" style="color:#fff;">주요 납품 실적</h2>
        <p class="sd" style="color:#a0aec0;">다양한 산업 분야에서 검증된 시공 경험과 신뢰</p>
        
        <div class="portfolio-grid">
            <div class="p-card">
                <div class="p-img"><img src="https://placehold.co/500x350/002244/ffffff?text=Portfolio+1" alt="실적1"></div>
                <div class="p-content">
                    <span class="p-cat">공장</span>
                    <h4>OO전자 반도체 공장</h4>
                    <p>메인 배전반 15면 설치 및 시운전</p>
                    <div class="p-meta"><span>2024.01</span><span>3주</span><span>경기도 화성</span></div>
                </div>
            </div>
            <div class="p-card">
                <div class="p-img"><img src="https://placehold.co/500x350/002244/ffffff?text=Portfolio+2" alt="실적2"></div>
                <div class="p-content">
                    <span class="p-cat">빌딩</span>
                    <h4>OO타워 신축 전기공사</h4>
                    <p>분전반 및 EPS 실측 제작·설치</p>
                    <div class="p-meta"><span>2023.11</span><span>4주</span><span>서울 강남</span></div>
                </div>
            </div>
            <div class="p-card">
                <div class="p-img"><img src="https://placehold.co/500x350/002244/ffffff?text=Portfolio+3" alt="실적3"></div>
                <div class="p-content">
                    <span class="p-cat">플랜트</span>
                    <h4>OO석유화학 설비</h4>
                    <p>제어반-PLC 시스템 고도화 구축</p>
                    <div class="p-meta"><span>2023.08</span><span>3주</span><span>울산</span></div>
                </div>
            </div>
        </div>
        
        <div style="text-align:center;">
            <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=gallery" class="btn-p-all">전체 실적 보기 &rarr;</a>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US 섹션 -->
<section class="why-section">
    <div class="container">
        <p class="st">WHY CHOOSE US</p>
        <h2 class="mt">SY ELECTRIC이 특별한 이유</h2>
        
        <div class="why-grid">
            <div class="why-item">
                <i class="svg-icon">
                    <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                </i>
                <h4>10년 이상 경력</h4>
                <p>풍부한 현장 경험과 노하우</p>
            </div>
            <div class="why-item">
                <i class="svg-icon">
                    <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                </i>
                <h4>100% 맞춤 제작</h4>
                <p>고객 요구사항 완벽 반영</p>
            </div>
            <div class="why-item">
                <i class="svg-icon">
                    <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                </i>
                <h4>빠른 납기 대응</h4>
                <p>체계적인 생산 시스템</p>
            </div>
            <div class="why-item">
                <i class="svg-icon">
                    <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                </i>
                <h4>책임 A/S 보장</h4>
                <p>24시간 긴급 출동 지원</p>
            </div>
        </div>
    </div>
</section>

<!-- 하단 CTA 바 -->
<section class="footer-cta">
    <div class="container f-cta-inner">
        <div>
            <h2>지금 바로 전문가와 상담하세요</h2>
            <p>도면 검토부터 견적까지 무료로 도와드립니다</p>
        </div>
        <div class="f-cta-btns">
            <a href="tel:031-591-8310" class="btn-cta-o">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" style="margin-right:15px;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                031-591-8310
            </a>
            <a href="javascript:void(0);" onclick="alert('카카오톡 상담 준비중입니다.')" class="btn-cta-k">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" style="margin-right:15px;"><path d="M12 3c-4.971 0-9 3.134-9 7 0 2.478 1.637 4.659 4.14 5.92-.164.577-.591 2.083-.676 2.42-.1.396.143.392.3.287.123-.082 1.957-1.332 2.74-1.873.805.171 1.656.266 2.496.266 4.971 0 9-3.134 9-7s-4.029-7-9-7z"/></svg>
                카톡 상담하기
            </a>
        </div>
    </div>
</section>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
