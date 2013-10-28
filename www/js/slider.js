function FeedbackSliderObject ($obj, $time, $slides_count){
    $time = $time || 4000;
    $slides_count = $slides_count || 2;

    var $slider_ULs = $obj.children('ul'),
        $slider_LIs = $slider_ULs.find('li'),

        LIWidth = $slider_LIs.width()
            + parseInt($slider_LIs.css('padding-left'))
            + parseInt($slider_LIs.css('padding-right')),

        lisLen = $slider_LIs.length,
        current = 1,
        direction = 'slide',
        this_ = this,
        skip_timer = false,
        timer_handle = 0,
        isplay = true,
        totalLisWidth = lisLen * LIWidth;

    if($slider_LIs.length > 1){
        this.slide_image = function(){
            var loc = LIWidth;

            if(direction == 'next'){
                ++current;
            } else {
                --current;
            }

            if(current === 0){
                current = lisLen - 1;
                loc = totalLisWidth - (LIWidth * 2);
                direction = 'next';
            } else if(current > (lisLen - $slides_count + 1)){
                current = 1;
                loc = 0;
            }

            transition($slider_ULs, loc, direction);
        };

        $obj
            .on('mousemove', function(){
                isplay = false;
                skip_timer = true;
            })
            .on('mouseout', function(){
                isplay = true;
                skip_timer = true;
            });

        $('.control_previous_slide').on('click', function() {
            direction = 'prev';
            this_.slide_image();
            skip_timer = true;
        });

        $('.control_next_slide').on('click', function() {
            direction = 'next';
            this_.slide_image();
            skip_timer = true;
        });

        timer_handle = setInterval(function(){
            if(!skip_timer && isplay){
                direction = 'next';
                this_.slide_image();
            }
            skip_timer = false;
        }, $time);

        function transition(container, loc, direction) {
            var unit;

            if (direction && loc !== 0) {
                unit = (direction === 'prev') ? '+=' : '-=';
            }

            container.animate({
                'margin-left': unit ? (unit + loc) : loc
            });
        }
    }
}
