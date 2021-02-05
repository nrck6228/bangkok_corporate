<script type="text/javascript" rel="preload" src="{{ asset('js/init.js') }}"></script>

<!-- AOS -->
<link rel="stylesheet" href="{{ asset('animation/aos.css')}}">
<script type="text/javascript" src="{{ asset('animation/aos.js') }}"></script>

<!-- navgoco -->
<link rel="stylesheet" href="{{ asset('css/jquery.navgoco.css')}}">
<script type="text/javascript" src="{{ asset('js/jquery.navgoco.min.js') }}"></script>

<!-- DragDrop -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script> 

<!-- Slick -->
<link rel="stylesheet" href="{{ asset('css/slick.css')}}">
<link rel="stylesheet" href="{{ asset('css/slick-theme.css')}}">
<script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>

<!-- Datepicker -->
<!-- <script type="text/javascript" src="{{ asset('js/jqueryui_datepicker_thai.js') }}"></script> -->

<!-- matchHeight -->
<script type="text/javascript" src="{{ asset('js/jquery.matchHeight.js') }}"></script>

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

<script type="text/javascript">
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