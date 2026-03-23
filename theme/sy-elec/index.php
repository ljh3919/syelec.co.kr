<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/css/index.css">', 0);

include_once(G5_THEME_PATH.'/head.php');
?>

<!-- 메인 히어로 배너 -->
<section class="hero-section">
    <div class="hero-inner">
        <span class="hero-badge">산업용 전기제어 전문기업</span>
        <h2>산업용 전기제어<br>· 배전반 제작 전문</h2>
        <p>10년 이상 현장 경험과 기술력으로 완성하는 맞춤 솔루션</p>
        <div class="hero-btns">
            <a href="tel:010-1234-5678" class="btn-primary"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right:8px;vertical-align:text-bottom;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>전화 상담하기</a>
            <a href="<?php echo G5_URL; ?>/bbs/write.php?bo_table=estimate" class="btn-secondary"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right:8px;vertical-align:text-bottom;"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>빠른 견적 요청</a>
        </div>
        <div class="hero-bottom-info">
            <div class="info-item">
                <div class="info-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg></div>
                <span>10년 이상 경력</span>
            </div>
            <div class="info-item">
                <div class="info-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></div>
                <span>맞춤 제작 전문</span>
            </div>
            <div class="info-item">
                <div class="info-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></div>
                <span>전국 시공 가능</span>
            </div>
        </div>
    </div>
</section>

<!-- 주요 사업 영역 -->
<section class="business-section">
    <div class="container">
        <h3 class="section-subtitle">OUR BUSINESS</h3>
        <h2 class="section-title">핵심 제품 &amp; 사업 분야</h2>
        <p class="section-desc">산업 현장에 최적화된 전기 제어 솔루션을 제공합니다</p>
        <div class="business-grid">
            <!-- 배전반 -->
            <a href="<?php echo G5_URL; ?>/page/product1.php" class="b-card">
                <div class="b-img"><img src="<?php echo G5_THEME_URL ?>/img/mccb_banner.png" alt="배전반" onerror="this.src='https://via.placeholder.com/400x250/e0e0e0/ffffff?text=Image'"></div>
                <div class="b-txt">
                    <h4>배전반</h4>
                    <div class="b-tags">
                        <span>저압/고압</span><span>동력/분전</span>
                    </div>
                    <p>산업용·건물용 전력 분배</p>
                </div>
                <div class="b-footer">자세히 보기 &rarr;</div>
            </a>
            <!-- 자동제어반 -->
            <a href="<?php echo G5_URL; ?>/page/product2.php" class="b-card">
                <div class="b-img"><img src="<?php echo G5_THEME_URL ?>/img/vcb_banner.png" alt="자동제어반" onerror="this.src='https://via.placeholder.com/400x250/e0e0e0/ffffff?text=Image'"></div>
                <div class="b-txt">
                    <h4>자동제어반</h4>
                    <div class="b-tags">
                        <span>PLC</span><span>인버터</span>
                    </div>
                    <p>공장 자동화 제어 시스템</p>
                </div>
                <div class="b-footer">자세히 보기 &rarr;</div>
            </a>
            <!-- 자동화 설비 -->
            <a href="<?php echo G5_URL; ?>/page/product3.php" class="b-card">
                <div class="b-img"><img src="<?php echo G5_THEME_URL ?>/img/cast_resin_banner.png" alt="자동화 설비" onerror="this.src='https://via.placeholder.com/400x250/e0e0e0/ffffff?text=Image'"></div>
                <div class="b-txt">
                    <h4>자동화 설비</h4>
                    <div class="b-tags">
                        <span>FA System</span><span>SCADA</span>
                    </div>
                    <p>생산라인 자동화 구축</p>
                </div>
                <div class="b-footer">자세히 보기 &rarr;</div>
            </a>
            <!-- 유지보수 -->
            <a href="<?php echo G5_URL; ?>/page/product4.php" class="b-card">
                <div class="b-img"><img src="<?php echo G5_THEME_URL ?>/img/oil_immersed_banner.png" alt="유지보수" onerror="this.src='https://via.placeholder.com/400x250/e0e0e0/ffffff?text=Image'"></div>
                <div class="b-txt">
                    <h4>유지보수</h4>
                    <div class="b-tags">
                        <span>정기점검</span><span>긴급출동</span>
                    </div>
                    <p>A/S 및 설비 진단</p>
                </div>
                <div class="b-footer">자세히 보기 &rarr;</div>
            </a>
        </div>
    </div>
</section>

<!-- 주요 시공 실적 Portfolio -->
<section class="portfolio-section">
    <div class="container">
        <h3 class="section-subtitle">PORTFOLIO</h3>
        <h2 class="section-title">주요 시공 실적</h2>
        <p class="section-desc">다양한 산업 분야에서 검증된 시공 경험과 신뢰</p>
        
        <div class="portfolio-grid">
            <!-- 1 -->
            <div class="p-card">
                <div class="p-img"><img src="<?php echo G5_THEME_URL ?>/img/port1.jpg" alt="OO전자 반도체 공장" onerror="this.src='https://via.placeholder.com/400x250/333/fff?text=Portfolio'"></div>
                <div class="p-txt">
                    <span class="p-badge">공장</span>
                    <h4>OO전자 반도체 공장</h4>
                    <p>메인 배전반 15면 설치</p>
                    <div class="p-info">
                        <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 2024.01</span>
                        <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 3주</span>
                        <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> 경기도 화성</span>
                    </div>
                </div>
            </div>
            <!-- 2 -->
            <div class="p-card">
                <div class="p-img"><img src="<?php echo G5_THEME_URL ?>/img/port2.jpg" alt="OO타워 신축 전기공사" onerror="this.src='https://via.placeholder.com/400x250/333/fff?text=Portfolio'"></div>
                <div class="p-txt">
                    <span class="p-badge">빌딩</span>
                    <h4>OO타워 신축 전기공사</h4>
                    <p>분전반 및 EPS 설치</p>
                    <div class="p-info">
                        <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 2023.11</span>
                        <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 4주</span>
                        <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> 서울 강남</span>
                    </div>
                </div>
            </div>
            <!-- 3 -->
            <div class="p-card">
                <div class="p-img"><img src="<?php echo G5_THEME_URL ?>/img/port3.jpg" alt="OO석유화학 설비" onerror="this.src='https://via.placeholder.com/400x250/333/fff?text=Portfolio'"></div>
                <div class="p-txt">
                    <span class="p-badge">플랜트</span>
                    <h4>OO석유화학 설비</h4>
                    <p>제어반·PLC 시스템 구축</p>
                    <div class="p-info">
                        <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 2023.08</span>
                        <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 3주</span>
                        <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> 울산</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center" style="margin-top: 50px;">
            <a href="<?php echo G5_URL; ?>/bbs/board.php?bo_table=portfolio" class="btn-outline-white">전체 실적 보기 &rarr;</a>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="why-choose-us">
    <div class="container">
        <h3 class="section-subtitle">WHY CHOOSE US</h3>
        <h2 class="section-title" style="color:#222;">SY ELECTRIC이 특별한 이유</h2>
        
        <div class="features-grid">
            <div class="feature-item">
                <div class="f-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                </div>
                <div class="f-text">
                    <h4>10년 이상 경력</h4>
                    <p>풍부한 현장 경험과 노하우</p>
                </div>
            </div>
            <div class="feature-item">
                <div class="f-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg>
                </div>
                <div class="f-text">
                    <h4>100% 맞춤 제작</h4>
                    <p>고객 요구사항 완벽 반영</p>
                </div>
            </div>
            <div class="feature-item">
                <div class="f-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                </div>
                <div class="f-text">
                    <h4>빠른 납기 대응</h4>
                    <p>체계적인 생산 시스템</p>
                </div>
            </div>
            <div class="feature-item">
                <div class="f-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                </div>
                <div class="f-text">
                    <h4>책임 A/S 보장</h4>
                    <p>24시간 긴급 출동</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bottom CTA -->
<section class="bottom-cta">
    <div class="container cta-flex">
        <div class="cta-text">
            <h2>지금 바로 전문가와 상담하세요</h2>
            <p>도면 검토부터 견적까지 무료로 도와드립니다</p>
        </div>
        <div class="cta-btns">
            <a href="tel:010-1234-5678" class="btn-tel"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right:8px;vertical-align:text-bottom;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> 010-1234-5678</a>
            <a href="#" class="btn-kakao"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right:8px;vertical-align:text-bottom;"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg> 카톡 상담하기</a>
        </div>
    </div>
</section>

<!-- Floating Buttons -->
<div class="floating-chat">
    <a href="#" class="float-btn kakao">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
        카카오톡
    </a>
    <a href="tel:010-1234-5678" class="float-btn phone">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
        전화상담
    </a>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
