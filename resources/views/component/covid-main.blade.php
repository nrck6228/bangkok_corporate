<div class="container-wrapper--homepage" id="section1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="container-report--counter matchHeight" data-aos="fade-up">
                    <div class="container-news">
                        <div class="card">
                            <div class="bg-layer">
                                <img src="{{ asset('assets/images/news/covid1.jpg')}}" alt="" class="thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="container-report--video matchHeight" data-aos="fade-up" data-aos-delay="300">
                    <div class="container-news" id="video-gallery">
                        <a data-poster="{{ asset('assets/images/news/covid2.jpg')}}" data-sub-html="video caption1" data-html="#video1">
                            <div class="card">
                                <div class="bg-layer">
                                    <!-- <img src="{{ asset('assets/images/news/covid2.jpg')}}" alt="" class="thumbnail"> -->
                                    <video class="lg-video-object lg-html5">
                                        <source src="assets/videos/sample-mp4-file.mp4" type="video/mp4">
                                        Your browser does not support HTML5 video.
                                    </video>
                                    <div class="readmore-hover">
                                        <!-- <img src="{{ asset('assets/images/icons/icon-play.png')}}" alt="Play Video"> -->
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>

<!-- Hidden video div -->
<div style="display:none;" id="video1">
    <video class="lg-video-object lg-html5" controls preload="none">
        <source src="assets/videos/sample-mp4-file.mp4" type="video/mp4">
         Your browser does not support HTML5 video.
    </video>
</div>
