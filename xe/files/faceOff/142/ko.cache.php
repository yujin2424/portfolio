<?php if(!defined("__XE__")) exit(); $layout_info = new stdClass;
$layout_info->site_srl = 0;
$layout_info->layout = 'simpleGray';
$layout_info->type = NULL;
$layout_info->path = './m.layouts/simpleGray/';
$layout_info->title = 'XE 심플 그레이 레이아웃';
$layout_info->description = '
        XE 심플 그레이 레이아웃입니다.
        디자인, 퍼블리싱 : 정찬명
        레이아웃 제작 : haneul 
    ';
$layout_info->version = '1.7';
$layout_info->date = '20131127';
$layout_info->homepage = 'https://www.xehub.io/';
$layout_info->layout_srl = $layout_srl;
$layout_info->layout_title = $layout_title;
$layout_info->license = NULL;
$layout_info->license_link = NULL;
$layout_info->layout_type = 'M';
$layout_info->author = array();
$layout_info->author[0] = new stdClass;
$layout_info->author[0]->name = 'XEHub';
$layout_info->author[0]->email_address = 'developers@xpressengine.com';
$layout_info->author[0]->homepage = 'https://www.xehub.io';
$layout_info->extra_var = new stdClass;
$layout_info->extra_var->index_title = new stdClass;
$layout_info->extra_var->index_title->group = NULL;
$layout_info->extra_var->index_title->title = '홈페이지 Title';
$layout_info->extra_var->index_title->type = 'text';
$layout_info->extra_var->index_title->value = $vars->index_title;
$layout_info->extra_var->index_title->description = NULL;
$layout_info->extra_var->index_url = new stdClass;
$layout_info->extra_var->index_url->group = NULL;
$layout_info->extra_var->index_url->title = '홈 페이지 URL';
$layout_info->extra_var->index_url->type = 'text';
$layout_info->extra_var->index_url->value = $vars->index_url;
$layout_info->extra_var->index_url->description = '로고를 클릭시에 이동할 홈 페이지 URL을 입력해 주세요.';
$layout_info->extra_var_count = 2;
$layout_info->menu_count = 1;
$layout_info->menu = new stdClass;
$layout_info->default_menu = 'main_menu';
$layout_info->menu->main_menu = new stdClass;
$layout_info->menu->main_menu->name = 'main_menu';
$layout_info->menu->main_menu->title = '상단 메뉴';
$layout_info->menu->main_menu->maxdepth = '3';
$layout_info->menu->main_menu->menu_srl = $vars->main_menu;
$layout_info->menu->main_menu->xml_file = "./files/cache/menu/".$vars->main_menu.".xml.php";
$layout_info->menu->main_menu->php_file = "./files/cache/menu/".$vars->main_menu.".php";
 $layout_info->header_script = '<script src="http://yuyujinport42.dothome.co.kr/momurweekend/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="http://yuyujinport42.dothome.co.kr/momurweekend/js/navi.js"></script>
 <link rel="stylesheet" href="http://yuyujinport42.dothome.co.kr/momurweekend/css/reset.css">
    <link rel="stylesheet" href="http://yuyujinport42.dothome.co.kr/momurweekend/css/common.css">
    <link rel="stylesheet" href="http://yuyujinport42.dothome.co.kr/momurweekend/css/sub_common.css">
    <link rel="stylesheet" href="http://yuyujinport42.dothome.co.kr/momurweekend/css/sub05_03_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
   <!-- 아이폰 홈화면 아이콘 추가 -->
    <link rel="apple_touch_icon_precomposed" href="http://yuyujinport42.dothome.co.kr/momurweekend/img/main/PC_Main/momur_favicon.png">
    <!-- chrome, safari, ms-edge -->
    <link rel="shortcut icon" href="http://yuyujinport42.dothome.co.kr/momurweekend/img/main/PC_Main/momur_favicon.png">'; 