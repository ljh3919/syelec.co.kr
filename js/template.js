/* Skip navi */
$(function(){
    $('a.skip_area').click(function(){
        $(this).css('position', 'absolute').css('top', '-60px');
        $('html, body').stop().animate({scrollTop:0}, 550); 
    });
});


/* utill_nav */ 
$(function(){
    $('.btn_utill_search a').bind('mouseover focusin',function(){
        $('.utill_search').addClass('on').stop().animate({opacity:0}, 0).animate({opacity:1}, 400);
    });
    $('header').mouseleave(function(){
        $('.utill_search').stop().animate({opacity:0}, 350);
        $('.utill_nav_dep').removeClass('on');
        setTimeout(function(){
            $('.utill_search').removeClass('on');
        },400);
    });
    $('.utill_nav .nav a, #gnb a').bind('mouseover focusin',function(){
        $('.utill_search').stop().animate({opacity:0}, 350);
        $('.utill_nav_dep').removeClass('on');
        setTimeout(function(){
            $('.utill_search').removeClass('on');
        },400);
    });
    $('.btn_utill_search a').bind('mouseover focusin',function(){
        $('.utill_search').addClass('on').stop().animate({opacity:0}, 0).animate({opacity:1}, 400);
        $('.utill_nav_dep').removeClass('on');
    });
    
    $('.btn_utill_my').click(function(){
        $('.utill_nav_dep').toggleClass('on');
    });
});


/* GNB */
$(function(){   
    var gnb = $('#gnb');
    var gnb_m = $('a.dep_m');
    var dep2 = $('#gnb .dep2');
    var gnb_h = 90;
    var gnb_rh = 155;
    var gnb_speed = 300;
    
    $('.dep a.dep_m').bind('mouseover focusin',function(){
        gnb.stop().animate({height:gnb_rh}, gnb_speed);
        gnb_m.removeClass('over');
        $(this).addClass('over');
        dep2.css('display', 'none');
        $(this).parent().find('.dep2').css('display', 'block').stop().animate({opacity:0}, 0).animate({opacity:1}, gnb_speed);
    });
    dep2.mouseleave(function(){
        $(this).parent().find('a.dep_m').addClass('over')
    });
    dep2.find('a').mouseover(function(){
        dep2.find('a').removeClass('over');
        $(this).parent().addClass('over');
    });
    gnb.mouseleave(function(){
        gnb.stop().animate({height:gnb_h}, gnb_speed);
        gnb_m.removeClass('over');
        dep2.css('display', 'none');
        dep2.find('a').removeClass('over');
        dep2.find('li.on').parent().parent().css('display', 'block').stop().animate({opacity:0}, 0).animate({opacity:1}, gnb_speed);
        $('.dep_m.on').parent().find('.dep2').css('display', 'block').stop().animate({opacity:0}, 0).animate({opacity:1}, gnb_speed);
        $('#gnb.on').stop().animate({height:gnb_rh}, 0);
    });
    
    gnb.append('<span class=\"gnb_hit\"></span>');
    $('.gnb_hit').attr('tabindex', 0);
    $('.utill_nav a, .gnb_hit').bind('click focusin',function(){
        gnb.stop().animate({height:gnb_h}, gnb_speed);
        gnb_m.removeClass('over');
        dep2.css('display', 'none');
        dep2.find('a').removeClass('over');
        dep2.find('li.on').parent().parent().css('display', 'block');
        $('.dep_m.on').parent().find('.dep2').css('display', 'block');
        $('#gnb.on').stop().animate({height:gnb_rh}, 0);
    });
    
    dep2.find('li.on').parent().parent().parent().parent().parent().parent().addClass('on').stop().animate({height:gnb_rh}, 0);
    dep2.find('li.on').parent().parent().css('display', 'block');
    dep2.find('li.on').parent().parent().parent().find('.dep_m').addClass('on');
    $('.dep_m.on').parent().parent().parent().addClass('on').stop().animate({height:gnb_rh}, 0);
    $('.dep_m.on').parent().find('.dep2').css('display', 'block');
});


/* Main Banner */
$(function(){
    if ($.fn.carouFredSel) {
        $('.mc_banner ul').carouFredSel({
            responsive:true,
            firstLoadChk :true,
            direction:'left',
            circular:true,
            infinite:false,
            auto:true,
            prev:false,
            next:false,
            pagination:'.mc_banner_pagn',
            swipe:{onMouse:false, onTouch:true},
            items:1,    
            scroll:{fx :'crossfade','duration':1000}            
        });
    }
});

/* Main Products */
$.fn.mcProducts = function(){
    $.each(this, function(i,v){
        if ($.fn.carouFredSel) {
            $(v).find('.slide_box > ul').carouFredSel({
                circular: false,
                infinite: false,
                auto: false,
                prev: false,
                next: false,
                pagination: false,
                scroll: {
                    fx :'crossfade',
                    duration: 100,
                    onAfter: function(data){
                        $temp = $(this).triggerHandler('currentPosition');
                        $(v).find('.label_box li').removeClass('active').eq($temp).addClass('active');
                    }
                }
            });
        }
        $(v).find('.label_box ul a').bind('mouseover focusin',function(e){
            e.preventDefault();
            $temp = $(this).parent().index();
            $(v).find('.slide_box ul').trigger('slideTo', $temp);
            
            $('.mc_products .list').removeClass('on');
            $(v).addClass('on');
        });
    });
    return this;
};
$(function(){
    $('.mc_products .list').mcProducts();
    $('.mc_banner li .img').imgLiquid({fill:true, horizontalAlign:"center", verticalAlign:"center"});
    
    $('.mc_products .list').bind('mouseover',function(e){
        $('.mc_products .list').removeClass('on');
        $(this).addClass('on');
    });
    $('.mc_products .list').bind('mouseleave',function(e){
        $(this).removeClass('on');
    });
});

/* Main Products_right */
$.fn.mcProducts = function(){
    $.each(this, function(i,v){
        if ($.fn.carouFredSel) {
            $(v).find('.slide_box > ul').carouFredSel({
                circular: false,
                infinite: false,
                auto: false,
                prev: false,
                next: false,
                pagination: false,
                scroll: {
                    fx :'crossfade',
                    duration: 100,
                    onAfter: function(data){
                        $temp = $(this).triggerHandler('currentPosition');
                        $(v).find('.label_box li').removeClass('active').eq($temp).addClass('active');
                    }
                }
            });
        }
        $(v).find('.label_box ul a').bind('mouseover focusin',function(e){
            e.preventDefault();
            $temp = $(this).parent().index();
            $(v).find('.slide_box ul').trigger('slideTo', $temp);
            
            $('.mc_products .list_right').removeClass('on');
            $(v).addClass('on');
        });
    });
    return this;
};
$(function(){
    $('.mc_products .list_right').mcProducts();
    $('.mc_banner li .img').imgLiquid({fill:true, horizontalAlign:"center", verticalAlign:"center"});
    
    $('.mc_products .list_right').bind('mouseover',function(e){
        $('.mc_products .list_right').removeClass('on');
        $(this).addClass('on');
    });
    $('.mc_products .list_right').bind('mouseleave',function(e){
        $(this).removeClass('on');
    });
});



/* site_area */
$(function(){
    if ($.fn.carouFredSel) {
        $('.site_area_cont').carouFredSel({
            responsive:false,
            firstLoadChk :true,
            direction:'left',
            circular:true,
            infinite:false,
            auto:true,
            prev:'.site_area_prev',
            next:'.site_area_next',
            pagination: false,
            swipe:{onMouse:false, onTouch:true},
            items:9,                
            scroll : {items : 1}
        });
    }
});


/* top btn */
$(function(){
    $('a.btn_top').click(function(){;
        $('html, body').stop().animate({scrollTop:$('#wrap').offset().top}, 800);
        $('#container').focus();
        return false;
    });
});


