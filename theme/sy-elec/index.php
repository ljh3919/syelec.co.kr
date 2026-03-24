<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/css/index.css">', 0);

include_once(G5_THEME_PATH.'/head.php');
?>

<!-- 메인 히어로 배너 -->
<section class="hero-section">
    <div class="hero-inner">
        <span class="hero-badge">현대 차단기 전문기업</span>
        <h2>HD현대일렉트릭 특약점</h2>
        <p>10년 이상 현장 경험과 기술력으로 완성하는 맞춤 솔루션</p>
        <div class="hero-btns">
            <a href="tel:031-591-8310" class="btn-primary"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right:8px;vertical-align:text-bottom;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>전화 상담하기</a>
            <a href="<?php echo G5_URL; ?>/page/estimate.php" class="btn-secondary"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right:8px;vertical-align:text-bottom;"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>빠른 견적 요청</a>
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

        <!-- 카카오톡 상담 박스 (이미지 디자인 반영) -->
        <!-- <div class="kakao-consult-box">
            <div class="k-top">
                <div class="k-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12 3c-4.971 0-9 3.134-9 7 0 2.478 1.637 4.659 4.14 5.92-.164.577-.591 2.083-.676 2.42-.1.396.143.392.3.287.123-.082 1.957-1.332 2.74-1.873.805.171 1.656.266 2.496.266 4.971 0 9-3.134 9-7s-4.029-7-9-7z"/></svg>
                </div>
                <div class="k-txt">
                    <span class="k-sub">실시간 빠른 답변</span>
                    <span class="k-tit">카카오톡 상담</span>
                </div>
            </div>
            <a href="tel:031-591-8310" class="k-tel">031-591-8310</a>
        </div> -->
    </div>
</section>

<!-- 주요 사업 영역 -->
<section class="business-section">
    <div class="container">
        <h3 class="section-subtitle">OUR BUSINESS</h3>
        <h2 class="section-title">핵심 제품</h2>
        <p class="section-desc">산업 현장에 최적화된 전기 제어 솔루션을 제공합니다</p>
        <div class="business-grid">
            <!-- 배선용차단기 (MCCB) -->
            <a href="<?php echo G5_URL; ?>/page/product1.php" class="b-card">
                <div class="b-img"><img src="<?php echo G5_URL ?>/images/pro1_img1.png" alt="배선용차단기 (MCCB)" onerror="this.src='https://via.placeholder.com/400x250/e0e0e0/ffffff?text=MCCB'"></div>
                <div class="b-txt">
                    <h4>배선용차단기 (MCCB)</h4>
                    <div class="b-tags"><span>HG 시리즈</span><span>HGM Type</span></div>
                    <p>안전성을 극대화한 저압 차단기</p>
                </div>
                <div class="b-footer">자세히 보기 &rarr;</div>
            </a>
            <!-- 누전차단기 (ELCB) -->
            <a href="<?php echo G5_URL; ?>/page/product1_2.php" class="b-card">
                <div class="b-img"><img src="<?php echo G5_URL ?>/images/pro1_img3.png" alt="누전차단기 (ELCB)" onerror="this.src='https://via.placeholder.com/400x250/e0e0e0/ffffff?text=ELCB'"></div>
                <div class="b-txt">
                    <h4>누전차단기 (ELCB)</h4>
                    <div class="b-tags"><span>HG 시리즈</span><span>HGE Type</span></div>
                    <p>감전 및 화재 예방을 위한 최적의 솔루션</p>
                </div>
                <div class="b-footer">자세히 보기 &rarr;</div>
            </a>
            <!-- 기중차단기 (ACB) -->
            <a href="<?php echo G5_URL; ?>/page/product1_3.php" class="b-card">
                <div class="b-img"><img src="<?php echo G5_URL ?>/images/pro1_img4.png" alt="기중차단기 (ACB)" onerror="this.src='https://via.placeholder.com/400x250/e0e0e0/ffffff?text=ACB'"></div>
                <div class="b-txt">
                    <h4>기중차단기 (ACB)</h4>
                    <div class="b-tags"><span>HG 시리즈</span><span>AN Type</span></div>
                    <p>고성능 전력 계통 보호 기기</p>
                </div>
                <div class="b-footer">자세히 보기 &rarr;</div>
            </a>
            <!-- 진공차단기 (VCB) -->
            <a href="<?php echo G5_URL; ?>/page/product1_4.php" class="b-card">
                <div class="b-img"><img src="<?php echo G5_URL ?>/images/pro1_img5.png" alt="진공차단기 (VCB)" onerror="this.src='https://via.placeholder.com/400x250/e0e0e0/ffffff?text=VCB'"></div>
                <div class="b-txt">
                    <h4>진공차단기 (VCB)</h4>
                    <div class="b-tags"><span>수배전반용</span><span>고압용</span></div>
                    <p>탁월한 차단 성능과 신뢰성</p>
                </div>
                <div class="b-footer">자세히 보기 &rarr;</div>
            </a>
            <!-- 전자개폐기 (CONTACTORS) -->
            <a href="<?php echo G5_URL; ?>/page/product1_5.php" class="b-card">
                <div class="b-img"><img src="<?php echo G5_URL ?>/images/pro1_img6.png" alt="전자개폐기" onerror="this.src='https://via.placeholder.com/400x250/e0e0e0/ffffff?text=Contactors'"></div>
                <div class="b-txt">
                    <h4>전자개폐기</h4>
                    <div class="b-tags"><span>HGC Type</span><span>모터제어</span></div>
                    <p>컴팩트한 사이즈와 우수한 성능</p>
                </div>
                <div class="b-footer">자세히 보기 &rarr;</div>
            </a>
            <!-- 초소형차단기 (MCB) -->
            <a href="<?php echo G5_URL; ?>/page/product1_6.php" class="b-card">
                <div class="b-img"><img src="<?php echo G5_URL ?>/images/pro1_img7.png" alt="초소형차단기 (MCB)" onerror="this.src='https://via.placeholder.com/400x250/e0e0e0/ffffff?text=MCB'"></div>
                <div class="b-txt">
                    <h4>초소형차단기 (MCB)</h4>
                    <div class="b-tags"><span>주택용</span><span>산업용</span></div>
                    <p>합리적인 가격과 고품질 차단기</p>
                </div>
                <div class="b-footer">자세히 보기 &rarr;</div>
            </a>
            <!-- 전자식모터보호계전기 -->
            <a href="<?php echo G5_URL; ?>/page/product1_7.php" class="b-card">
                <div class="b-img"><img src="<?php echo G5_URL ?>/images/pro1_img8.png" alt="전자식모터보호계전기" onerror="this.src='https://via.placeholder.com/400x250/e0e0e0/ffffff?text=Relay'"></div>
                <div class="b-txt">
                    <h4>전자식모터보호계전기</h4>
                    <div class="b-tags"><span>EMPRA</span><span>모터보호</span></div>
                    <p>정밀한 모터 보호 및 모니터링</p>
                </div>
                <div class="b-footer">자세히 보기 &rarr;</div>
            </a>
            <!-- 디지털복합보호계전기 -->
            <a href="<?php echo G5_URL; ?>/page/product1_8.php" class="b-card">
                <div class="b-img"><img src="<?php echo G5_URL ?>/images/pro1_img9.png" alt="디지털복합보호계전기" onerror="this.src='https://via.placeholder.com/400x250/e0e0e0/ffffff?text=Digital Relay'"></div>
                <div class="b-txt">
                    <h4>디지털복합보호계전기</h4>
                    <div class="b-tags"><span>HiMAP</span><span>디지털</span></div>
                    <p>통합 전력 감시 제어 시스템</p>
                </div>
                <div class="b-footer">자세히 보기 &rarr;</div>
            </a>
            <!-- 배전용 유입변압기 -->
            <!-- <a href="<?php echo G5_URL; ?>/page/product2.php" class="b-card">
                <div class="b-img"><img src="<?php echo G5_URL ?>/images/pro2_img1.png" alt="배전용 유입변압기" onerror="this.src='https://via.placeholder.com/400x250/e0e0e0/ffffff?text=Transformer'"></div>
                <div class="b-txt">
                    <h4>배전용 유입변압기</h4>
                    <div class="b-tags"><span>고효율</span><span>친환경</span></div>
                    <p>안정적인 전력 공급을 위한 변압기</p>
                </div>
                <div class="b-footer">자세히 보기 &rarr;</div>
            </a> -->
            <!-- 배전용 몰드변압기 -->
            <!-- <a href="<?php echo G5_URL; ?>/page/product2_1.php" class="b-card">
                <div class="b-img"><img src="<?php echo G5_URL ?>/images/pro2_img2.png" alt="배전용 몰드변압기" onerror="this.src='https://via.placeholder.com/400x250/e0e0e0/ffffff?text=Mold Transformer'"></div>
                <div class="b-txt">
                    <h4>배전용 몰드변압기</h4>
                    <div class="b-tags"><span>저소음</span><span>난연성</span></div>
                    <p>안전하고 효율적인 몰드형 변압기</p>
                </div>
                <div class="b-footer">자세히 보기 &rarr;</div>
            </a> -->
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
            <p>전기제어반, 배전반 제작 및 납품 문의 환영합니다</p>
        </div>
        <div class="cta-btns">
            <a href="tel:031-591-8310" class="btn-tel"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right:8px;vertical-align:text-bottom;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> 031-591-8310</a>
            <a href="https://pf.kakao.com/_xxxx" target="_blank" class="btn-kakao"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right:8px;vertical-align:text-bottom;"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg> 카톡 상담하기</a>
        </div>
    </div>
</section>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
