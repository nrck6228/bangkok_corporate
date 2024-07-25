@section('title', 'ข่าวสารกรุงเทพ')
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
                        <img src="{{ asset('assets/images/banner/photo1.jpg')}}" alt="image">
                        <div class="caption-container">
                            <div class="caption-table">
                                <div class="caption-cell">
                                    <h1 class="title">ข่าวสารกรุงเทพฯ</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-nav">
                        <div class="container-nav_i">
                            <div class="container-fluid">
                                <nav class="nav-select"> 
                                    <ul class="nav-select_list">
                                        <li><a href="news" title="ชื่อเมนู" class="active">ข่าวสารกรุงเทพฯ </a></li>
                                        <li><a href="news" title="ชื่อเมนู">ข่าวสอบแข่งขัน/สมัครงาน</a></li>
                                        <li><a href="news" title="ชื่อเมนู">สำนักข่าว กทม.</a></li>
                                        <li><a href="news" title="ชื่อเมนู">ประกาศ</a></li>
                                        <li><a href="news" title="ชื่อเมนู">Infographic</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="homepage-section section--inside">
            @include('page/news.list')
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
    // TH
    $.datepicker.regional['th'] = {
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        dayNamesMin: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
        monthNamesShort: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
        constrainInput: true,
        yearOffSet: 543,
        yearRange: '-10:+0',
        maxDate: 0,
    };
    $.datepicker.setDefaults($.datepicker.regional['th']);
    // EN
    // $.datepicker.regional['en'] ={
    //     dateFormat: 'dd/mm/yy',
    //     changeMonth: true,
    //     changeYear: true,
    //     constrainInput: true,
    //     yearOffSet : 0,
    //     yearRange: '-80:+0',
    //     maxDate: 0,
    //     onSelect: function(dateText, inst) {
    //         var old = $(this).datepicker('getDate');
    //         var age = GetAge(old);
    //         console.log(age);
    //         $('#age').val(age);
    //     },
    // };
    // $.datepicker.setDefaults($.datepicker.regional['en']);

    $(document).ready(function () {
        $("#startDate").datepicker($.datepicker.regional["th"]);
        $("#startDate").datepicker("setDate", new Date());
        $('#icon_startDate').click(function () {
            $("#startDate").focus();
        });
    });

    $(document).ready(function () {
        $("#endDate").datepicker($.datepicker.regional["th"]);
        $("#endDate").datepicker("setDate", new Date());
        $('#icon_endDate').click(function () {
            $("#endDate").focus();
        });
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
