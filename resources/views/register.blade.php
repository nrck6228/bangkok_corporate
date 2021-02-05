@section('title', 'เข้าสู่ระบบ')
@section('tagkeyword', '')
@section('tagdescription', '')

@extends('include/start')

@section('contentpage')
 
<div class="container-in">
    <div id="main-content" class="page type-login">
        <div class="page-section regiter">
            @include('page/register.page')
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal modal-custom fade" id="Modal_" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <div class="modal-close" data-dismiss="modal" aria-label="Close">
            <div class="icon-close"></div>
        </div>
      </div> -->
      <div class="modal-body">
        <div class="text-editor-tool">
            <h3>เงื่อนไขการสมัครสมาชิก </h3>
            <p>ผู้ขอสมัครสมาชิก www.bangkok.go.th กรุณาอ่านข้อตกลงด้านล่างนี้โดยละเอียด เพื่อรักษาสิทธิ ประโยชน์ในการเป็นสมาชิกของท่าน</p>
            <ul>
                <li>
                การสมัครสมาชิก www.bangkok.go.th ไม่ต้องเสียค่าใช้จ่ายใดๆ ทั้งสิ้น
                </li>
                <li>
                ผู้ที่ต้องการสมัครสมาชิก ต้องกรอกข้อมูลของตนเองที่เป็นจริงแก่ www.bangkok.go.th ให้ครบทุกข้อ เพื่อสิทธิประโยชน์ของท่าน ในการเข้าร่วมกิจกรรมของ www.bangkok.go.th หากทีมงาน www.bangkok.go.th ตรวจสอบพบว่า ท่านให้ข้อมูลเท็จ ทีมงานมีสิทธิ์ ไม่ให้สิทธิ์การเป็นสมาชิกได้ หรือยกเลิกการเป็นสมาชิกได้
                </li>
                <li>
                ผู้ใดแอบอ้าง หรือกระทำการใดๆ อันเป็นการละเมิดสิทธิ์ส่วนบุคคล โดยใช้ข้อมูลของผู้อื่นมาแอบอ้างสมัครสมาชิก เพื่อให้ได้สิทธิ์การสมาชิก ถือเป็นความผิด ต้องรับโทษตามที่กฎหมายกำหนดไว้
                </li>
                <li>
                ผู้สมัครต้องยินยอมให้ www.bangkok.go.th ตรวจสอบความเป็นจริงของข้อมูลการสมัคร หากตรวจสอบพบว่าท่านให้ข้อมูลเท็จหรือไม่ชัดเจน ทีมงานมีสิทธิ์ ไม่ให้สิทธิ์การเป็นสมาชิกได้
                </li>
                <li>
                สมาชิกต้องปฏิบัติตามกฎ กติกา มารยาท ที่ทาง www.bangkok.go.th ตั้งขึ้นมาอย่างเคร่งครัด ทั้งนี้ เพื่อความสงบเรียบร้อยภายใน www.bangkok.go.th หากท่านละเมิด ทีมงาน www.bangkok.go.th มีสิทธิ์ยกเลิกเป็นสมาชิกได้
                </li>
                <li>
                ข้อมูลของสมาชิก จะถูกเก็บเป็นความลับอย่างสูงสุด ทีมงาน www.bangkok.go.th จะไม่เปิดเผยข้อมูลของท่านก่อนได้รับอนุญาต เพื่อประโยชน์ในด้านอื่นๆ ทั้งสิ้น นอกจาก www.bangkok.go.th จะได้รับหมายศาล หรือหนังสือราชการ จากหน่วยงานสำนักงานตำรวจแห่งชาติ
                </li>
                <li>
                ทีมงาน www.bangkok.go.th ขอสงวนสิทธิ์ในการยกเลิกความเป็นสมาชิกได้ โดยไม่ต้องบอกกล่าว ให้ทราบล่วงหน้า ทีมงาน www.bangkok.go.th ขอสงวนสิทธิ์ในการหยุดให้บริการระบบสมาชิก เมื่อใดก็ได้ โดยไม่ต้องแจ้งให้สมาชิกทราบล่วงหน้า
                </li>
            </ul>
        </div>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-close hover-filled-slide-up" data-dismiss="modal"><span>Close</span></button>
      </div>
    </div>
  </div>
</div>

@include('include.css_scripts')
@endsection

