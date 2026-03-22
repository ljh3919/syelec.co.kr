function setGnb(n1,n2) {    
    var d1Img = $(".navi_dep1_position").eq(n1-1).find("img");
    var d2 = $(".navi_dep2_wrap").eq(n1-1);
    var d2Img = d2.find("img").eq(n2-1);
    d1Img.addClass("on");
    changeFileName(d1Img,"_off.","_on.");
    d2Img.addClass("on");
    changeFileName(d2Img,"_off.","_on.");
}

function eventGnb() {   
    $(".navi_dep1").hover(function() {
        $(".navi_dep2_wrap",this).slideDown("medium");
    },function() {      
        $(".navi_dep2_wrap",this).stop();
        $(".navi_dep2_wrap",this).slideUp("medium");
    });
}

$(document).ready(function(){
    eventGnb();
    //initLnb();
    //initQui();


     //lnb �곹깭�좎�
 try {
  if (dep1 != 0) {
   var li2 = $(".dep2_wrap .onover").eq(dep1-1);
   changeFileName(li2, "_off.", "_on.");
   li2.addClass("on");
  }
 } catch(e) {}

 try {
  if (dep1 != 0) {
   var li2 = $(".mypage_tab_wrap .onover").eq(dep1-1);
   changeFileName(li2, "_off.", "_on.");
   li2.addClass("on");
  }
 } catch(e) {}


    $('#gnb li').bind('mouseenter keyup', function(){
        $(this).addClass('on').siblings().removeClass('on');
    });
    $('#gnb').mouseleave(function(){
        $('#gnb li').removeClass('on');
    });
    $('.sbm').mouseleave(function(){
        $('.sbm').parents('li').removeClass('on');
    });
    $('.sb li a img').mouseover(function(){
        $(this).attr('src',$(this).attr('src').replace('off.gif','ov.gif'));
        $(this).parents('.sb li').css('background','url(/image/blt_sbm_ov.gif) no-repeat 0 2px')
    });
    $('.sb li a img').mouseleave(function(){
        $(this).attr('src',$(this).attr('src').replace('ov.gif','off.gif'));
        $(this).parents('.sb li').css('background','none')
    });
    $('.quickMenu li a img').mouseover(function(){
        $(this).attr('src',$(this).attr('src').replace('off.gif','ov.gif'));
    });
    $('.quickMenu li a img').mouseleave(function(){
        $(this).attr('src',$(this).attr('src').replace('ov.gif','off.gif'));
    });
    $('#tnb li a img').mouseover(function(){
        $(this).attr('src',$(this).attr('src').replace('off.gif','ov.gif'));
    });
    $('#tnb li a img').mouseleave(function(){
        $(this).attr('src',$(this).attr('src').replace('ov.gif','off.gif'));
    });
    $('#lnb ul li a img').mouseover(function(){
        $(this).attr('src',$(this).attr('src').replace('off.gif','ov.gif'));
    });
    $('#lnb ul li a img').mouseleave(function(){
        $(this).attr('src',$(this).attr('src').replace('ov.gif','off.gif'));
    });
    $('.sitemap li a img').mouseover(function(){
        $(this).attr('src',$(this).attr('src').replace('off.gif','ov.gif'));
    });
    $('.sitemap li a img').mouseleave(function(){
        $(this).attr('src',$(this).attr('src').replace('ov.gif','off.gif'));
    });
    $('.dp01 + ul').mouseover(function(){
        $('.dp01 img').attr('src',$('.dp01 img').attr('src').replace('off.gif','ov.gif'));
    });
    $('.dp01 + ul').mouseleave(function(){
        $('.dp01 img').attr('src',$('.dp01 img').attr('src').replace('ov.gif','off.gif'));
    });
    $('.dp02 + ul').mouseover(function(){
        $('.dp02 img').attr('src',$('.dp02 img').attr('src').replace('off.gif','ov.gif'));
    });
    $('.dp02 + ul').mouseleave(function(){
        $('.dp02 img').attr('src',$('.dp02 img').attr('src').replace('ov.gif','off.gif'));
    });
    $('.dp03 + ul').mouseover(function(){
        $('.dp03 img').attr('src',$('.dp03 img').attr('src').replace('off.gif','ov.gif'));
    });
    $('.dp03 + ul').mouseleave(function(){
        $('.dp03 img').attr('src',$('.dp03 img').attr('src').replace('ov.gif','off.gif'));
    });
    $('.dp04 + ul').mouseover(function(){
        $('.dp04 img').attr('src',$('.dp04 img').attr('src').replace('off.gif','ov.gif'));
    });
    $('.dp04 + ul').mouseleave(function(){
        $('.dp04 img').attr('src',$('.dp04 img').attr('src').replace('ov.gif','off.gif'));
    });
    $('#viewPhoto .smPview li img').click(function(){
        for(i=0; i<$('#viewPhoto .smPview li').length; i++){
            $('#viewPhoto .smPview li:eq('+i+') img').attr('src',$('#viewPhoto .smPview li:eq('+i+') img').attr('src').replace('ov.jpg','off.jpg'));
        }
        $(this).attr('src',$(this).attr('src').replace('off.jpg','ov.jpg'));
        $('#viewPhoto .bigPview').html('<img src="/image/sub3/'+$(this).attr('title')+'.jpg" alt="�쒕룞�ъ쭊" />');
    });
    $('#viewPhoto2 .smPview li img').click(function(){
        for(i=0; i<$('#viewPhoto2 .smPview li').length; i++){
            $('#viewPhoto2 .smPview li:eq('+i+') img').attr('src',$('#viewPhoto2 .smPview li:eq('+i+') img').attr('src').replace('ov.jpg','off.jpg'));
        }
        $(this).attr('src',$(this).attr('src').replace('off.jpg','ov.jpg'));
        $('#viewPhoto2 .bigPview').html('<img src="/image/sub3/'+$(this).attr('title')+'.jpg" alt="�쒕룞�ъ쭊" />');
    });
    $('#viewPhoto3 .smPview li img').click(function(){
        for(i=0; i<$('#viewPhoto3 .smPview li').length; i++){
            $('#viewPhoto3 .smPview li:eq('+i+') img').attr('src',$('#viewPhoto3 .smPview li:eq('+i+') img').attr('src').replace('ov.jpg','off.jpg'));
        }
        $(this).attr('src',$(this).attr('src').replace('off.jpg','ov.jpg'));
        $('#viewPhoto3 .bigPview').html('<img src="/image/sub3/'+$(this).attr('title')+'.jpg" alt="�쒕룞�ъ쭊" />');
    });
    $('#viewPhoto4 .smPview li img').click(function(){
        for(i=0; i<$('#viewPhoto4 .smPview li').length; i++){
            $('#viewPhoto4 .smPview li:eq('+i+') img').attr('src',$('#viewPhoto4 .smPview li:eq('+i+') img').attr('src').replace('ov.jpg','off.jpg'));
        }
        $(this).attr('src',$(this).attr('src').replace('off.jpg','ov.jpg'));
        $('#viewPhoto4 .bigPview .photo').html('<img src="/image/sub3/'+$(this).attr('title')+'.jpg" alt="�쒕룞�ъ쭊" />');
        $('#viewPhoto4 .bigPview .title').html($(this).attr('alt'));
    });
    var pagingList = $('.paging li').length;
    var pagingNum = parseInt(pagingList-2);
    var paingBoxWidth = pagingNum*18+58;
    var paingBoxWidth2 = pagingNum*18+122;
    if(pagingList==3){
        $('.paging ul').css('width',paingBoxWidth);
    }
    else{
        $('.paging ul').css('width',paingBoxWidth2);
    }
});

function flash(url,w,h,id){
     var flashStr=
     "<object classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' codebase='http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0' width='"+w+"' height='"+h+"' id='"+id+"' align='middle'>"+
     "<param name='movie' value='"+url+"' />"+
     "<param name='wmode' value='transparent' />"+
     "<param name='bgcolor' value='#ffffff' />"+
     "<param name='menu' value='false' />"+
     "<param name='quality' value='high' />"+
     "<param name='base' value='.' />"+
     "<param name='stageMode' value='noScale' />"+
     "<embed src='"+url+"' base='.' menu='false' quality='high'  width='"+w+"' height='"+h+"' name='"+id+"' wmode='transparent' bgcolor='#ffffff' align='middle' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer' />"+
     "</object>" ; 
     document.write(flashStr);
    }
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}

function bookmarksite() { 
   var url = window.location;
   var title = window.document.title;

   if (window.sidebar) // firefox 
   window.sidebar.addPanel(title, url, ""); 
   else if(window.opera && window.print)
   { // opera 
      var elem = document.createElement('a'); 
      elem.setAttribute('href',url); 
      elem.setAttribute('title',title); 
      elem.setAttribute('rel','sidebar'); 
      elem.click(); 
   } 
   else if(document.all) // ie
   window.external.AddFavorite(url, title); 
}

/* ZonnInOut */
    var nowZoom = parseInt(100); // �꾩옱鍮꾩쑉
    var maxZoom = parseInt(200); // 理쒕�鍮꾩쑉
    var minZoom = parseInt(100); // 理쒖냼鍮꾩쑉(�꾩옱�� 媛숈븘�� ��)
        //�붾㈃ �ㅼ슫��.
    function zoomIn() {
        if (nowZoom < maxZoom) {
            nowZoom += 10; // 25%�� 而ㅼ쭊��.
        } else {
            return;
        }

        document.body.style.zoom = nowZoom + "%";
    }
    
    //�붾㈃ 以꾩씤��.
    function zoomOut() {
        if (nowZoom > minZoom) {
            nowZoom -= 10; // 25%�� �묒븘吏꾨떎.
        } else {
            return;
        }

        document.body.style.zoom = nowZoom + "%";
    }

    //�붾㈃ 洹몃�濡�
     function zoomBasic() {
     {nowZoom = 100; //洹몃�濡�
        }
      document.body.style.zoom = nowZoom + "%";
     }


/*�고렪踰덊샇李얘린*/
function postWinOpen(data) {
    window.open("/sub/post_search.php?method="+data, "","scrollbars=yes, width=500, height=400");
}



/*鍮꾨�踰덊샇李얘린 硫붾돱異붽�*/
function change_type(gubun){
    if(gubun=="2"){
        $('#hint_div').show();
    }
    else{
        $('#hint_div').hide();
    }
}

/* ��쿂由� */
function initTabImg(b, l , fn, fn2) {
        $(b).each(function(i) {
            $(this).click(function() {
                $(l).hide();
                $(l).eq(i).show();
                changeLastFileName($(b), fn2, fn);
                changeLastFileName($(b).eq(i), fn, fn2);
            });
            
        });
    }

function initTab(o) {
    //Defulat 珥덇린��
    if (o.eventType == undefined) o.eventType = "click keyup";
    if (o.onClsName == undefined) o.onClsName = "hover_on";
    //蹂��섏���
    var btn = o.btnClsName;
    var lays = o.lays;

    $(btn).each(function(i) {
        //�대깽�몃벑濡�
        $(this).parent("a").bind(o.eventType, function(e) {
            if (e.keyCode == 13 || e.keyCode == null) { //留덉슦�ㅻ굹 �뷀꽣��
                //�④낵泥섎━
                for (var j = 0; j < lays.length; j++) {
                    var lay = $(lays[j]);
                    switch (o.effect) {
                        case "fade" :
                            lay.hide();
                            lay.eq(i).fadeIn("fast");
                        break;
                        default :                       
                            lay.hide();
                            lay.eq(i).show();
                        break;
                    }
                }
            
                //踰꾪듉���낆뿉�곕Ⅸ �대�吏�蹂�寃쎌쿂由�
                switch (o.btnType) {
                    case "cls" :
                        $(btn).removeClass(o.hoverClsName);
                        $(btn).removeClass(o.onClsName);
                        $(btn).eq(i).addClass(o.onClsName);
                    break;
                    case "img" :
                        $(btn).removeClass(o.onClsName);
                        $(btn).removeClass("on");
                        changeImgSrc($(btn), o.onFileName, o.offFileName);
                        changeImgSrc($(btn), o.hoverFileName, o.offFileName);

                        $(btn).eq(i).addClass(o.onClsName);
                        $(btn).eq(i).addClass("on");
                        changeImgSrc($(btn).eq(i), o.offFileName, o.onFileName);
                        changeImgSrc($(btn).eq(i), o.hoverFileName, o.onFileName);
                        //alert(1);
                    break;
                }
                return false;
            }
        });
        //濡ㅼ삤踰꾩떆 濡ㅼ삤踰꾩쿂由�
        if (o.rollOver == "Y") {
            switch (o.btnType) {
                case "cls" : //�대옒�ㅼ뿉�쒖쓽 濡ㅼ삤踰� 泥섎━�� css濡� 泥섎━�쒕떎.
                    $(this).hover(function(){
                        $(btn).removeClass(o.hoverClsName);
                        if (! $(this).hasClass(o.onClsName))
                        $(this).addClass(o.hoverClsName);
                    },function() {
                        $(this).removeClass(o.hoverClsName);
                    });
                    
                break;
                case "img" :                    
                    $(this).hover(function(){               
                        $(this).addClass(o.onClsName);
                        if (! $(this).hasClass("on")) {
                            changeImgSrc($(this), o.offFileName, o.hoverFileName);
                        }
                    },function() {
                        $(this).removeClass(o.onClsName);                       
                        if (! $(this).hasClass("on")) {
                            changeImgSrc($(this), o.hoverFileName, o.offFileName);
                        }
                    });
                break;
            }
        }
        
            
        if (i == 0) {
            //泥ル쾲吏� 踰꾪듉 泥섎━
            $(btn).eq(i).addClass("on");
        } else { //�섎㉧吏� �덉씠�� 泥섎━ 
            for (var j = 0; j < lays.length; j++) {
                var lay = $(lays[j]);
                lay.eq(i).css("display", "none");
            }
        }
            
    });
    //踰꾪듉 css 泥섎━
    $(btn).css("cursor", "pointer");
}

function initTabImg2(b, l , fn, fn2) {
        $(b).each(function(i) {
            $(this).hover(function() {
                $(l).hide();
                $(l).eq(i).show();
                changeLastFileName($(b), fn2, fn);
                changeLastFileName($(b).eq(i), fn, fn2);
            });
            
        });
    }

    /* �대�吏� 濡ㅼ삤踰� 泥섎━ */
    function hoverImgSrc(els, on, off) {
        $(els).hover(
            function() {
                changeLastFileName($(this), off, on);
            },
            function() {
                changeLastFileName($(this), on, off);
            }
        );
    }

    //function hoverImgSrc(els, on, off) {
    //  $(els).hover(
    //      function() {
    //          changeLastFileName($(this), off, on);
    //      },
    //      function() {
    //          changeLastFileName($(this), on, off);
    //      }
    //  );
    //}

    //�대�吏� 濡ㅼ삤踰� 泥섎━ v1.0
    function hoverImgSrc(els, off, on) {
        $(els).hover(
            function() {
                if (!$(this).hasClass("on")) {
                    changeImgSrc($(this), off, on);
                }
            },
            function() {
                if (!$(this).hasClass("on")) {
                    changeImgSrc($(this), on, off);
                }
            }
        );
    }

    /* �뚯씪 �룸�遺� �대쫫蹂�寃� */
    function changeLastFileName(el, fn, fn2) {
        $(el).each(function() {
            $(this).attr("src", $(this).attr("src").replace(fn, fn2));
        });
    }

    //�뚯씪 �룸�遺� �대쫫蹂�寃� v1.0
    function changeFileName(el, fileName_from, fileName_to) {
        $(el).each(function() {
            $(this).attr("src", $(this).attr("src").replace(fileName_from, fileName_to));
        });
    }


/* ��쿂由� �⑥닔 v2.6 */
/*
- 湲곕낯
btnType:"img","cls" - �대�吏��몄� �대옒�ㅼ씤吏�
btnClsName: - 踰꾪듉�� �대옒�ㅼ씠由�
layClsName: - �덉씠�댁쓽 �대옒�ㅼ씠由�

- �대�吏�
hoverFileName: - 留덉슦�� �щ졇�꾩떆 �뚯씪�대쫫
offFileName: - 留덉슦�� �섍컮�꾨븣�� �뚯씪�대쫫
onFileName: - �쒖꽦�� �섏뿀�꾨븣 �뚯씪�대쫫

- �대옒��
hoverClsName: - 留덉슦�� �щ졇�꾩떆 �대옒�쒖씠由�
onClsName:"on" - �쒖꽦�� �섏뿀�꾨븣�� �대옒�ㅼ씠由�

- 湲고�
eventType:"click","mouseenter"
effect:"fade"
rollOver:"N","Y" - 濡ㅼ삤踰� �대�吏� �щ�
initTab({btnType:"img",btnClsName:"#mi_brd .mi_brd_tab",lays:["#mi_brd .mi_brd_lay", "#mi_brd .mi_brd_more"],offFileName:".",onFileName:"_on.",hoverFileName:"_on.",rollOver:"N"});
*/

function initTab(o) {
    //Defulat 珥덇린��
    if (o.eventType == undefined) o.eventType = "click keyup";
    if (o.onClsName == undefined) o.onClsName = "hover_on";
    //蹂��섏���
    var btn = o.btnClsName;
    var lays = o.lays;

    $(btn).each(function(i) {
        //�대깽�몃벑濡�
        $(this).parent("a").bind(o.eventType, function(e) {
            if (e.keyCode == 13 || e.keyCode == null) { //留덉슦�ㅻ굹 �뷀꽣��
                //�④낵泥섎━
                for (var j = 0; j < lays.length; j++) {
                    var lay = $(lays[j]);
                    switch (o.effect) {
                        case "fade" :
                            lay.hide();
                            lay.eq(i).fadeIn("slow");
                        break;
                        default :                       
                            lay.hide();
                            lay.eq(i).show();
                        break;
                    }
                }
            
                //踰꾪듉���낆뿉�곕Ⅸ �대�吏�蹂�寃쎌쿂由�
                switch (o.btnType) {
                    case "cls" :
                        $(btn).removeClass(o.hoverClsName);
                        $(btn).removeClass(o.onClsName);
                        $(btn).eq(i).addClass(o.onClsName);
                    break;
                    case "img" :
                        $(btn).removeClass(o.onClsName);
                        $(btn).removeClass("on");
                        changeImgSrc($(btn), o.onFileName, o.offFileName);
                        changeImgSrc($(btn), o.hoverFileName, o.offFileName);

                        $(btn).eq(i).addClass(o.onClsName);
                        $(btn).eq(i).addClass("on");
                        changeImgSrc($(btn).eq(i), o.offFileName, o.onFileName);
                        changeImgSrc($(btn).eq(i), o.hoverFileName, o.onFileName);
                        //alert(1);
                    break;
                }
                return false;
            }
        });
        //濡ㅼ삤踰꾩떆 濡ㅼ삤踰꾩쿂由�
        if (o.rollOver == "Y") {
            switch (o.btnType) {
                case "cls" : //�대옒�ㅼ뿉�쒖쓽 濡ㅼ삤踰� 泥섎━�� css濡� 泥섎━�쒕떎.
                    $(this).hover(function(){
                        $(btn).removeClass(o.hoverClsName);
                        if (! $(this).hasClass(o.onClsName))
                        $(this).addClass(o.hoverClsName);
                    },function() {
                        $(this).removeClass(o.hoverClsName);
                    });
                    
                break;
                case "img" :                    
                    $(this).hover(function(){               
                        $(this).addClass(o.onClsName);
                        if (! $(this).hasClass("on")) {
                            changeImgSrc($(this), o.offFileName, o.hoverFileName);
                        }
                    },function() {
                        $(this).removeClass(o.onClsName);                       
                        if (! $(this).hasClass("on")) {
                            changeImgSrc($(this), o.hoverFileName, o.offFileName);
                        }
                    });
                break;
            }
        }
        
            
        if (i == 0) {
            //泥ル쾲吏� 踰꾪듉 泥섎━
            $(btn).eq(i).addClass("on");
        } else { //�섎㉧吏� �덉씠�� 泥섎━ 
            for (var j = 0; j < lays.length; j++) {
                var lay = $(lays[j]);
                lay.eq(i).css("display", "none");
            }
        }
            
    });
    //踰꾪듉 css 泥섎━
    $(btn).css("cursor", "pointer");
}

//�대�吏� 濡ㅼ삤踰� 泥섎━ v1.0
function hoverImgSrc(els, off, on) {
    $(els).hover(
        function() {
            if (!$(this).hasClass("on")) {
                changeFileName($(this), off, on);
            }
        },
        function() {
            if (!$(this).hasClass("on")) {
                changeFileName($(this), on, off);
            }
        }
    );
}

//�덉씠�댄뙘�낆쓣 蹂댁씤��. v1.1
//showLayPop("#lay");
//#lay { width:100px; height:100px; background:white; display:none;}
function showLayPop(box) {
    var x = procLayPop(box);
    x.show();
}

//�덉씠�댄뙘�낆쓣 �④릿��. v1.1
//hideLayPop("#lay");
function hideLayPop(box) {
    var box = $(box);
    box.next().remove(); //bg�쒓굅
    box.hide(); //�덉씠�댁닲源�
}


//�덉씠�댄뙘�� 泥섎━怨쇱젙
function procLayPop(box) {
    //scrollTop 援ы븯湲�
    var scrollTop;
    var ua = navigator.userAgent;
    if (ua.indexOf("Chrome") > -1 || ua.indexOf("Safari") > -1) {
        scrollTop = document.body.scrollTop;
    } else {
        scrollTop = document.documentElement.scrollTop;
    }

    //box �쒖뼱
    var box = $(box);
    box.css("z-index","10001");
    box.css("position","absolute");
    box.css("left",(document.body.clientWidth-box.width())/2);
    box.css("top",scrollTop + (document.documentElement.clientHeight-box.height())/2 );         

    //bg �쒖뼱
    var bg = $("<div id='lay_pop_bg'></div>").insertAfter(box);
    bg.css("opacity","0.5");
    bg.css("z-index","10000");
    bg.css("background","black");
    bg.css("position","absolute");
    bg.css("left","0px");
    bg.css("top","0px");
    bg.width("100%");
    //bg.height(document.body.scrollHeight);
    bg.height($(document).height());

    return box;
}

//諛곕꼫 v1.2
//banner(".btn", ".lay", 500);
function banner(btn, lay, sec) {
    var idx = 0;
    
    var btn = $(btn);
    var lay = $(lay);

    //rollBann
    var bannItv = setInterval(rollBann, sec);

    //bindEvent
    //�ㅻ쾭濡�
//  btn.each(function(i) {
//      $(this).hover(function() {
//          idx = i-1;
//          clearInterval(bannItv);         
//          rollBann();
//      }, function() {
//          bannItv = setInterval(rollBann, sec);
//      });
//  });

    //�대┃�쇰줈
    btn.each(function(i) {
        $(this).hover(function() {
            idx = i-1;
            clearInterval(bannItv);         
            
        }, function() {
            bannItv = setInterval(rollBann, sec);
        });

        $(this).click(function() {
            rollBann();
        });
    });

    function rollBann() {
        ++idx;
        if (idx > lay.length-1) {
            idx = 0;
        }

        //console.log(idx);

        //rollLay
        //lay.fadeOut("fast");
        //lay.eq(idx).fadeIn("fast");
        //�⑥븙 ie �먯꽌 �④낵 �덈㉨��

        
        //lay.find("*").fadeOut("fast"); //紐⑤몢 �꾩썐
        //lay.eq(idx).find("*").fadeIn("fast"); //吏�湲덇볼 ��
        //lay.eq(idx).show(); //吏�湲� 遺�紐� ��
        
        lay.fadeOut("fast"); //吏�湲� 遺�紐� ��
        lay.eq(idx).fadeIn("fast"); //吏�湲� 遺�紐� ��
        
        

        //rollBtn
        if (btn != null) {
            changeImgSrc(btn, "_on.", "_off.");
            changeImgSrc(btn.eq(idx), "_off.", "_on.");
        }
    }       
}

//�뚯씪 �룸�遺� �대쫫蹂�寃� v1.1
function changeImgSrc(img, fileName_from, fileName_to) {
    $(img).each(function() {
        $(this).attr("src", $(this).attr("src").replace(fileName_from, fileName_to));
    });
}