<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>@yield('title')</title>
<meta name="keywords" content="@yield('tagkeyword')" />
<meta name="description" content="@yield('tagdescription')" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@thailife" />
<meta name="twitter:creator" content="@thailife" />

<link rel="canonical" href="/"/>
<link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('css/bootstrap-select.css')}}">
<link rel="stylesheet" href="{{ asset('css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{ asset('css/main.css')}}">

<link rel="stylesheet" href="{{ asset('fontawesome/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('fontawesome/all.min.css')}}">

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> -->
<script rel="preload" src="{{ asset('js/jquery-1.12.3.js') }}"></script>
<script rel="preload" src="{{ asset('js/popper.min.js') }}"></script>
<script rel="preload" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script rel="preload" src="{{ asset('js/jquery-ui-1.11.4.custom.js') }}"></script>
  
<!-- Bootstrap Select -->
<script rel="preload" src="{{ asset('js/bootstrap-select.min.js') }}"></script>

<script rel="preload" src="{{ asset('js/html2canvas.min.js') }}"></script>
<script rel="preload" src="{{ asset('js/chance.min.js') }}"></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;0,500;1,300&display=swap">

<style>
    /* body{
        padding-top: 35px;
    } */

    .phralan--banner{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 35px;
        display: block;
        background-color: #e4bc0f;
        z-index: 9999;
    }

    .phralan--banner img{
        width: 100%;
    }

    @media screen and (min-width: 700px) {
        /* body{
            padding-top: 60px;
        } */

        .phralan--banner{
            height: 60px;
        }     
    }

    @media screen and (min-width: 900px) {
        /* body{
            padding-top: 80px;
        } */

        .phralan--banner{
            height: 80px;
        }     
    }

    @media screen and (min-width: 1200px) {
        /* body{
            padding-top: 110px;
        } */

        .phralan--banner{
            height: 110px;
        }     
    }

    @media screen and (min-width: 1800px) {
        /* body{
            padding-top: 150px;
        } */

        .phralan--banner{
            height: 150px;
        }     
    }
</style>
</head>

<body>
    <!-- <a href="http://www.phralan.in.th/" title="พระลาน" target="_blank" class="phralan--banner">
        <img src="{{ asset('assets/images/phralan_banner.jpg')}}" alt="">
    </a> -->
    
    @yield('contentpage')
    
    <script>
        const DEBUG = false;
        const REPETITION_COUNT = 2; // number of times each pixel is assigned to a canvas
        const NUM_FRAMES = 128;

        /**
         * Generates the individual subsets of pixels that are animated to create the effect
         * @param {HTMLCanvasElement} ctx
         * @param {number} count The higher the frame count, the less grouped the pixels will look - Google use 32, but for our elms we use 128 since we have images near the edges
         * @return {HTMLCanvasElement[]} Each canvas contains a subset of the original pixels
         */
        function generateFrames($canvas, count = 32) {
        const { width, height } = $canvas;
        const ctx = $canvas.getContext("2d");
        const originalData = ctx.getImageData(0, 0, width, height);
        const imageDatas = [...Array(count)].map(
            (_,i) => ctx.createImageData(width, height)
        );
        
        // assign the pixels to a canvas
        // each pixel is assigned to 2 canvas', based on its x-position
        for (let x = 0; x < width; ++x) {
            for (let y = 0; y < height; ++y) {
            for (let i = 0; i < REPETITION_COUNT; ++i) {
                const dataIndex = Math.floor(
                count * (Math.random() + 2 * x / width) / 3
                );
                const pixelIndex = (y * width + x) * 4;
                // copy the pixel over from the original image
                for (let offset = 0; offset < 4; ++offset) {
                imageDatas[dataIndex].data[pixelIndex + offset]
                    = originalData.data[pixelIndex + offset];
                }
            }
            }
        }
        
        // turn image datas into canvas'
        return imageDatas.map(data => {
            const $c = $canvas.cloneNode(true);
            $c.getContext("2d").putImageData(data, 0, 0);
            return $c;
        });
        }

        /**
         * Inserts a new element over an old one, hiding the old one
         */
        function replaceElementVisually($old, $new) {
        const $parent = $old.offsetParent;
        $new.style.top = `${$old.offsetTop}px`;
        $new.style.left = `${$old.offsetLeft}px`;
        $new.style.width = `${$old.offsetWidth}px`;
        $new.style.height = `${$old.offsetHeight}px`;
        $parent.appendChild($new);
        $old.style.visibility = "hidden";
        }

        /**
         * Disintegrates an element
         * @param {HTMLElement} $elm
         */
        function disintegrate($elm) {
        html2canvas($elm).then($canvas => {    
            // create the container we'll use to replace the element with
            const $container = document.createElement("div");
            $container.classList.add("disintegration-container");
            
            // setup the frames for animation
            const $frames = generateFrames($canvas, NUM_FRAMES);
            $frames.forEach(($frame, i) => {
            $frame.style.transitionDelay = `${1.35 * i / $frames.length}s`;
            $container.appendChild($frame);
            });
            
            // then insert them into the DOM over the element
            replaceElementVisually($elm, $container);
            
            // then animate them
            $container.offsetLeft; // forces reflow, so CSS we apply below does transition
            if (!DEBUG) {
            // set the values the frame should animate to
            // note that this is done after reflow so the transitions trigger
            $frames.forEach($frame => {
                const randomRadian = 2 * Math.PI * (Math.random() - 0.5);
                $frame.style.transform = 
                `rotate(${15 * (Math.random() - 0.5)}deg) translate(${60 * Math.cos(randomRadian)}px, ${30 * Math.sin(randomRadian)}px)
                rotate(${15 * (Math.random() - 0.5)}deg)`;
                    $frame.style.opacity = 0;
            });
            } else {
            $frames.forEach($frame => {
                $frame.style.animation = `debug-pulse 1s ease ${$frame.style.transitionDelay} infinite alternate`;
            });
            }
        });
        }


        /** === Below is just to bind the module and the DOM == */
        [...document.querySelectorAll(".disintegration-target")].forEach($elm => {
            $elm.addEventListener("click", () => {
                if ($elm.disintegrated) { return; }
                $elm.disintegrated = true;
                disintegrate($elm);
            });
        });
    </script>
</body>
</html>
