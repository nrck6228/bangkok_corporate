<div class="container-wrapper">
    <div class="row">
        <div class="col-xl-6">
            <div class="user--wrapper d-none d-xl-block">
                <div class="content__box">
                    <div class="row">
                        <div class="col-auto">
                            <img src="{{ asset('assets/images/icons/icon--user.svg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-sm-9">
                            <p>
                                ชื่อผู้ใช้เป็นภาษาอังกฤษ
                                (A-Z, a-z) และตัวเลข (0-9) 
                                ผสมกัน ความยาว 4-20 ตัวอักษร
                            </p>
                            <strong>
                                (ต้องขึ้นต้นด้วยอักขระเท่านั้น <span style="color: #ffae11;">ห้าม!!</span> มีเว้นวรรคอย่างเด็ดขาด)
                        </strong>
                        </div>
                    </div>
                </div>
                <div class="icon__box">
                    <img src="{{ asset('assets/images/icons/icon--circle.svg')}}" alt="">
                </div>
            </div>
            <div class="password--wrapper d-none d-xl-block">
                <div class="content__box">
                    <div class="row">
                        <div class="col-auto">
                            <img src="{{ asset('assets/images/icons/icon--password.svg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-sm-9">
                            <p>
                                รหัสเข้าใช้งานเป็นภาษาอังกฤษ 
                                (A-Z, a-z) และตัวเลข (0-9) 
                                และอักขระพิเศษ ($@#&I\!) 
                                ผสมกันความยาว 8-12 ตัวอักษร
                            </p>
                            <strong>
                                (<span style="color: #ffae11;">ห้าม!!</span> มีเว้นวรรคอย่างเด็ดขาด)
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="icon__box">
                    <img src="{{ asset('assets/images/icons/icon--circle.svg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="form-main">
                <div class="form-main_i">
                    <div class="logo">
                        <a href="/" title="กรุงเทพมหานคร" class="">
                            <img src="{{ asset('assets/images/logo-register.svg')}}" alt="" class="thumbnail">
                        </a>
                    </div>
                    <div class="title">
                        <h2>สมัครสมาชิก</h2>
                        <p>กรุณากรอกข้อมูลของท่าน</p>
                    </div>
                    <div class="sign-w-social">
                        <div class="row">
                            <div class="col-6">
                                <div class="btn__container">
                                    <a href="" title="Login with facebook" class="btn btn-f hover-filled-slide-up">
                                        <span><i class="fab fa-facebook"></i> facebook</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="btn__container">
                                    <a href="" title="Login with facebook" class="btn btn-g hover-filled-slide-up">
                                        <span><i class="fab fa-google"></i> google</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="line--graphic">
                        <div class="line__text">
                            หรือ
                        </div>
                    </div>
                    <div class="sign-w-form">
                        <form action="/register-form" method="get" autocomplete="off" class="form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-custom">
                                        <input class="form-control" type="text" name="" value="" placeholder="อีเมล" autocomplete="false">
                                    </div>
                                </div>
                            </div>
                            <div class="row d-block d-xl-none">
                                <div class="col-md-12">
                                    <div class="content__box--user">
                                        <div class="row">
                                            <div class="col-auto">
                                                <img src="{{ asset('assets/images/icons/icon--user.svg')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="col-9 col-sm-10 col-md-11">
                                                <p>
                                                    ชื่อผู้ใช้เป็นภาษาอังกฤษ
                                                    (A-Z, a-z) และตัวเลข (0-9) 
                                                    ผสมกัน ความยาว 4-20 ตัวอักษร
                                                </p>
                                                <strong>
                                                    (ต้องขึ้นต้นด้วยอักขระเท่านั้น <span style="color: #ffae11;">ห้าม!!</span> มีเว้นวรรคอย่างเด็ดขาด)
                                            </strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-custom">
                                        <input class="form-control" type="password" name="" value="" placeholder="รหัสผ่าน" autocomplete="false">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-custom">
                                        <input class="form-control" type="password" name="" value="" placeholder="ยืนยันรหัสผ่าน" autocomplete="false">
                                    </div>
                                </div>
                            </div>
                            <div class="row d-block d-xl-none">
                                <div class="col-md-12">
                                    <div class="content__box--password">
                                        <div class="row">
                                            <div class="col-auto">
                                                <img src="{{ asset('assets/images/icons/icon--password.svg')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="col-9 col-sm-10 col-md-11">
                                                <p>
                                                    รหัสเข้าใช้งานเป็นภาษาอังกฤษ 
                                                    (A-Z, a-z) และตัวเลข (0-9) 
                                                    และอักขระพิเศษ ($@#&I\!) 
                                                    ผสมกันความยาว 8-12 ตัวอักษร
                                                </p>
                                                <strong>
                                                    (<span style="color: #ffae11;">ห้าม!!</span> มีเว้นวรรคอย่างเด็ดขาด)
                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="sign-w-note">
                                        <div class="child">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1" name="Ans_Vote">
                                                <label class="custom-control-label" for="customSwitch1">ยอมรับข้อตกลง</label>
                                            </div>
                                        </div>
                                        <div class="child">
                                            <a href="javascript: void(0)" data-toggle="modal" data-target="#Modal_">เงื่อนไขการสมัครสมาชิก </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="btn__container">
                                        <button class="btn btn-secondary hover-filled-slide-up" type="submit">
                                            <span>ต่อไป</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="sign-w-login">
                        <div class="child">
                            <a href="regiter">เข้าสู่ระบบ <span>Register</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>