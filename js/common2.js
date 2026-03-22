$(function(){

    var search_flag = false;
    //?ßãóëªÎð¤åÙ

        $(window).scroll(function () {
            if(search_flag){
                $('.search_box_wrap').fadeOut(300);
                search_flag = false;
            }
        });
        $('.click_close').click(function() {
            $('.search_box_wrap').fadeOut(300);
                search_flag = false;
        });

        $('#gnav06').click(function() {
            var y = window.pageYOffset;

            if(y == 0){
                $('.search_box_wrap').fadeIn(300);
                $('.gsc-input').focus();
                search_flag = true;
            }else{
                $('html,body').animate({ scrollTop: 0 }, 400,function(){
                    search_flag = true;
                    $('.search_box_wrap').fadeIn(300);
                    $('.gsc-input').focus();
                });
            }


        });



    //ð²ù¡ìé? table theadðàïÚ
    var th_border_bottom_check = function(th_element,len) {
            th_element
            .each(function(){
                if(len == 1 || $(this).attr("rowspan") == 2) {
                    $(this).css('border-bottom','none')
                }
            });
    }

    $('.products_list_detail_thead')
        .each( function( index, element ) {
            var thead_len = $(this).children().length;
            th_border_bottom_check($(this).find('th'),thead_len);
        });

    //ð²ù¡ìé? float marginðàïÚéÄ
    var mraginR0 = function( num, classname ) {
        var $showcase = $( '.products_find_list' );
        var count = 0;

        $showcase
        .find( classname )
        .children()
        .each( function( index, element ) {

            if( $(element)[0].nodeName == 'DT' ){
                count = 0;
            }
            else
            {
                if ( count % num === 0 ) {
                    $( element ).css( { "margin-left": 0} )
                }
                count++
            }
        });
    };

    mraginR0( 4, '.short' );
    mraginR0( 3, '.middle' );
    mraginR0( 2, '.long' );

    mraginR0( 2, '.ttl_long' );

    //úþãÒìé? «ê«¹«ÈðàïÚ
    var model_list_adj = function(){
        $list = $('.products_list_detail_fl_model');

        var list_w = $list.find('dt').width()

        $list
            .each( function(index){
                var len = $(this).children().length;

             if(len % 2 == 0){
                // $(this).children().last().css('width','213px');
                $(this).children().last().css('width',list_w - 26 + 'px');
             }

            });
    }


    model_list_adj();



    //«Æ?«Ö«ë?õîªÎÌ¿ùêª¬ª¢ªëíÞùê ª½ªÎ£±
    //tth_adj ªÎclassª«ªééÏ?ª«Ðô?ª«÷÷?
    //2Ó«ªÞªÇª·ª«??ª·ªÆª¤ªÞª»ªó
    var th_group_color = function(_this) {
        var $this = $(_this);

        $this
            .find('.tth_adj')
            .each(function( index, element ){
                if(index % 2 != 0){
                    var $this_parent = $(this).parent();
                    $this_parent.find('th').addClass('bg_color');
                    $this_parent.find('td').addClass('bg_color');

                    //Ì¿ùêªµªìªÆª¤ªÊª¤íÞùê
                    if($(this).attr('rowspan') != undefined){
                        $this_parent.next().find('th').addClass('bg_color');
                        $this_parent.next().find('td').addClass('bg_color');
                    }
                }
            })

    }

$(".th_group_color")
.each(function(index,element){
    th_group_color(this);
});

    //«Æ?«Ö«ë?õîªÎÌ¿ùêª¬ª¢ªëíÞùê ª½ªÎ2
    var td_group_color = function(_this) {

        $(_this)
            .find('.td_rowspan_adj')
            .each(function( index, element ){

                var max_rowspan = 0;
                var eq = $(this).index();
                var eq_max;

                $(this).children().each(function( index, element ){
                    var this_rowspan = $(element).attr('rowspan');
                    if (max_rowspan < this_rowspan) {
                        max_rowspan = Number(this_rowspan);
                    }
                });

                eq_max = eq + max_rowspan - 1;

                if(index % 2 != 0){

                    $(this).find('th').addClass('bg_color');
                    $(this).find('td').addClass('bg_color');

                    for (var i = eq + 1; i <= eq_max; i++) {
                            var $that = $(this).parent().find('tr').eq(i);
                            $that.find('th').addClass('bg_color');
                            $that.find('td').addClass('bg_color');
                    }
                }
            })

    }

$(".td_group_color")
.each(function(index,element){
    td_group_color(this);
});


function table_num_w_adj(){

    $("table td .note")
        .parent()
        .each(function(index,element){

            var _w = $(this).find('.note').width() + 50;

            var that = $(this).wrapInner( '<span class="note_wrap"></span>' );
            $(this).css('width', _w + 'px');
            $(this).find('.note_wrap').css('display','inline-block');
        });

}

table_num_w_adj();





function top_scrollbar_add_main( ) {

    var that = $('.top_scrollbar');

    $(that).each(function(index,element){

        this_parent = $(this).parent();
        this_parent_flag = $(this_parent).hasClass('scroll_right');

        if( this_parent_flag ) {
            top_scrollbar_add(this_parent);
        }

    });

    function top_scrollbar_add (_this_parent) {

        var $left_selector = $(_this_parent).prev();
        var $right_selector = $(_this_parent);

        var right_box_w = $right_selector.width();
        var right_table_w = $right_selector.find('.products_list_detail_table').width();
        var set_html = '<td style="position: relative;"><div class="top_scrollbar_div" style="position: absolute; overflow-x: scroll; height: 19px; width:' + right_box_w + 'px; background: #fff; top: 0; left: 0;"><div style="width:' + right_table_w +'px; height: 1px; "></div></div></td>';


        $left_selector.find('.products_list_detail_tbody tr:first-child').css('height', '53px');
        $right_selector.find('.top_scrollbar .products_list_detail_thead').append(set_html);

        var $scrollbar_div = $right_selector.find('.top_scrollbar_div');

        var $shadow_left = $right_selector.find('.shadow_left');
        var $shadow_right = $right_selector.find('.shadow_right');


        $scrollbar_div.scroll(function() {
            var _x = $(this).scrollLeft();

            $(this).css('left', _x + 'px');
            $right_selector.scrollLeft(_x);


            switch (true){
                case _x == 0:
                    $shadow_left.width(0);
                    break;
                case _x == right_box_w:
                    $shadow_right.width(0);
                    break;
                case _x > 0:
                    $shadow_left.width(10);
                    $shadow_right.width(10);
                    break;
            }

            $shadow_left.css('left', _x + "px");
            $shadow_right.css('right', '-' + _x + "px");


        });

        $right_selector.scroll(function() {
            var _x = $(this).scrollLeft();
            var box_x = $scrollbar_div.position()['left'];
            $scrollbar_div.css('left', _x + 'px');
            $scrollbar_div.scrollLeft(_x);
        });


    }



}

    //«¹«¯«í?«ë«Ð???ªÎ«Æ?«Ö«ëªËî¢Ï°õéª¹ªë¡£
    scroll_set(170,480,'b_pattern');
    scroll_set(170,480,'c_pattern');
    scroll_set(100,550,'d_pattern');
    scroll_set(100,550,'e_pattern');
    scroll_set(100,550,'f_pattern');

    top_scrollbar_add_main();

    function scroll_set(_w,_y,pattern) {

        $(".js_scroll." + pattern)
        .each(function(index,element) {
            scroll_add(this, _w, _y, pattern);
        });

        var that = $(".products_list_detail_scroll." + pattern);

        //Ï°õéª·ª¿ý­ªË?ãÞÝ»ÝÂªÎðàïÚ
        switch(pattern) {
            case 'b_pattern':
                $(that).each(function(index,element){
                    scroll_shadow_add(this);
                    colspan_fix_txt(this);
                    hover_scroll(this);
                });
                break;
            case 'c_pattern':
                $(that).each(function(index,element){
                    scroll_shadow_add(this);
                    colspan_fix_txt(this);
                    hover_scroll(this);
                });
                break;
            case 'd_pattern':
                $(that).each(function(index,element){
                    scroll_shadow_add(this);
                    colspan_fix_txt(this);
                    hover_scroll_2(this);
                });
                break;
            case 'e_pattern':
                $(that).each(function(index,element){
                    scroll_shadow_add(this);
                    colspan_fix_txt(this);
                    hover_scroll_3(this);
                });
                break;
            case 'f_pattern':
                $(that).each(function(index,element){
                    scroll_shadow_add(this);
                    colspan_fix_txt(this);
                    hover_scroll_2(this);
                });
                break;
        }

    }

    function scroll_add (_this,_left_w,_right_w,pattern) {

        var $table_clone_base = $(_this);
        var $wrap_selector;
        var $left_selector;
        var $right_selector;

        var left_w = _left_w;
        var right_w = _right_w;

        var wrap_class = 'products_list_detail_scroll'
        var left_class = 'scroll_left';
        var right_class = 'scroll_right';

        var wrap_div_add = '<div class="' + wrap_class + ' ' + pattern + ' clearfix"></div>';
        var left_div_add = '<div style="width:' + left_w + 'px;" class="' + left_class + '"></div>';
        var right_div_add = '<div style="width:' + right_w + 'px;" class="' + right_class + '"></div>';

        var hList=new Array();


        $table_clone_base.before(wrap_div_add);
        $wrap_selector = $table_clone_base.prev();

        $table_clone_base.remove();

        $wrap_selector.append(left_div_add);
        $wrap_selector.append(right_div_add);

        $left_selector = $wrap_selector.find('.' + left_class);
        $right_selector = $wrap_selector.find('.' + right_class);

        $left_selector.append($table_clone_base.clone());
        $right_selector.append($table_clone_base.clone());

        switch(pattern) {
            case 'b_pattern':

                $left_selector.find('.products_list_detail_thead tr:nth-child(1) th:last-child').remove();
                $left_selector.find('.products_list_detail_thead tr:nth-child(2)').remove();
                $left_selector.find('.products_list_detail_tbody td').remove();

                $right_selector.find('.products_list_detail_thead tr:nth-child(1) th:first-child').remove();
                $right_selector.find('.products_list_detail_tbody').find("th").remove();


                // éÓ«Ü«Ã«¯«¹ªÎÊÀé©áÈÍÔªµö¢Ôð
                $right_selector
                    .find('tr')
                    .each( function( index, element ){
                        var tr_h = $(this).height();
                        hList.push(tr_h);
                        $(this).height(tr_h);
                    });

                // ö¢Ôðª·ª¿ÍÔªµðàïÚ
                hList.shift();
                hList[0] = hList[0] + hList[1] + 1;
                hList[hList.length -1] = 50;

                break;

            case 'c_pattern':
                $left_selector.find('.products_list_detail_thead tr:nth-child(1) th')
                    .each( function(index, element){
                        if(index != 0){
                            // element.remove();
                            if (element.parentNode) {
                                element.parentNode.removeChild(this);
                            }
                        }
                    })
                $left_selector.find('.products_list_detail_tbody td').remove();

                $right_selector.find('.products_list_detail_thead tr:nth-child(1) th:first-child').remove();
                $right_selector.find('.products_list_detail_tbody').find("th").remove();
                $right_selector.find('.products_list_detail_table').css('width','200%');

                // éÓ«Ü«Ã«¯«¹ªÎÊÀé©áÈÍÔªµö¢Ôð
                $right_selector
                    .find('tr')
                    .each( function( index, element ){
                        var tr_h = $(this).height();
                        hList.push(tr_h);
                        $(this).height(tr_h);
                    });

                // ö¢Ôðª·ª¿ÍÔªµðàïÚ
                hList[hList.length -1] = 50;
                break;

            case 'd_pattern':

                $left_selector.find('.products_list_detail_thead th:nth-child(2)').remove();
                $left_selector.find('.products_list_detail_thead tr:nth-child(2)').remove();
                $left_selector.find('.products_list_detail_tbody td').remove();

                $right_selector.find('.products_list_detail_thead tr:nth-child(1) th:first-child').remove();
                $right_selector.find('.products_list_detail_tbody').find("th").remove();
                $right_selector.find('.products_list_detail_table').css('width','160%');

                // éÓ«Ü«Ã«¯«¹ªÎÊÀé©áÈÍÔªµö¢Ôð

                $right_selector
                    .find('tr')
                    .each( function( index, element ){
                        var tr_h = $(this).height();
                        hList.push(tr_h);
                        $(this).height(tr_h);
                    });

                // ö¢Ôðª·ª¿ÍÔªµðàïÚ
                hList[0] = hList[0] + hList[1];
                hList[1] = hList[2];
                hList[hList.length -2] = 50;
                break;

            case 'e_pattern':

                $left_selector.find('.products_list_detail_thead th')
                    .each( function(index, element){
                        if(index != 0){
                            // element.remove();
                            if (element.parentNode) {
                                element.parentNode.removeChild(this);
                            }
                        }
                    })
                $left_selector.find('.products_list_detail_thead tr:nth-child(2)').remove();
                $left_selector.find('.products_list_detail_tbody td').remove();

                $right_selector.find('.products_list_detail_thead tr:nth-child(1) th:first-child').remove();
                $right_selector.find('.products_list_detail_tbody').find("th").remove();
                $right_selector.find('.products_list_detail_table').css('width','200%');

                // éÓ«Ü«Ã«¯«¹ªÎÊÀé©áÈÍÔªµö¢Ôð
                $right_selector
                    .find('tr')
                    .each( function( index, element ){
                        var tr_h = $(this).height();
                        hList.push(tr_h);
                        $(this).height(tr_h);
                    });

                // ö¢Ôðª·ª¿ÍÔªµðàïÚ
                hList[0] = hList[0] + hList[1];
                hList[1] = hList[2];
                hList[hList.length -2] = 50;
                break;

            case 'f_pattern':

                $left_selector.find('.products_list_detail_thead th')
                    .each( function(index, element){
                        if(index != 0){
                            // element.remove();
                            if (element.parentNode) {
                                element.parentNode.removeChild(this);
                            }
                        }
                    })
                $left_selector.find('.products_list_detail_tbody td').remove();

                $right_selector.find('.products_list_detail_thead tr:nth-child(1) th:first-child').remove();
                $right_selector.find('.products_list_detail_tbody').find("th").remove();
                $right_selector.find('.products_list_detail_table').css('width','200%');

                // éÓ«Ü«Ã«¯«¹ªÎÊÀé©áÈÍÔªµö¢Ôð

                $right_selector
                    .find('tr')
                    .each( function( index, element ){
                        var tr_h = $(this).height();
                        hList.push(tr_h);
                        $(this).height(tr_h);
                    });

                // ö¢Ôðª·ª¿ÍÔªµðàïÚ
                hList[0] = hList[0];
                hList[1] = hList[2];
                hList[hList.length -1] = 50;
                break;
        }

        // ñ§«Ü«Ã«¯«¹ªÎÊÀé©áÈÍÔªµ?ÌÚ
        $left_selector
            .find('tr')
            .each( function( index, element ){
                var tr_h = hList[index];
                $(this).height(tr_h);
            });


// if( pattern == 'd_pattern') {
// console.log(pattern)
//      $left_selector
//          .find('tr')
//          .each( function( index, element ){
//              var tr_h = $(this).height();
//              console.log(index+'ú¼ÙÍ ñ§',tr_h)
//          });

//      $right_selector
//          .find('tr')
//          .each( function( index, element ){
//              var tr_h = $(this).height();
//              console.log(index+'ú¼ÙÍ éÓ',tr_h)
//          });
// console.log('')
// }



    //?ãÞðàïÚ
        $left_selector.find('.products_list_detail_thead tr:nth-child(1) th:first-child').css('border-right','solid 1px');
        $right_selector.find('.products_list_detail_table').css('border-bottom','none');
        $right_selector.find('tr th:first-child').css('border-left','none');
        $right_selector.find('tr td:first-child').css('border-left','none');
        $wrap_selector.find('.products_list_detail_table').css('margin','0');

    };// scroll_set

    function scroll_shadow_add (_this) {
        var $this = $(_this);
        var $scroll_right = $this.find('.scroll_right');
        var $shadow_left;
        var $shadow_right;

        var right_box_h = $scroll_right.height() - $scroll_right.find('.products_list_detail_thead').height() - 17;
        var right_box_w = $scroll_right.get(0).scrollWidth - $scroll_right.get(0).clientWidth;

        // console.log(right_box_w)

        $scroll_right.append('<div class="shadow_left"></div>');
        $scroll_right.append('<div class="shadow_right"></div>');

        $shadow_left = $scroll_right.find('.shadow_left');
        $shadow_right = $scroll_right.find('.shadow_right');

        $shadow_left.height(right_box_h);
        $shadow_right.height(right_box_h);
        $shadow_left.width(0);

        $scroll_right.scroll(function() {

            var _x = $(this).scrollLeft()

            switch (true){
                case _x == 0:
                    $shadow_left.width(0);
                    break;
                case _x == right_box_w:
                    $shadow_right.width(0);
                    break;
                case _x > 0:
                    $shadow_left.width(10);
                    $shadow_right.width(10);
                    break;
            }

            $shadow_left.css('left', _x + "px");
            $shadow_right.css('right', '-' + _x + "px");

        });

    };//scroll_shadow

    function colspan_fix_txt (_this) {

        var $this = $(_this);
        var $scroll_right = $this.find('.scroll_right');
        var $pass_tr = $this.find('.scroll_right .js_scroll tr');


        var max_len_tr = 0;
        var right_box_w = $scroll_right.get(0).scrollWidth - $scroll_right.get(0).clientWidth;
        var right_w = $scroll_right.width() - 4;

        $pass_tr
            .each( function( index, element ) {
                var tr_len = $(this).children().length;
                if(max_len_tr < tr_len){
                    max_len_tr = tr_len;
                }
            });

        var add_span = function(tag) {
            $pass_tr
                .find(tag)
                .each( function( index, element ){
                    if($(this).attr("colspan") == max_len_tr) {
                        var pt = $(this).css('padding-top');
                        var pb = $(this).css('padding-bottom');

                        $(this).css('padding', pt + ' 0 ' + pb + ' 0')
                        $(this).wrapInner('<span class="margin_adj" style="width:' + right_w + 'px">');
                    }
                });
        }

        add_span('th');
        add_span('td');

        var timer = null;
        $scroll_right.scroll(function() {
            var _x = $(this).scrollLeft();
            if( _x <= right_box_w ){
                $scroll_right.find('.margin_adj').css('margin-left', _x);
            }
        });

    }; //colspan_fix_txt


    function hover_scroll (_this) {

        var $this = $(_this);
        var $scroll_left = $this.find('.scroll_left');
        var $scroll_right = $this.find('.scroll_right');

        var tobody_tr = ' .products_list_detail_tbody tr'
        var tobody_th = ' .products_list_detail_tbody tr th'
        var tobody_td = ' .products_list_detail_tbody tr td'

        var row;
        var color_base;
        var color_even = '#ffffff'
        var color_odd = '#f7f7f7';

        var color_change = function(row,color) {
                    $scroll_left.find(tobody_tr).eq(row).children().css('background-color',color);
                    $scroll_right.find(tobody_tr).eq(row).children().css('background-color',color);
        }
        var hover_base = function(selector) {

            $(selector).hover(
                function () {
                    row = $(this).parent().index();
                    color_change(row,'#f4f1ef');
                    $(this).css('background-color','#ffffde');
                },
                function () {
                    // row = $(this).parent().index();
                    color_base = row % 2 == 0 ? color_even : color_odd;
                    color_change(row,color_base);
                    $(this).css('background-color',color_base);
                });

        }

        hover_base($scroll_left.find(tobody_th));
        hover_base($scroll_right.find(tobody_td));

    }; //hover_scroll

        //th_group_colorªÈ«»«Ã«ÈªÇÞÅéÄ
        //rowspanª¬2Ó«ªÎãÁªËª·ª«ÞÅª¨ªÊª¤ªÎªÇáóïáù±é©ª«
    function hover_scroll_2 (_this) {

        var $this =$(_this);
        var $scroll_left = $this.find('.scroll_left');
        var $scroll_right = $this.find('.scroll_right');

        var tobody_tr = ' .products_list_detail_tbody tr'
        var tobody_th = ' .products_list_detail_tbody tr th'
        var tobody_td = ' .products_list_detail_tbody tr td'

        var row;
        var that;
        var set_num;
        var color_base;
        var color_even = '#ffffff';
        var color_odd = '#f7f7f7';

        hover_base($scroll_left.find(tobody_th,true));
        hover_base($scroll_right.find(tobody_td,false));

        function hover_base (selector,control) {

            $(selector).hover(
                function () {

                    row = $(this).parent().index();
                    that = control ? this : $scroll_left.find(tobody_tr).eq(row).find('th:first-child');
                    set_num = rowspan_check_num(that);

                    hover_base_th_change(row,'#f4f1ef',set_num);
                    $(this).css('background-color','#ffffde');

                },
                function () {

                    // row = $(this).parent().index();
                    // that = control ? this : $scroll_left.find(tobody_tr).eq(row).find('th:first-child');
                    // set_num = rowspan_check_num(that);

                    color_base = $(this).hasClass('bg_color') ? color_odd : color_even;
                    hover_base_th_change(row,color_base,set_num);
                    // $(this).css('background-color',color_base);

                });

        }


        function rowspan_check_num(_this){
            var set_num;

            if($(_this).attr('rowspan') != undefined){ //'Ì¿ùêêóªê'
                set_num = 1;
            } else { //'Ì¿ùêÙíª·'
                if($(_this).prev().attr('rowspan') != undefined){ //'ªÒªÈªÄîñªËÌ¿ùêêóªê'
                    set_num = 1;
                } else { //'ªÒªÈªÄîñªËÌ¿ùêÙíª·'
                    if($(_this).parent().prev().find('th').attr('rowspan') != undefined ) { //'ß¾ªËöÑªËÌ¿ùêêóªê'
                        set_num = 2;
                    } else {//'ß¾ªËöÑªËÌ¿ùêÙíª·'
                        set_num = 0;
                    }
                }
            }

            return set_num;
        }

        function hover_base_th_change(row,color,set) {

            $scroll_left.find(tobody_tr).eq(row).children().css('background-color',color);
            $scroll_right.find(tobody_tr).eq(row).children().css('background-color',color);

            if(set == 1) {
                        $scroll_left.find(tobody_tr).eq(row +1).children().css('background-color',color);
                        $scroll_right.find(tobody_tr).eq(row +1).children().css('background-color',color);
            }
            else if(set == 2) {
                        $scroll_left.find(tobody_tr).eq(row -1).children().css('background-color',color);
                        $scroll_right.find(tobody_tr).eq(row -1).children().css('background-color',color);
            }
        }


    }; //hover_scroll_2


        //td_group_colorªÈ«»«Ã«ÈªÇÞÅéÄ
    function hover_scroll_3 (_this) {

        var $this =$(_this);
        var $scroll_left = $this.find('.scroll_left');
        var $scroll_right = $this.find('.scroll_right');

        var tobody_tr = ' .products_list_detail_tbody tr'
        var tobody_th = ' .products_list_detail_tbody tr th'
        var tobody_td = ' .products_list_detail_tbody tr td'

        var row;
        var that;
        var set_num;
        var color_base;
        var color_even = '#ffffff';
        var color_odd = '#f7f7f7';

        var rowspan_ary = new Array()
        var rowspan_ary_num = 0;
        var rowspan_ary_len;

        //Ì¿ùêªµªìª¤ªÆªëÖªªÎé©áÈªòïÚ×âª·Ì«Ò¡
        $scroll_right
            .find('.td_rowspan_adj')
            .each(function( index, element ){
                    var max_rowspan = 1;
                    var eq = $(this).index();
                    var eq_max;

                    rowspan_ary[rowspan_ary_num] = new Array();

                    $(this).children().each(function( index, element ){
                        var this_rowspan = $(element).attr('rowspan');
                        if (max_rowspan < this_rowspan) {
                            max_rowspan = Number(this_rowspan);
                        }
                    });

                    eq_max = eq + max_rowspan - 1;
                    for (var i = eq; i <= eq_max; i++) {
                        rowspan_ary[rowspan_ary_num].push(i)
                    }

                    rowspan_ary_num++;
            })


        rowspan_ary_len = rowspan_ary_num - 1;
        // console.log(rowspan_ary_len)

        hover_base($scroll_left.find(tobody_th));
        hover_base($scroll_right.find(tobody_td));

        function hover_base (selector) {

            $(selector).hover(
                function () {

                    row = $(this).parent().index();
                    hover_base_change(row,'#f4f1ef');

                    $(this).css('background-color','#ffffde');

                },
                function () {

                    color_base = $(this).hasClass('bg_color') ? color_odd : color_even;
                    hover_base_change(row,color_base);

                });

        }

        function hover_base_change(row,color) {

                    for (var i = 0; i <= rowspan_ary_len; i++) {
                        var ary = rowspan_ary[i];
                        var ary_len = ary.length;
                        if( ary.indexOf(row) != -1 ) {
                            for (var l = 0; l <= ary_len; l++){
                                $scroll_left.find(tobody_tr).eq(ary[l]).children().css('background-color',color);
                                $scroll_right.find(tobody_tr).eq(ary[l]).children().css('background-color',color);
                            }
                        }
                    }

        }


    }; //hover_scroll_3



    function th_rowspan_scroll(_this) {

        var $this =$(_this);
        var $scroll = $this.find('.products_list_detail_tbody');

        var tobody_tr = ' tr'
        var tobody_th = ' tr th'
        var tobody_td = ' tr td'

        var row;
        var that;
        var set_num;
        var color_base;
        var color_even = '#ffffff';
        var color_odd = '#f7f7f7';

        var rowspan_ary = new Array()
        var rowspan_ary_num = 0;
        var rowspan_ary_len;

        //Ì¿ùêªµªìª¤ªÆªëÖªªÎé©áÈªòïÚ×âª·Ì«Ò¡
        $this
            .find('.tth_adj')
            .each(function( index, element ){
                    var max_rowspan = 1;
                    var eq = $(this).parent().index();
                    var eq_max;

                    rowspan_ary[rowspan_ary_num] = new Array();

                    $(this).each(function( index, element ){
                        var this_rowspan = $(element).attr('rowspan');
                        if (max_rowspan < this_rowspan) {
                            max_rowspan = Number(this_rowspan);
                        }
                    });

                    eq_max = eq + max_rowspan - 1;

                    for (var i = eq; i <= eq_max; i++) {
                        rowspan_ary[rowspan_ary_num].push(i)
                    }

                    rowspan_ary_num++;
            })


        rowspan_ary_len = rowspan_ary_num - 1;
        // console.log(rowspan_ary)

        hover_base($scroll.find(tobody_th));
        hover_base($scroll.find(tobody_td));

        function hover_base (selector) {

            $(selector).hover(
                function () {

                    row = $(this).parent().index();
                    hover_base_change(row,'#f4f1ef');
                    $(this).css('background-color','#ffffde');

                },
                function () {

                    color_base = $(this).hasClass('bg_color') ? color_odd : color_even;
                    hover_base_change(row,color_base);

                });

        }

        function hover_base_change(row,color) {

                    for (var i = 0; i <= rowspan_ary_len; i++) {
                        var ary = rowspan_ary[i];
                        var ary_len = ary.length;
                        if( ary.indexOf(row) != -1 ) {
                            for (var l = 0; l <= ary_len; l++){
                                $scroll.find(tobody_tr).eq(ary[l]).children().css('background-color',color);
                            }
                        }
                    }

        }


    }; //hover_scroll_3


$(".th_rowspan_scroll")
.each(function(index,element){
    th_rowspan_scroll(this);
});

























    //«Þ«¦«¹«Û«Ð?ªÕªïªÃªÈ é©áÈªÎõÚÊ¥ CSSªÎ?ÌÚªâù±é©ªÇª¹¡£
    (function() {
            $('.opacity_soft_add').each( function() {
                var elements = $(this);
                var src = elements.attr('src');
                var ftype = src.substring(src.lastIndexOf('.'), src.length);
                if(src.search('_o') == -1){
                    src = src.replace(ftype, '_o'+ftype);
                    elements.clone().insertBefore($(this)).addClass('opacity_soft').attr({src:src});
                }
            });
            return false;
    })();

    //«Þ«¦«¹«ª?«Ð? 15/11/27 áóïá
    $('.over').hover(
        function(){ mouthOver(this); }, //«Û«Ð?ª·ª¿ªé
        function(){ mouthOver(this); } //«Û«Ð?ú°ð¶ª·ª¿ªé
    );
    function mouthOver(that){
            var elements = $(that);
            var src = elements.attr('src');
            var ftype = src.substring(src.lastIndexOf('.'), src.length);
            var search = src.search('_on');
            ftype1 = search == -1 ? ftype : '_on'+ftype;
            ftype2 = search == -1 ? '_on'+ftype : ftype;
            $(that).attr({src:src.replace(ftype1,ftype2)});
    }

    //«¹«¯«í?«ëtop
    $('a[href*=#],area[href*=#]').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
            if ($target.length) {
                var targetOffset = $target.offset().top;
                $('html,body').animate({ scrollTop: targetOffset }, 800);
                return false;
            }
        }
    });
    $("#pagetop img").hover(
        function(){ $(this).stop().animate({ marginTop: "-9px" },150); },
        function(){ $(this).stop().animate({ marginTop: "0px" }); }
    );


    //«¹«¯«í?«ëª¬ò¦ïÒö·ªËÓ¹ª·ª¿ªé«Ü«¿«óøúãÆ
    $('#js_topbtn').hide();

    $(document).ready(function() {
        var pagetop = $('#js_topbtn');
        $(window).scroll(function () {
            if ($(this).scrollTop() > 400) {
                pagetop.fadeIn();
            } else {
                pagetop.fadeOut();
                }
        });
        pagetop.click(function () {
            $('body, html').animate({ scrollTop: 0 }, 500);
            return false;
        });
    });

});

/*--------------------------------------------------------------------------*
 *
 *  footerFixed.js
 *
 *  MIT-style license.
 *
 *  2007 Kazuma Nishihata [to-R]
 *  http://blog.webcreativepark.net
 *
 *--------------------------------------------------------------------------*/

new function(){

    var footerId = "footer_over_wrap";
    //«á«¤«ó
    function footerFixed(){
        //«É«­«å«á«ó«ÈªÎÍÔªµ
        var dh = document.getElementsByTagName("body")[0].clientHeight;
        //«Õ«Ã«¿?ªÎtopª«ªéªÎêÈöÇ
        document.getElementById(footerId).style.top = "0px";
        var ft = document.getElementById(footerId).offsetTop;
        //«Õ«Ã«¿?ªÎÍÔªµ
        var fh = document.getElementById(footerId).offsetHeight;
        //«¦«£«ó«É«¦ªÎÍÔªµ
        if (window.innerHeight){
            var wh = window.innerHeight;
        }else if(document.documentElement && document.documentElement.clientHeight != 0){
            var wh = document.documentElement.clientHeight;
        }
        if(ft+fh<wh){
            document.getElementById(footerId).style.position = "relative";
            document.getElementById(footerId).style.top = (wh-fh-ft-1)+"px";
        }
    }

    //Ùþí®«µ«¤«º
    function checkFontSize(func){

        //÷÷ïÒé©áÈªÎõÚÊ¥
        var e = document.createElement("div");
        var s = document.createTextNode("S");
        e.appendChild(s);
        e.style.visibility="hidden"
        e.style.position="absolute"
        e.style.top="0"
        document.body.appendChild(e);
        var defHeight = e.offsetHeight;

        //÷÷ïÒ??
        function checkBoxSize(){
            if(defHeight != e.offsetHeight){
                func();
                defHeight= e.offsetHeight;
            }
        }
        setInterval(checkBoxSize,1000)
    }

    //«¤«Ù«ó«È«ê«¹«Ê?
    function addEvent(elm,listener,fn){
        try{
            elm.addEventListener(listener,fn,false);
        }catch(e){
            elm.attachEvent("on"+listener,fn);
        }
    }

    addEvent(window,"load",footerFixed);
    addEvent(window,"load",function(){
        checkFontSize(footerFixed);
    });
    addEvent(window,"resize",footerFixed);

}


/*--------------------------------------------------------------------------*
yahoo?ßã
*---------------------------------------------------------------------------*/

(function() {
var sb = document.getElementById('srchBox');
if (sb && sb.className == 'watermark') {
  var si = document.getElementById('srchInput');
  var f = function() { si.className = 'nomark'; };
  var b = function() {
    if (si.value == '') {
      si.className = '';
    }
  };
  si.onfocus = f;
  si.onblur = b;
  if (!/[&?]p=[^&]/.test(location.search)) {
    b();
  } else {
    f();
  }
}
});