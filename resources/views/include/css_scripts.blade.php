<script src="{{ asset('js/init.js') }}" defer></script>

<!-- AOS -->
<link rel="stylesheet" href="{{ asset('animation/aos.css')}}">
<script src="{{ asset('animation/aos.js') }}"></script>

<!-- navgoco -->
<link rel="stylesheet" href="{{ asset('css/jquery.navgoco.css')}}">
<script src="{{ asset('js/jquery.navgoco.min.js') }}"></script>

<!-- DragDrop -->
<!-- <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>  -->

<!-- Slick -->
<link rel="stylesheet" href="{{ asset('css/slick.css')}}">
<link rel="stylesheet" href="{{ asset('css/slick-theme.css')}}">
<script src="{{ asset('js/slick.min.js') }}"></script>

<!-- Datepicker -->
<!-- <script src="{{ asset('js/jqueryui_datepicker_thai.js') }}"></script> -->

<!-- matchHeight -->
<script src="{{ asset('js/jquery.matchHeight.js') }}"></script>

<script>
    $(function() {
        $('.matchHeight').matchHeight();
    });
</script>

<script>
    AOS.init({
        disable: 'mobile'
    });
</script>

<script>
    $(function (){
    // banner link
        const check_list_1 = $('#slide_1').children().length;
        $('#slide_1').on('init', function (event, slick, direction) {
            if (check_list_1 < 4) {
                $('#action-slide_1').parents('.action-slide .slide-wrapper').css('display','none');
            }else{
                $('#action-slide_1').parents('.action-slide .slide-wrapper').show();
            }
        });

        $('#slide_1').slick({
            autoplay: true,
            autoplaySpeed: 5000,
            infinite: false,
            dots: false,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: $('#action-slide_1 .slide-prev'),
            nextArrow: $('#action-slide_1 .slide-next'),
        });
    });
</script>

<script>
    $('.icon-like').on('click', function(event, count) {
        event.preventDefault();
        
        var $this = $(this),
        count = $this.attr('data-count'),
        active = $this.hasClass('active'),
        multiple = $this.hasClass('multiple-count');
        
        // First method, allows to add custom function
        // Use when you want to do an ajax request
        /* if (multiple) {
        $this.attr('data-count', ++count);
        // Your code here
        } else {
        $this.attr('data-count', active ? --count : ++count).toggleClass('active');
        // Your code here
        } */
        
        // Second method, use when ... I dunno when but it looks cool and that's why it is here
        $.fn.noop = $.noop;
        $this.attr('data-count', ! active || multiple ? ++count : --count  )[multiple ? 'noop' : 'toggleClass']('active');
    });
</script>

<link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css')}}">
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
<script>
    const swiper = new Swiper('.swiper-container', {
        speed: 2000,
        loop: false,
        // autoplay: {
        //     delay: 5000,
        //     disableOnInteraction: false,
        // },
        
        //Fade
        // effect: 'fade',
        // fadeEffect: {
        //     crossFade: true
        // },

        //Flip
        // effect: 'flip',
        // grabCursor: true,
        // pagination: {
        //     el: '.swiper-pagination',
        // },

        // Cube
        // effect: 'cube',
        // grabCursor: true,
        // cubeEffect: {
        //     shadow: true,
        //     slideShadows: true,
        //     shadowOffset: 20,
        //     shadowScale: 0.94,
        // },

        pagination: {
            el: '.swiper-pagination',
            type: 'fraction',
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        on: {
            slideChangeTransitionStart: function(){
                //alert('before Change')
                var activeIndex = this.activeIndex;
                $('.effect').removeClass('effect-slide');
                this.slides.eq(activeIndex).addClass('effect-slide');
               // console.log(activeIndex);
            },
            slideChangeTransitionEnd: function () {
                $('.effect').removeClass('effect-slide');
            },
        }
    });
</script>
<script>
    function fallback(video)
    {
    var img = video.querySelector('.img-video');
    if (img)
        video.parentNode.replaceChild(img, video);
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const closeCookies = document.getElementById('closeCookies');
        const cookiesPosition = document.getElementById('cookiesPosition');

        closeCookies.addEventListener('click', () => {
            cookiesPosition.style.display = 'none';
        });
    });
</script>