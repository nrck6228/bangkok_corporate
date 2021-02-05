@section('title', 'กรุงเทพฯ ชีวิตดีๆ ที่ลงตัว')
@section('tagkeyword', '')
@section('tagdescription', '')

@extends('include/start')

@section('contentpage')
 
<div class="container-out">
    @include('include.nav-main')
    
    <div id="main-content" class="page type-homepage">
        <div class="homepage-section section--intro">
            @include('component.banner-main')
        </div>
        <div class="homepage-section section--inside">
            @include('component.covid-main')
        </div>
        <div class="homepage-section section--inside">
            @include('component.covid-news-main')
        </div>
        <div class="homepage-section section--inside">
            @include('component.news-main')
        </div>
        <div class="homepage-section section--inside">
            @include('component.service-main')
        </div>
        <div class="homepage-section section--inside">
            @include('component.info-main')
        </div>
        <div class="homepage-section section--inside">
            @include('component.hotline-main')
        </div>
    </div>

    <div class="articles-wrap">
        <div class="articles_i">
            TEXT
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
        $('#video-gallery').lightGallery(); 
    });
</script>

<script>
    function autoScrollTo(el) {
        var top = $("#" + el).offset().top;
        $("html, body").animate({ scrollTop: top }, 800);
    }
</script>
@endsection

