<div class="container-wrapper">
    <div class="row">
        <div class="col-xl-6 offset-xl-6">
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
                            <div class="col-md-6">
                                <div class="btn__container">
                                    <a href="" title="Login with facebook" class="btn btn-f hover-filled-slide-up">
                                        <span><i class="fab fa-facebook"></i> facebook</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="btn__container">
                                    <a href="" title="Login with facebook" class="btn btn-g hover-filled-slide-up">
                                        <span><i class="fab fa-google"></i> google</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sign-w-form">
                        <form action="/register-form" method="get" autocomplete="off" class="form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-custom">
                                        <input class="form-control" type="text" name="" value="" placeholder="ชื่อผู้ใช้" autocomplete="false">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-custom">
                                        <div class="form-note">
                                            ขนาดความยาว 4-20 ตัวอักษร
                                        </div>
                                        <div class="form-note">
                                            ชื่อสมาชิกต้องขึ้นต้นด้วยตัวอักษร (a-z, A-Z) เท่านั้น
                                        </div>
                                        <div class="form-note">
                                            ต้องเป็นตัวอักษรภาษาอังกฤษ (a-z, A-Z), ตัวเลข (0-9)
                                        </div>
                                        <div class="form-note">
                                            ห้ามมีการเว้นวรรคอย่างเด็ดขาด
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
                    <!-- <div class="sign-w-note">
                        <div class="child">
                            <a href="forgot">Forgot Password</a>
                        </div>
                        <div class="child">
                            สมัครสมาชิก<a href="regiter">Register</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>