@section('title', 'e-GP BMA')
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
                        <img src="{{ asset('assets/images/banner/photo3.jpg')}}" alt="image">
                        <div class="caption-container">
                            <div class="caption-table">
                                <div class="caption-cell">
                                    <h1 class="title">e-GP BMA</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-nav">
                        <div class="container-nav_i">
                            <div class="container-fluid">
                                <nav class="nav-select"> 
                                    <ul class="nav-select_list">
                                        <li><a href="egp-bma" title="ชื่อเมนู" class="">การจัดซื้อจัดจ้างประจำปีของกรุงเทพมหานคร</a></li>
                                        <li><a href="egp-gov" title="ชื่อเมนู" class="active">ข้อมูลการจัดซื้อจัดจ้างภาครัฐของหน่วยงาน (e-GP BMA)</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="homepage-section section--inside">
            @include('page/egp.gov')
        </div>
    </div>

    <div class="banner-oversize">
        <img src="{{ asset('assets/images/banner/photo-egp.jpg')}}" alt="" class="thumbnail">
        <div class="caption-outer">
            <div class="caption-table">
                <div class="caption-cell">
                    <h2 class="title">ข้อมูลการจัดซื้อจัดจ้างภาครัฐของหน่วยงาน<br>(e-GP BMA)</h2>
                    <a href=" https://egp.bangkok.go.th/" title=" https://egp.bangkok.go.th/" class="btn btn-primary hover-filled-slide-up">
                        <span>www.egp.bangkok.go.th</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="footer-wrapper">
        @include('include.footer')
    </div>
</footer>

@include('include.css_scripts')
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
