<div class="swiper-container">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide">
        <div class="video-responsive">
            <video class="video" autoplay loop muted playsinline preload="metadata">
                <source src="assets/videos/istockphoto-1176148798-640_adpp_is.mp4">
                <source src="assets/videos/istockphoto-1176148798-640_adpp_is.webm" onerror="fallback(parentNode)">
                Your browser does not support the video tag.
            </video>
            <!-- <canvas class="canvas"></canvas>  -->
            <img class="img-video" src="{{ asset('assets/images/main-slide/photo1.jpg')}}" alt="image">
        </div>
         
        <!-- <video id="myVideo" preload="auto" autoplay loop muted>
            <source src="assets/videos/istockphoto-1176148798-640_adpp_is.webm" type='video/webm;  codecs="vp8.0, vorbis"'>
            <source src="assets/videos/istockphoto-1176148798-640_adpp_is.mp4" type='video/mp4; codecs="avc1.4D401E, mp4a.40.2"'>
            <source src="assets/videos/istockphoto-1176148798-640_adpp_is.ogv" type='video/ogv; codecs="theora, vorbis"'>
            Your browser does not support HTML5 video.
        </video> -->
        <a href="news" title="กรุงเทพฯ ชีวิตดีๆ ที่ลงตัว" target="_blank" class="caption-container">
            <div class="caption-table">
                <div class="caption-cell">
                    กรุงเทพฯ ชีวิตดีๆ ที่ลงตัว
                </div>
            </div>
        </a>
    </div>
    <div class="swiper-slide">
        <img src="{{ asset('assets/images/main-slide/photo1.jpg')}}" alt="image">
        <audio id="theAudio" controls> 
            <source src="http://traffic.libsyn.com/altmod/indiefeed_65daysofstatic_px3.mp3" />
            <source src="http://www.tonycuffe.com/mp3/tail%20toddle.mp3" />
            <source src="http://www.tonycuffe.com/mp3/girlwho.mp3" />    
        </audio>
        <a href="https://www.google.co.th" title="กรุงเทพฯ ชีวิตดีๆ ที่ลงตัว" target="" class="caption-container">
            <div class="caption-table">
                <div class="caption-cell">
                    กรุงเทพฯ ชีวิตดีๆ ที่ลงตัว
                </div>
            </div>
        </a>
    </div>
    <div class="swiper-slide">
        <img src="{{ asset('assets/images/main-slide/photo2.jpg')}}" alt="image">
        <a href="http://www.bangkok.go.th/main/" title="กรุงเทพฯ ชีวิตดีๆ ที่ลงตัว" target="" class="caption-container">
            <div class="caption-table">
                <div class="caption-cell">
                    กรุงเทพฯ ชีวิตดีๆ ที่ลงตัว
                </div>
            </div>
        </a>
    </div>
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
</div>
<a href="#" class="scroll-down" onclick="return false;" onmousedown="autoScrollTo('section1');">
    <div class="vert-move">
        <img src="{{ asset('assets/images/icons/icon-scrolldown.svg')}}" alt=""><br>  
        SCROLL<br>DOWN
    </div>
</a>

