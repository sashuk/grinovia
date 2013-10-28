


/*  Управление cookie'ами  */



function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ))
    return matches ? decodeURIComponent(matches[1]) : undefined
}

function setCookie(name, value, props) {
    props = props || {}
    var exp = props.expires
    if (typeof exp == "number" && exp) {
        var d = new Date()
        d.setTime(d.getTime() + exp*1000)
        exp = props.expires = d
    }
    if(exp && exp.toUTCString) { props.expires = exp.toUTCString() }

    value = encodeURIComponent(value)
    var updatedCookie = name + "=" + value
    for(var propName in props){
        updatedCookie += "; " + propName
        var propValue = props[propName]
        if(propValue !== true){ updatedCookie += "=" + propValue }
    }
    document.cookie = updatedCookie
}

function deleteCookie(name) {
    setCookie(name, null, { expires: -1 })
}



/*  functions for site  */



$(document).ready(function(){
    var $site_map_list = $('.site_map_list'),
        $site_map_list_height = 250,
        $site_map_scroll_wrapper = $('.scroll_wrapper'),
        $site_map_scroll_wrapper_height = 0,
        $obj_overlay = $('.overlay'),
        $illustration_accordion_state = 0,
        $illustration_accordion_disable = 0,

        $site_map_coords = $site_map_list.offset(),
        $current_offset = 0;


    $('.scroll_to_top').on('click', function(){
        $('html, body').animate({scrollTop: 0}, 300);
    });

    var funct_cycle_illustration = setInterval(function (){
        if($illustration_accordion_disable == 0){
            ++$illustration_accordion_state;
            if($illustration_accordion_state == 4){
                $illustration_accordion_state = 1;
            }

            if($illustration_accordion_state == 1){
                $('.item_windows').addClass('selected').siblings('.item').removeClass('selected');
            }
            if($illustration_accordion_state == 2){
                $('.item_arbolit').addClass('selected').siblings('.item').removeClass('selected');
            }
            if($illustration_accordion_state == 3){
                $('.item_build').addClass('selected').siblings('.item').removeClass('selected');
            }
        }
    }, 2000);

    var $obj_wallpaper = $('.wallpapper'),
        $body_height = $(window).height(),
        $scroll_document_height = 0,
        scrolled = 0,
        float_wallpaper_offset = 0,
        ads = 0;

    $(window).on('load resize', function(){
        $body_height = document.body.clientHeight;
        $scroll_document_height = $(document).height() - $body_height;
    });

    $(window).on('scroll', function(){
        ads = ads + 10;
        scrolled = window.pageYOffset || document.documentElement.scrollTop;
        float_wallpaper_offset = 200 * (scrolled / $scroll_document_height);
        $obj_wallpaper.css('background-position', '-' +(50 + parseInt(float_wallpaper_offset.toFixed(0))) + 'px 0');
    });

    $('.illustration_bg')
            .on('mouseenter', function(){
                $illustration_accordion_disable = 1;
                $('.item').removeClass('selected');
            })
            .on('mouseleave', function(){
                $illustration_accordion_disable = 0;
            });



    var $func_show_window = function($window){
        if($window == 'callback'){
            $obj_overlay.css('display', 'block');
            var $obj_window = $obj_overlay.find('.window_callback');

            $obj_window.css('display', 'block').animate({'margin-top': 50}, 200);

            $obj_window.find('.close').on('click', function(){
                $obj_window.css({'display': 'none', 'margin-top': 20});
                $obj_overlay.css('display', 'none');
            });
        }
        if($window == 'write_to_us'){
            $obj_overlay.css('display', 'block');
            var $obj_window = $obj_overlay.find('.window_write_to_us');

            $obj_window.css('display', 'block').animate({'margin-top': 50}, 200);

            $obj_window.find('.close').on('click', function(){
                $obj_window.css({'display': 'none', 'margin-top': 20});
                $obj_overlay.css('display', 'none');
            });
        }
    }

    var $func_show_map = function(){
        $('.map_cover').css('display', 'none');
        $('.map_doc').css('display', 'block').animate({'height': 600}, 200);
    }

    $('.information_callback').on('click', function(){
        $func_show_window('callback');
    });

    $('.information_write_to_us').on('click', function(){
        $func_show_window('write_to_us');
    });

    $('.information_look_at_map').on('click', function(){
        $func_show_map();
    });

    $('.information_we_on_map').on('click', function(){$func_show_map();});
    $('.map').on('click', function(){$func_show_map();});

    $site_map_list.on('mousemove', function($event){
        $site_map_scroll_wrapper_height = $site_map_scroll_wrapper.height();
        $current_offset = ($site_map_scroll_wrapper_height - $site_map_list_height) * (($event.clientY - $site_map_coords.top) / $site_map_list_height);

        $site_map_scroll_wrapper.css('margin-top', -($current_offset));
    });

    $site_map_list.on('mouseleave', function(){
        $site_map_scroll_wrapper.css('margin-top', 0);
    });
});