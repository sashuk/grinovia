


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


        $site_map_coords = $site_map_list.offset(),
        $current_offset = 0;


    $site_map_list.on('mousemove', function($event){
        $site_map_scroll_wrapper_height = $site_map_scroll_wrapper.height();
        $current_offset = ($site_map_scroll_wrapper_height - $site_map_list_height) * (($event.clientY - $site_map_coords.top) / $site_map_list_height);

        $site_map_scroll_wrapper.css('margin-top', -($current_offset));
    });

    $site_map_list.on('mouseleave', function(){
        $site_map_scroll_wrapper.css('margin-top', 0);
    });
});