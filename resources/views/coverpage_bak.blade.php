<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="canonical" href=""/>
    <link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('js/modernizr.custom.js')}}">
    <link rel="stylesheet" href="{{ asset('css/content/coverpage.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">
    <style type=text/css>
        body{
            background-image: url('assets/images/coverpage/bg-main-full.jpg');
        }

        .btn-wrapper .btn-enter a:hover{
            filter: brightness(125%);
        }
    </style>
</head>
<body>    
    <div class="site-coverpage">
        <div class="logo">
            <a href="/">
                <img src="{{ asset('assets/images/logo-register.svg')}}" alt="logo">
            </a>
        </div>

        <!-- Photo -->
        <!-- <div class="container-photo">
            <div class="wrapper md">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/images/coverpage/img-main-full.png')}}" alt="icon">               
                </div>
                <div class="txt-wrapper">
                    <div class="txt-editor">
                        <h2>ตัวอย่างไตเติ้ล</h2>
                        <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
                <div class="btn-wrapper">
                    <div class="btn-enter reflect">
                        <a href="http://www.bangkok.go.th/main/" style="background-color: #a8600b;">
                            เข้าสู่เว็บไซต์
                        </a>
                    </div>
                    <div class="btn-enter reflect">
                        <a href="http://www.bangkok.go.th/main/index.php?&l=en" style="background-color: #a8600b;">
                            Enter Site
                        </a>
                    </div>
                </div>
            </div>

            <div class="wrapper sm">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/images/coverpage/img-main-full.png')}}" alt="icon">
                </div>
                <div class="btn-wrapper">
                    <div class="btn-enter reflect">
                        <a href="http://www.bangkok.go.th/main/" style="background-color: #a8600b;">
                            เข้าสู่เว็บไซต์
                        </a>
                    </div>
                    <div class="btn-enter reflect">
                        <a href="http://www.bangkok.go.th/main/index.php?&l=en" style="background-color: #a8600b;">
                            Enter Site
                        </a>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Video -->
        <!-- <div class="container-video">
            <video loop autoplay muted playsinline preload="" id="myVideo">
                <source src="assets/videos/ocean.mp4" type="video/mp4">
                <img src="{{ asset('assets/images/coverpage/img-main-full.png')}}" alt="An image of an explosion.">
            </video>
            <div class="btn-wrapper">
                <div class="btn-enter reflect">
                    <a href="http://www.bangkok.go.th/main/" style="background-color: #a8600b;">
                        เข้าสู่เว็บไซต์
                    </a>
                </div>
                <div class="btn-enter reflect">
                    <a href="http://www.bangkok.go.th/main/index.php?&l=en" style="background-color: #a8600b;">
                        Enter Site
                    </a>
                </div>
            </div>
        </div> -->

        <!-- Audio -->
        <div class="container-audio" style="background-image: url('{{ asset('assets/images/main-slide/photo1.jpg')}}')">
            <audio id="myAudio" controls> 
                <source src="http://traffic.libsyn.com/altmod/indiefeed_65daysofstatic_px3.mp3" />
                <source src="http://www.tonycuffe.com/mp3/tail%20toddle.mp3" />
                <source src="http://www.tonycuffe.com/mp3/girlwho.mp3" />    
            </audio>
            <div class="btn-wrapper">
                <div class="btn-enter reflect">
                    <a href="http://www.bangkok.go.th/main/" style="background-color: #a8600b;">
                        เข้าสู่เว็บไซต์
                    </a>
                </div>
                <div class="btn-enter reflect">
                    <a href="http://www.bangkok.go.th/main/index.php?&l=en" style="background-color: #a8600b;">
                        Enter Site
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>