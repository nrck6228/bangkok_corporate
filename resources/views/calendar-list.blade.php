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
                                    <h1 class="title">ปฏิทินกิจกรรม</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="homepage-section section--inside">
            @include('page/calendar.list')
        </div>
    </div>
</div>

<footer class="footer">
    <div class="footer-wrapper">
        @include('include.footer')
    </div>
</footer>

@include('include.css_scripts')
<link rel="stylesheet" href="{{ asset('js/calendar-v3.9/fullcalendar.min.css')}}">
<script type="text/javascript" src="{{ asset('js/calendar-v3.9/lib/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/calendar-v3.9/fullcalendar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/calendar-v3.9/locale-all.js') }}"></script>
<script>
    var d = new Date();
    var y = d.getFullYear();

    $('#calendar').fullCalendar({
        header: false,
        locale: 'th',
        defaultDate: moment().format("YYYY-MM-DD"),
        navLinks: false, // can click day/week names to navigate views
        editable: false,
        eventLimit: 5, // allow "more" link when too many events
        events: [
            {
                "title": "All Day Event",
                "start": "2021-07-23",
                //"color": "#E76F0E",
                "url": "/calendar-detail"
            },
            {
                "title": "บึงกุ่มชวนร่วมกิจกรรมบ้านหนังสือasdalk k;lkdpa sk",
                "start": "2021-07-23",
                //"color": "#8CB81F",
                "url": "/calendar-detail"
            },
            {
                "title": "บึงกุ่มชวนร่วมกิจกรรมบ้านหนังสือ บึงกุ่มชวนร่วมกิจกรรมบ้านหนังสือ",
                "start": "2021-07-23",
                //"color": "#8CB81F",
                "url": "/calendar-detail"
            },
            {
                "title": "บึงกุ่มชวนร่วมกิจกรรมบ้านหนังสือasdalk k;lkdpa sk",
                "start": "2021-07-23",
                //"color": "#8CB81F",
                "url": "/calendar-detail"
            },
            {
                "title": "บึงกุ่มชวนร่วมกิจกรรมบ้านหนังสือasdalk k;lkdpa sk",
                "start": "2021-07-23",
                //"color": "#8CB81F",
                "url": "/calendar-detail"
            },
            {
                "title": "บึงกุ่มชวนร่วมกิจกรรมบ้านหนังสือasdalk k;lkdpa sk",
                "start": "2021-07-23",
                //"color": "#8CB81F",
                "url": "/calendar-detail"
            },
            {
                "title": "บึงกุ่มชวนร่วมกิจกรรมบ้านหนังสือasdalk k;lkdpa sk",
                "start": "2021-07-23",
                //"color": "#8CB81F",
                "url": "/calendar-detail"
            },
        ],
    });
</script>
@endsection
