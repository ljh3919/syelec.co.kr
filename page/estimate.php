<?php
include_once('../common.php');

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email1"] . "@" . $_POST["email2"];
  $company = $_POST["email1"] ;
  $division = $_POST["division"] ;
  $tel = $_POST["tel1"]."-".$_POST["tel2"]."-".$_POST["tel3"];
  $content = $_POST["content"] ;

  $message = "이름: $name \r\n";
  $message .= "회사명: $company \r\n";
  $message .= "부서명: $division \r\n";
  $message .= "전화번호: $tel \r\n";
  $message .= "이메일: $email \r\n";
  $message .= "내용: $content \r\n";
  //$to = "ljh3919@gmail.com"; // 받는 이메일 주소를 여기에 입력하세요.
  $to = "sy-elec@naver.com"; // 받는 이메일 주소를 여기에 입력하세요.
  $subject = $title;
  $headers = "From: $email";
  mail($to, $subject, $message, $headers);
}
?>


<!-- subVisual -->
<div id="sub_visual" class="sub_support">
  <div class="sub_visu_txt_area">
    <p class="sub_visu_txt">고객지원</p>
        <p class="sub_visu_line"></p>
    <p class="sub_visu_txt2">에스와이일렉트릭은 고객의 목소리에 귀 기울이며<br>최상의 솔루션과 서비스를 제공하기 위해 노력하고 있습니다.</p>
    </div>
</div>
<!--//Visual --> 



<!-- contents -->
<div id="contents">
  <div id="leftmenu_wrap">
  <div id="left_top">
    <p class="left_top_txt">고객지원</p>
  </div>
  <div id="left_menu"> 
    <a href="javascript:menu4sub1();">공지사항</a>  
    <a href="javascript:menu4sub2();" class="on">온라인문의</a>   
    <a href="javascript:menu4sub3();">카탈로그 다운로드</a> 
  </div>
  </div>
<!--leftmenu_wrap-->
  
  <div id="article_right">
    <div id="article_top">
      <ul>
        <li class="article_tit">온라인문의</li>
        <li class="location"><i class="fa fa-home" aria-hidden="true"></i> HOME &gt; 고객지원 &gt; 온라인문의</li>
      </ul>
    </div>
    <!-- article_top -->
    <div id="article">
      <div class="estimate-form-wrapper">
        <form method="post" enctype="multipart/form-data" name="f1" id="f1">
          <input type="hidden" name="mode" value="send">
          <table class="estimate-table">
              <tr>
                <th>이름</th>
                <td><input id="name" name="name" type="text" class="form-input"></td>
              </tr>
              <tr>
                <th>회사명 / 부서명</th>
                <td>
                  <div class="form-grid">
                    <input id="company" name="company" type="text" class="form-input half" placeholder="회사명">
                    <span>/</span>
                    <input id="division" name="division" type="text" class="form-input half" placeholder="부서명">
                  </div>
                </td>
              </tr>
              <tr>
                <th>전화번호</th>
                <td>
                  <div class="form-grid">
                    <input type="text" id="tel1" name="tel1" class="form-input small" maxlength="4">
                    <span>-</span>
                    <input type="text" id="tel2" name="tel2" class="form-input small" maxlength="4">
                    <span>-</span>
                    <input type="text" id="tel3" name="tel3" class="form-input small" maxlength="4">
                  </div>
                </td>
              </tr>
              <tr>
                <th>이메일</th>
                <td>
                  <div class="form-grid">
                    <input type="text" id="email1" name="email1" class="form-input half">
                    <span>@</span>
                    <input type="text" id="email2" name="email2" class="form-input half">
                  </div>
                </td>
              </tr>
              <tr>
                <th>제목</th>
                <td><input id="title" name="title" type="text" class="form-input"></td>
              </tr>
              <tr>
                <th>내용</th>
                <td><textarea name="content" required class="form-input form-textarea" placeholder="문의하실 내용을 상세히 입력해주세요."></textarea></td>
              </tr>
            </tbody></table>
          </div>
                      <div class="bbs-agree"><!-- bbs-agree -->
            
            
            <div class="rules">
              <div class="padder">
                <div class="inner">
                  <h3 class="subject">에스와이일렉트릭(이하 '회사')의 개인정보취급방침은 다음과 같은 내용을 담고 있습니다.</h3>
                  <p> 1. 개인정보의 처리목적<br>
                    2. 개인정보의 처리 및 보유기간<br>
                    3. 개인정보의 제3자 제공<br>
                    4. 개인정보처리의 위탁<br>
                    5. 정보주체와 법정대리인의 권리.의무 및 행사방법<br>
                    6. 처리하는 개인정보 항목<br>
                    7. 개인정보의 파기<br>
                    8. 개인정보의 안정성 확보조치<br>
                    9. 개인정보 자동 수집 장치의 설치.운영 및 거부에 대한 사항<br>
                    10. 개인정보 보호책임자 및 개인정보 열람청구<br>
                    11. 권익침해 구제방법<br>
                    12. 개인정보 처리방침 변경 </p>
                  <h3 class="subject">1. 개인정보의 처리목적</h3>
                  <p> 회사는 고객 상담 및 서비스 신청 접수 등을 위해 개인정보를 수집, 이용하고 있습니다. </p>
                  <h3 class="subject">2. 개인정보의 처리 및 보유기간</h3>
                  <p> 이용자의 개인정보는 원칙적으로 개인정보의 수집 및 이용목적이 달성되면 지체 없이 파기합니다.<br>
                    단, 분쟁처리, 본인확인 등 회사 내부 방침에 의해 정보보유가 필요할 경우, 다음의 정보에 대해서는 아래의 이유로 명시한 기간 동안 보존합니다.<br>
                    - 보존 항목 : 이름, 전화번호(휴대전화 또는 집전화), 이메일 주소<br>
                    - 보존 근거 : 신용정보의 이용 및 보호에 관한 법률<br>
                    - 보존 기간 : 3년<br>
                    - 신용정보의 수집/처리 및 이용 등에 관한 기록 : 3년 (신용정보의 이용 및 보호에 관한 법률) </p>
                  <h3 class="subject">3. 개인정보의 제3자 제공</h3>
                  <p> 회사는 이용자들의 개인정보를 "2. 개인정보의 수집목적 및 이용목적"에서 고지한 범위 내에서 사용하며, 이용자의 사전 동의 없이는 동 범위를 초과하여 이용하거나 원칙적으로 이용자의 개인정보를 외부에 공개하지 않습니다. 다만, 아래의 경우에는 예외로 합니다. <br>
                    - 이용자들이 사전에 공개에 동의한 경우<br>
                    - 법령의 규정에 의거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우 </p>
                  <h3 class="subject">4. 개인정보처리의 위탁</h3>
                  <p> 회사는 제3자에게 개인정보를 위탁하고 있지 않으며, 추후 위탁계약이 발생할 경우, 홈페이지를 통해 고지하고, 본 '개인정보취급방침'의 내용을 갱신하도록 하겠습니다. </p>
                  <h3 class="subject">5. 정보주체와 법정대리인의 권리.의무 및 행사방법</h3>
                  <p> 이용자께서 입력한 개인정보는 언제든지 삭제 요청하실 수 있습니다. 회사는 이용자 혹은 법정 대리인의 요청에 의해 삭제 요청 된 개인정보를 "2. 개인정보의 처리 및 보유기간"에 명시된 바에 따라 처리하고 그 외의 용도로 열람 또는 이용할 수 없도록 처리하고 있습니다.<br>
                    만 14세 미만 아동의 경우, 법정대리인이 아동의 개인정보를 조회하거나 수정할 권리, 수집 및 이용 동의를 철회할 권리를 가집니다. </p>
                  <h3 class="subject">6. 처리하는 개인정보 항목</h3>
                  <p> 회사는 고객 상담 및 서비스 신청 접수 등 각종 서비스의 제공을 위해 '성명, 회사명, 이메일 주소, 전화번호(휴대폰번호)'와 같은 개인정보를 수집하고 있습니다.<br>
                    - 개인정보 수집방법 : 홈페이지 &gt; 고객지원 &gt; 온라인문의</p>
                  <h3 class="subject">7. 개인정보의 파기</h3>
                  <p> 이용자의 개인정보는 원칙적으로 개인정보의 수집 및 이용목적이 달성되면 지체 없이 파기합니다. <br>
                    - 파기절차 : 이용자가 고객문의 등을 위해 입력한 정보는 목적이 달성된 후 별도의 DB로 옮겨져 내부 방침 및 기타 관련 법령에 의한 정보보호 사유에 따라 (보유 및 이용기간 참조) 일정 기간 저장된 후 파기합니다.<br>
                    개인정보는 법률에 의한 경우가 아니고서는 다른 목적으로 이용되지 않습니다.<br>
                    - 파기방법 : 서면상의 개인정보는 분쇄/소각을 통하여 파기합니다. 전자적 파일 형태로 저장된 개인정보는 기록을 재생할 수 없도록 파기합니다. </p>
                  <h3 class="subject">8. 개인정보의 안정성 확보조치</h3>
                  <p> 회사는 이용자들의 개인정보를 취급함에 있어 다음과 같은 조치를 취하고 있습니다. <br>
                    - 홈페이지 온라인문의 접수 시, 개인정보 암호화<br>
                    - 홈페이지 관리자 지정 및 접근 권한부여 </p>
                  <h3 class="subject">9. 개인정보 자동 수집 장치의 설치.운영 및 거부에 대한 사항</h3>
                  <p> 회사는 이용자들의 정보를 저장하고 수시로 불러오는 '쿠키(cookie)'를 사용합니다.<br>
                    쿠키는 웹사이트를 운영하는데 이용되는 서버(HTTP)가 이용자의 컴퓨터 브라우저에게 보내는 소량의 정보이며 이용자들의 PC 컴퓨터내의 하드디스크에 저장되기도 합니다.<br>
                    - 쿠키 사용 목적 : 이용자들이 방문한 회사의 각 서비스와 웹 사이트들에 대한 방문 및 이용형태, 인기 검색어, 보안접속 여부, 뉴스편집, 이용자 규모 등을 파악하여 이용자에게 최적화된 정보 제공을 위하여 사용합니다.<br>
                    - 쿠키 설정 거부 방법 : 웹브라우저 상단의 "도구&gt;인터넷옵션&gt;개인정보" 메뉴의 옵션 설정을 통해  쿠키 저장을 거부 할 수 있습니다. </p>
                  <h3 class="subject">10. 개인정보 보호책임자 및 개인정보 열람청구</h3>
                  <p> 회사의 서비스를 이용하시며 발생하는 모든 개인정보보호 관련 민원을 개인정보관리책임자 혹은 담당부서로 신고하실 수 있습니다<br>
                    이용자들의 신고사항에 대해 신속하게 충분한 답변을 드릴 것입니다.<br>
                    - 개인정보 보호책임자 / 개인정보 열람 청구 접수<br>
                    성명 : 박근수<br>
                    직책 : 대표<br>
                    전화번호 : 031-591-8310<br>
                    팩스번호 : 032-591-8311<br>
                    이메일 : sy-elec@naver.com </p>
                  <h3 class="subject">11. 권익침해 구제방법</h3>
                  <p> 아래의 기관에 대해 개인정보 침해에 대한 피해구제, 상담 등을 문의 하실 수 있습니다.<br>
                    - 개인정보 침해신고센터 (privacy.kisa.or.kr / 국번없이 118)<br>
                    - 개인정보 분쟁조정위원회 (www.kopico.go.kr / 국번없이 1833-6972)<br>
                    - 대검찰청 사이버범죄수사단 (www.spo.go.kr / 02-3480-3573)<br>
                    - 경찰청 사이버안전국 (cyberbureau.police.go.kr / 국번없이 182) </p>
                  <h3 class="subject">12. 개인정보 처리방침 변경</h3>
                  <p> 이 개인정보 처리방침은 2015.02.03.부터 적용됩니다. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="agree-area clear">
              <p class="desc"> 에스와이일렉트릭은 개인정보의 처리와 관련하여 위와 같이<br>개인정보가 안전하게 관리될 수 있도록 필요한 사항을 규정하고 있습니다. </p>
              <div class="agrees">
                <input id="check1" type="checkbox" name="agree" value="Y" class="css-checkbox">
                <label for="check1" class="css-checkbox">동의합니다.</label>
              </div>
            </div>
          <!-- // bbs-agree -->
                      <div class="send_btn">
          <input type="button" value="전송" onclick="form_Check();" style="cursor:hand; width:180px; height:48px; border:0; background:#2680eb; color:#ffffff; line-height:48px; font-weight:bold;">
        </div>
      </form>
      <script>
      function form_Check(){		
          if(f1.name.value == ''){
              alert("이름을 입력해주십시오.");
              f1.name.focus();
              return;
          }
          if(f1.company.value == ''){
              alert("회사명을 입력해주십시오.");
              f1.company.focus();
              return;
          }
          if(f1.email1.value == '' || f1.email2.value == ''){
              alert("이메일주소를 완전하게 입력해주십시오.");
              f1.email1.focus();
              return;
          }
          if(f1.tel1.value == '' || f1.tel2.value == '' || f1.tel3.value == ''){
              alert("연락처를 모두 입력해주십시오.");
              f1.tel1.focus();
              return;
          }	
          if(!f1.agree.checked){
              alert("개인정보수집 및 이용에 동의해 주십시오.");
              f1.agree.focus();
              return;
          }
          if(!confirm('온라인문의를 전송하시겠습니까?')) return;
          f1.submit();
      }
      </script>
    </div><!-- article -->
    </div><!--article_right-->
    
</div>
<!--// contents -->
<div class="blank"></div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>