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
        .header--wrapper{
            background-image: url('assets/images/coverpage/header-coverpage.jpg');
        }

        .btn-wrapper .btn-enter a:hover{
            filter: brightness(125%);
        }
    </style>
</head>
<body>    
    <div class="special--coverpage">
        <!-- Photo -->
        <div class="container--wrapper">
            <div class="header--wrapper">
                <div class="header--wrapper__title">
                    ผลการนับคะแนนเลือกตั้งผู้ว่าราชการกรุงเทพมหานคร และสมาชิกสภากรุงเทพมหานคร<br>(อย่างไม่เป็นทางการ)
                </div>
            </div>

            <div class="wrapper">
                <div class="btn-wrapper">
                    <div class="btn-enter reflect">
                        <a href="http://www.bangkok.go.th/main/" style="background-color:#006600;">
                            เข้าสู่เว็บไซต์
                        </a>
                    </div>
                    <div class="btn-enter reflect">
                        <a href="http://www.bangkok.go.th/main/index.php?&l=en" style="background-color:#006600;">
                            Enter Site
                        </a>
                    </div>
                </div>
            </div>

            <div class="footer--wrapper">
                <div class="footer--wrapper__figure">
                    <img src="{{ asset('assets/images/coverpage/footer-coverpage.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</body>
</html>