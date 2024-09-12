//JQuery 시작
var $ = jQuery;
$(function(){

    //PC navi
    $('#navi, #navi_bg').mouseenter(function(){
        $('#navi .sub_navi, #navi_bg').stop().slideDown('fast');
    }).mouseleave(function(){
        $('#navi .sub_navi, #navi_bg').stop().slideUp('fast');
    });


    //모바일 메뉴 복제
    var naviClon = $('#navi').contents().clone();
    $('.mb_navi_wrap').append(naviClon);


    //모바일 햄버거버튼 클릭시 메뉴 나옴
    $('#mb_btn').click(function(){
        $('#mb_navi_bg, #mb_navi').stop().animate({
            right : 0
        },300);
        //열렸을때 본문 스크롤바 제거
        $('body').css({overflow:'hidden'});
    });

    //닫기버튼 클릭시 모바일 메뉴 우측으로 들어감
    $('#mb_navi_bg, .mb_close').click(function(){
        $('#mb_navi_bg, #mb_navi').stop().animate({
            right : '-100%'
        },300);
        $('.mb_navi_wrap .main_navi > li > a').removeClass('selected');
        $('.mb_navi_wrap .main_navi > li .sub_navi').slideUp('fast');
        //닫혔을때 본문 스크롤바 나타나게
        $('body').css({overflow:'auto'});
    });

    //대메뉴 클릭시 서브메뉴 닫히고 열림
    $('nav.mb_navi_wrap > ul > li > a').click(function(){
        $(this).toggleClass('selected');
        $('nav.mb_navi_wrap > ul > li > a').not(this).removeClass('selected');

        $(this).find('+.sub_navi').slideToggle('fast');
        $('nav.mb_navi_wrap > ul > li > a').not(this).find('+.sub_navi').slideUp('fast');
    });

    //PC화면에서 모바일 메뉴 초기화
    $(window).resize(function(){
        if($(this).outerWidth() > 970){
            $('nav.mb_navi_wrap > ul > li > a').removeClass('selected');
            $('nav.mb_navi_wrap > ul > li .sub_navi').slideUp('fast');
            $('#mb_navi_bg, #mb_navi').css({right:'-100%'});
        }
    });
    $('#mb_navi').mCustomScrollbar({theme:"dark-thin"});  

}); //JQuery 종료