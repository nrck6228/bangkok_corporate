<div class="swiper-container">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <!-- <div class="swiper-slide effect">
        <div class="video-responsive">
            <img class="img-video" src="{{ asset('assets/images/main-slide/photo1.jpg')}}" alt="image">
            <img src="{{ asset('assets/images/noise.png')}}" alt="image" >
            <video class="video" autoplay loop muted playsinline preload="metadata">
                <source src="assets/videos/istockphoto-1176148798-640_adpp_is.mp4">
                <source src="assets/videos/istockphoto-1176148798-640_adpp_is.webm" onerror="fallback(parentNode)">
                Your browser does not support the video tag.
            </video>
        </div>
        <a href="https://www.google.co.th" title="กรุงเทพฯ ชีวิตดีๆ ที่ลงตัว" target="_blank" class="caption-container">
            <div class="caption-table">
                <div class="caption-cell">
                    กรุงเทพฯ ชีวิตดีๆ ที่ลงตัว
                </div>
            </div>
        </a>
    </div> -->
    <div class="swiper-slide effect">
        <img src="{{ asset('assets/images/main-slide/photo2.jpg')}}" alt="image">
        <img src="{{ asset('assets/images/noise.png')}}" alt="image" >
        <a href="http://www.bangkok.go.th/main/" title="กรุงเทพฯ ชีวิตดีๆ ที่ลงตัว" target="_blank" class="caption-container">
            <div class="caption-table">
                <div class="caption-cell">
                    กรุงเทพฯ ชีวิตดีๆ ที่ลงตัว
                </div>
            </div>
        </a>
    </div>
    <div class="swiper-slide effect">
        <img src="{{ asset('assets/images/main-slide/photo4.jpg')}}" alt="image">
        <img src="{{ asset('assets/images/noise.png')}}" alt="image" >
        <a href="http://www.bangkok.go.th/main/" title="กรุงเทพฯ ชีวิตดีๆ ที่ลงตัว" target="_blank" class="caption-container">
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
  <div class="swiper-button-next" id="start-btn"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
</div>
<a href="#" class="scroll-down" onclick="return false;" onmousedown="autoScrollTo('section1');">
    <div class="vert-move">
        <img src="{{ asset('assets/images/icons/icon-scrolldown.svg')}}" alt=""><br>  
        SCROLL<br>DOWN
    </div>
</a>

