<div class="container-wrapper--detailpage" >
    <div class="container-fluid">
        <div class="container-breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">สถานีวิดีโอ</li>
                </ol>
            </nav>
        </div>
    </div> 

    <!-- <div class="container-fluid">
        <div class="container-search">
            <div class="search-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="label-inline">
                            ค้นหา
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="input-custom">
                            <input id="startDate" class="form-control" type="text" name="" value="" placeholder="วว/ดด/ปป" />
                            <span class="icon-calendar" id="icon_startDate"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-custom">
                            <input id="endDate" class="form-control" type="text" name="" value="" placeholder="วว/ดด/ปป" />
                            <span class="icon-calendar" id="icon_endDate"></span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-search hover-filled-slide-up" type="button">
                            <span>ค้นหา</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="container-news">
                    <div class="row" id="video-gallery">
                        <div class="col-lg-3 col-md-3" data-sub-html="video caption1" data-html="#video1">
                            <div class="card news-main matchHeight">
                                <div class="bg-layer">
                                    <video class="lg-video-object lg-html5">
                                        <source src="assets/videos/sample-mp4-file.mp4" type="video/mp4">
                                        Your browser does not support HTML5 video.
                                    </video>
                                    <div class="readmore-hover"></div>
                                </div>
                                <div class="source">
                                    <span>PR Bangkok</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3" data-sub-html="video caption1" data-html="#video2">
                            <div class="card news-main matchHeight">
                                <div class="bg-layer">
                                    <video class="lg-video-object lg-html5">
                                        <source src="assets/videos/sample-mp4-file.mp4" type="video/mp4">
                                        Your browser does not support HTML5 video.
                                    </video>
                                    <div class="readmore-hover bg-icon"></div>
                                </div>
                                <!-- <div class="source">
                                    <span>PR Bangkok</span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pagination-custom d-flex justify-content-end align-items-center">
                    <div class="all-page">
                        Page <span>1</span> of <span>120</span>
                    </div>
                    <div class="item-page d-flex justify-content-end align-items-center">
                        <div class="slide-prev disabled"></div>
                        <div class="input-custom">
                            <input type="text" class="style-input" value="1">
                        </div>
                        <div class="slide-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hidden video div -->
<div style="display:none;" id="video1">
    <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="none">
        <source src="assets/videos/sample-mp4-file.mp4" type="video/mp4">
         Your browser does not support HTML5 video.
    </video>
</div>
<div style="display:none;" id="video2">
    <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="none">
        <source src="assets/videos/sample-mp4-file.mp4" type="video/mp4">
         Your browser does not support HTML5 video.
    </video>
</div>

