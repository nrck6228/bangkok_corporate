<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-main">
                <div class="form-main_i bg-white">
                    <div class="logo">
                        <a href="/" title="กรุงเทพมหานคร" class="">
                        <img src="{{ asset('assets/images/logo-register.svg')}}" alt="" class="thumbnail">
                        </a>
                    </div>
                    <div class="title">
                        <h2>ข้อมูลส่วนตัว</h2>
                        <p>กรุณากรอกข้อมูลของท่าน</p>
                    </div>
                    <div class="sign-w-form">
                        <form action="" method="get" autocomplete="off" class="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-custom">
                                        <input class="form-control" type="text" name="" value="" placeholder="ชื่อ" autocomplete="false">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-custom">
                                        <input class="form-control" type="text" name="" value="" placeholder="นามสกุล" autocomplete="false">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-custom">
                                        <input class="form-control" type="text" name="" value="" placeholder="เพศ" autocomplete="false">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-custom">
                                        <input id="birthDate" class="form-control" type="text" name="" value="" placeholder="วัน/เดือน/ปี เกิด" />
                                        <span class="icon-calendar" id="icon_birthDate"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-custom">
                                        <input class="form-control" type="text" name="" value="" placeholder="หมายเลขบัตรประจำตัวประชาชน" autocomplete="false">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-custom">
                                        <input class="form-control" type="email" name="" value="" placeholder="อีเมล" autocomplete="false">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="title">
                                        <p>ที่อยู่</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-custom">
                                        <textarea class="text-area" name="" id="" rows="3" autocomplete="false"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-custom">
                                        <input class="form-control" type="text" name="" value="" placeholder="รหัสไปรษณีย์" autocomplete="false">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="slc-custom">
                                        <select class="slc selectpicker" data-live-search="true" title="จังหวัด">
                                            <option>จังหวัด</option>
                                            <option>จังหวัด</option>
                                            <option>จังหวัด</option>
                                            <option>จังหวัด</option>
                                            <option>จังหวัด</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-custom">
                                        <input class="form-control" type="text" name="" value="" placeholder="โทรศัพท์" autocomplete="false">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="filelabel">
                                        <i class="fas fa-paperclip"></i>
                                        <span class="title">
                                            Choose File
                                        </span>
                                        <input class="FileUpload1" id="FileInput" name="booking_attachment" type="file"/>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="btn__container">
                                        <button class="btn btn-secondary hover-filled-slide-up" type="button" data-toggle="modal" data-target="#Modal_">
                                            <span>ลงทะเบียน</span>
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