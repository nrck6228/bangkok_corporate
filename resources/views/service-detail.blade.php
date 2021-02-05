@section('title', 'บริการกรุงเทพมหานคร')
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
                                    <h1 class="title">บริการกรุงเทพมหานคร</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-nav">
                        <div class="container-nav_i">
                            <div class="container-fluid">
                                <a href="service" title="ย้อนกลับ" class="back-link"><i class="fas fa-arrow-left"></i>ย้อนกลับ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="homepage-section section--inside">
            @include('page/service.detail')
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

<script>
    $(document).ready(function() {
        $('#aniimated-thumbnials').lightGallery({
            thumbnail: true,
            slideEndAnimatoin: false,
            loop: false,
            hideControlOnEnd: true,
            download: false,
        });

        $('#video-gallery').lightGallery(); 
    });
</script>
@endsection
