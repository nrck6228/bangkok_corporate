@section('title', 'เกี่ยวกับกรุงเทพมหานคร')
@section('tagkeyword', '')
@section('tagdescription', '')

@extends('include/start')
@section('contentpage')
 
<div class="container-out">
    @include('include.nav-main')
    
    <div id="main-content" class="page type-homepage">
        <div class="homepage-section section--intro">
            <div class="slider page-detail">
                <div class="slider__item__detail">
                    <div class="container-image">
                        <img src="{{ asset('assets/images/banner/photo2.jpg')}}" alt="image">
                        <div class="caption-container">
                            <div class="caption-table">
                                <div class="caption-cell">
                                    <h1 class="title">สถานีวิดีโอ</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-nav">
                        <div class="container-nav_i">
                            <div class="container-fluid">
                                <nav class="nav-select"> 
                                    <ul class="nav-select_list">
                                        <li><a href="#nogo" title="แคตตาล็อก" class="active">แคตตาล็อก 1</a></li>
                                        <li><a href="#nogo" title="แคตตาล็อก">แคตตาล็อก 2</a></li>
                                        <li><a href="#nogo" title="แคตตาล็อก">แคตตาล็อก 3</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="homepage-section section--inside">
            @include('page/video.list')
        </div>

        <!-- Hidden video div -->
        <div style="display:none;" id="video1">
            <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="">
                <source src="assets/videos/istockphoto-1176148798-640_adpp_is.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
        </div>
        <div style="display:none;" id="video2">
            <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="">
                <source src="assets/videos/rain.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="footer-wrapper">
        @include('include.footer')
    </div>
</footer>

@include('include.css_scripts')
<!-- Gallery -->
<link rel="stylesheet" href="{{ asset('gallery/lightgallery.css')}}">
<script type="text/javascript" src="{{ asset('gallery/lightgallery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('gallery/lg-thumbnail.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('gallery/lg-zoom.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('gallery/lg-video.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#video-gallery').lightGallery();
    });
</script>

<script type="text/javascript">
    // Create the dropdown base
    $("<select class='nav-select_dropdown' />").appendTo(".nav-select");

    // Create default option "Go to..."
    $("<option />", {
        "selected": "selected",
        "value"   : "",
        "text"    : "Go to..."
        }).appendTo(".nav-select_dropdown");

        // Populate dropdown with menu items
        $(".nav-select a").each(function() {
        var el = $(this);
        $("<option />", {
            "value"   : el.attr("href"),
            "text"    : el.text()
        }).appendTo(".nav-select_dropdown");
    });

    $(".nav-select_dropdown").change(function() {
        window.location = $(this).find("option:selected").val();
    });
</script>

<link rel="stylesheet" href="{{ asset('gallery/lightgallery.css')}}">
<script type="text/javascript" src="{{ asset('gallery/lightgallery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('gallery/lg-thumbnail.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('gallery/lg-zoom.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('gallery/lg-video.min.js') }}"></script>
<style type="text/css">
    #lg-zoom-in, #lg-zoom-out{
        display: none;
    }
</style>
<script>
    $(document).ready(function() {
        let $document = $(this);

        $document.on('onCloseAfter.lg', function(event) {
            $document.data('lightGallery').destroy(true);
        });

        $('#dynamic1').on('click', function(e) {
            $(document).lightGallery({
                dynamic: true,
                dynamicEl: [{ 
                    html: '#video1',
                    thumb: 'assets/videos/istockphoto-1176148798-640_adpp_is.mp4',
                    subHtml: '<p>Coniston Calmness</p>'
                },{
                    src: 'https://www.youtube.com/watch?v=Agblfa8RjeY&amp;t=1s',
                    thumb: 'https://www.youtube.com/watch?v=Agblfa8RjeY&amp;t=1s',
                    subHtml: '<p>Beautiful morning</p>'
                }],
                slideEndAnimatoin: false,
                loop: false,
                hideControlOnEnd: true,
                download: false,
            });
        });

        $('#dynamic2').on('click', function(e) {
            $(document).lightGallery({
                dynamic: true,
                dynamicEl: [{ 
                    html: '#video2',
                    thumb: 'assets/videos/rain.mp4',
                    subHtml: '<p>Coniston Calmness</p>'
                },{
                    src: 'https://www.youtube.com/watch?v=Agblfa8RjeY&amp;t=1s',
                    thumb: 'https://www.youtube.com/watch?v=Agblfa8RjeY&amp;t=1s',
                    subHtml: '<p>Beautiful morning</p>'
                }],
                slideEndAnimatoin: false,
                loop: false,
                hideControlOnEnd: true,
                download: false,
            });
        });
    });
</script>
@endsection