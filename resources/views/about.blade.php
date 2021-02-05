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
                                    <h1 class="title">เกี่ยวกับกรุงเทพมหานคร</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-nav">
                        <div class="container-nav_i">
                            <div class="container-fluid">
                                <nav class="nav-select"> 
                                    <ul class="nav-select_list">
                                        <li><a href="#nogo" title="ชื่อเมนู">โครงสร้างหน่วยงาน </a></li>
                                        <li><a href="#nogo" title="ชื่อเมนู">ผู้ว่าฯ กทม.</a></li>
                                        <li><a href="#nogo" title="ชื่อเมนู">ข้อมูลผู้บริหาร</a></li>
                                        <li><a href="#nogo" title="ชื่อเมนู" class="active">อำนาจหน้าที่</a></li>
                                        <li><a href="#nogo" title="ชื่อเมนู">แผนพัฒนากรุงเทพมหานคร </a></li>
                                        <li><a href="#nogo" title="ชื่อเมนู">กฎหมายที่เกี่ยวข้อง  </a></li>
                                        <li><a href="#nogo" title="ชื่อเมนู">ติดต่อหน่วยงาน </a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="homepage-section section--inside">
            @include('page/about.detail')
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
@endsection