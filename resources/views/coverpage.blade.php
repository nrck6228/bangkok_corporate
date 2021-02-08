<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="canonical" href=""/>
    <link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/content/coverpage.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">
    <style type=text/css>
        body{
            background-image: url('assets/images/coverpage/bg-main-full.jpg');
        }

        .site-coverpage .wrapper .btn-wrapper .btn-enter a:hover{
            filter: brightness(125%);
        }
    </style>
</head>
<body>
    <div class="site-coverpage">
        <div class="container">
            <div class="wrapper md">
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
        </div>
    </div>
</body>
</html>