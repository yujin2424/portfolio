<?php if(!defined("__XE__"))exit;?><header class="active">
        <div id="navi_wrap">
        <div id="logo">
            <a href="http://yuyujinport42.dothome.co.kr/momurweekend/main.html"><img src="http://yuyujinport42.dothome.co.kr/momurweekend/img/main/PC_Main/logo_image.png" alt="momur"></a>
        </div>
        <div id="mb_btn">
            <img src="http://yuyujinport42.dothome.co.kr/momurweekend/img/main/Mobile_Main/menu_icon_mm.png" alt="메뉴">
        </div>
        <div id="navi">
            <ul>
                <li><a href="#">BRAND</a>
                    <nav class="sub_navi">
                        <ul>
                            <li><a href="http://yuyujinport42.dothome.co.kr/momurweekend/sub01_01.html">About</a></li>
                        </ul>
                    </nav>   
                </li>
                <li><a href="#">SHOP</a>
                    <nav class="sub_navi">
                        <ul>
                            <li><a href="http://yuyujinport42.dothome.co.kr/momurweekend/sub02_01.html">Item</a></li>
                        </ul>
                    </nav> 
                </li>
                <li><a href="#">EVENT</a>
                    <nav class="sub_navi">
                        <ul>
                            <li><a href="http://yuyujinport42.dothome.co.kr/momurweekend/sub03_01.html">Sale</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </nav> </li>
                <li><a href="#">PHOTO</a>
                    <nav class="sub_navi">
                        <ul>
                            <li><a href="http://yuyujinport42.dothome.co.kr/momurweekend/sub04_01.html">Images</a></li>
                        </ul>
                    </nav> 
                </li>
                <li><a href="#">BOARD</a>
                    <nav class="sub_navi">
                        <ul>
                            <li><a href="http://yuyujinport42.dothome.co.kr/momurweekend/sub05_01.html">Info</a></li>
                            <li><a href="#">Review</a></li>
                            <li><a href="http://yuyujinport42.dothome.co.kr/xe/sub05_03_qna">Q&A</a></li>
                        </ul>
                    </nav> 
                </li>
            </ul>
        </div>
        <form id="sh_f" action="#" method="get"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
            <ul>
                <li>
                    <input type="image" src="http://yuyujinport42.dothome.co.kr/momurweekend/img/main/PC_Main/search_icon.png" alt="검색" id="sh_btn">
                </li>
                <li>
                    <input type="search" name="sc_bar" id="sc_bar" placeholder="검색어를 입력하세요." required pattern="" title="">
                </li>
            </ul>
        </form>
        <div id="login">
            <ul>
                <li><a href="#">Log-in</a></li>
                <li><a href="#">Cart</a></li>
            </ul>
        </div>
        </div><!-- navi_wrap -->
     <div id="navi_bg"></div>   
    </header>
    <!-- 모바일 네비게이션 어두운 배경, 닫기 버튼 -->
    <div id="mb_navi_bg">
        
    </div>
    <!-- 모바일 네비게이션 복사 영역 -->
    <div id="mb_navi">
        <div class="mb_close">
            <span class="material-symbols-outlined">
                close
            </span>
        </div>
        <nav class="mb_navi_wrap">
            <!-- pc:#navi => mobile navi copy : .mb_navi_wrap 안의 ul -->
        </nav>
    </div>
    <!-- 서브페이지 -->
<div id="sub_wrap">
    <div class="h_bg">
        <div class="row_c">
            <h2>BOARD</h2>
            <h3>Q & A</h3>
        </div>
    </div>
               
    <div class="sub_c row_c">
            
        <h4>Q & A</h4>
         
        <div id="sub_board">
           <!-- 게시판 삽입 -->
            <?php echo $__Context->content ?>
        </div>
    </div>
</div>
<div id="footer">
    <div class="row_c">
        <div class="left">
            <div id="first">
            <p>
            상호: 마지 대표:김지혜
            </p>
            <p>
            개인정보관리자: 전상영 전화: 02-6085-1271 이메일: herewegong@naver.com
            </p>
            </div>
            <div id="second">
            <p>
            주소: 서울특별시 마포구 잔다로 127-1 5층 사업자등록번호: 689-08-00570    
            </p>
            <p>
            통신판매: 2020-서울마포-3897 호스팅제공자: (주)식스샵
            </p>
            </div>
        </div><!-- left -->
        <div class="right">
            <ul>
            <li>
                <a href="#">안전구매(에스크로) 서비스 가맹점</a>
            </li>
            <li><a href="#">이용약관</a></li>
            <li><a href="#">개인정보 처리방침</a></li>
            <li><a href="#">사업자 정보확인</a></li>
            </ul>
            <p>
                    ALL RIGHTS RESERVED ⓒ 2007 THE SIXSHOP CO. LT
             </p>
        </div><!-- right --> 
    </div><!-- row_c -->
    
</div><!-- footer -->