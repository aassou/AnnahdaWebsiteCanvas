<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">
    <div class="swiper-container swiper-parent">
        <div class="swiper-wrapper">
            <div class="swiper-slide dark">
                <div class="container clearfix">
                    <div class="slider-caption slider-caption-center">
                        <!--h2 data-caption-animate="fadeInUp">Beautifully Flexible</h2-->
                        <!--p data-caption-animate="fadeInUp" data-caption-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p-->
                    </div>
                </div>
                <div class="video-wrap">
                    <!--iframe width="560" height="315" src="<?= $sliderVideos[0]->url() ?>" frameborder="0" allowfullscreen></iframe-->
                    <div id="player"></div>
                </div>
            </div>
        </div>
        <!--div id="slider-arrow-left"><i class="icon-angle-left"></i></div-->
        <!--div id="slider-arrow-right"><i class="icon-angle-right"></i></div-->
    </div>

    <script>
        jQuery(document).ready(function($){
            var swiperSlider = new Swiper('.swiper-parent',{
                paginationClickable: false,
                slidesPerView: 1,
                grabCursor: true,
                loop: true,
                onSwiperCreated: function(swiper){
                    $('[data-caption-animate]').each(function(){
                        var $toAnimateElement = $(this);
                        var toAnimateDelay = $(this).attr('data-caption-delay');
                        var toAnimateDelayTime = 0;
                        if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
                        if( !$toAnimateElement.hasClass('animated') ) {
                            $toAnimateElement.addClass('not-animated');
                            var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                            setTimeout(function() {
                                $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                            }, toAnimateDelayTime);
                        }
                    });
                    SEMICOLON.slider.swiperSliderMenu();
                },
                onSlideChangeStart: function(swiper){
                    $('[data-caption-animate]').each(function(){
                        var $toAnimateElement = $(this);
                        var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                        $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
                    });
                    SEMICOLON.slider.swiperSliderMenu();
                },
                onSlideChangeEnd: function(swiper){
                    $('#slider').find('.swiper-slide').each(function(){
                        if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
                        if($(this).find('.yt-bg-player').length > 0) { $(this).find('.yt-bg-player').pauseYTP(); }
                    });
                    $('#slider').find('.swiper-slide:not(".swiper-slide-active")').each(function(){
                        if($(this).find('video').length > 0) {
                            if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
                        }
                        if($(this).find('.yt-bg-player').length > 0) {
                            $(this).find('.yt-bg-player').getPlayer().seekTo( $(this).find('.yt-bg-player').attr('data-start') );
                        }
                    });
                    if( $('#slider').find('.swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('video').get(0).play(); }
                    if( $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').playYTP(); }

                    $('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
                        var $toAnimateElement = $(this);
                        var toAnimateDelay = $(this).attr('data-caption-delay');
                        var toAnimateDelayTime = 0;
                        if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
                        if( !$toAnimateElement.hasClass('animated') ) {
                            $toAnimateElement.addClass('not-animated');
                            var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                            setTimeout(function() {
                                $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                            }, toAnimateDelayTime);
                        }
                    });
                }
            });
            $('#slider-arrow-left').on('click', function(e){
                e.preventDefault();
                swiperSlider.swipePrev();
            });
            $('#slider-arrow-right').on('click', function(e){
                e.preventDefault();
                swiperSlider.swipeNext();
            });
        });
    </script>
    <script>
        // 2. This code loads the IFrame Player API code asynchronously.
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // 3. This function creates an <iframe> (and YouTube player)
        //    after the API code downloads.
        var player;
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: '390',
                width: '640',
                videoId: 'M7lc1UVf-VE',
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        // 4. The API will call this function when the video player is ready.
        function onPlayerReady(event) {
            event.target.playVideo();
        }

        // 5. The API calls this function when the player's state changes.
        //    The function indicates that when playing a video (state=1),
        //    the player should play for six seconds and then stop.
        var done = false;
        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING && !done) {
                setTimeout(stopVideo, 6000);
                done = true;
            }
        }
        function stopVideo() {
            player.stopVideo();
        }
    </script>
</section>