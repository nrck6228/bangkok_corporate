@section('title', 'ลืมรหัสผ่าน')
@section('tagkeyword', '')
@section('tagdescription', '')

@extends('include/start')

@section('contentpage')
 
<div class="container-in">
    <div id="main-content" class="page type-login">
        <div class="page-section">
            @include('page/login.change')
        </div>
    </div>
</div>

@include('include.css_scripts')
<!-- Modal -->
<div class="modal modal-center fade" id="Modal_" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <div class="modal-close" data-dismiss="modal" aria-label="Close">
            <div class="icon-close"></div>
        </div>
      </div> -->
      <div class="modal-body">
        <div class="text-editor-tool" style="text-align: center">
            <h3><i class="far fa-check-circle"></i> </h3>
            <p>ระบบได้รับข้อมูลการลงทะเบียนของท่านเรียบร้อยแล้ว</p>
            <p>โปรดรอการแจ้งยืนยันผลทางอีเมลที่ลงทะเบียนไว้ หลังตรวจสอบข้อมูลเสร็จสิ้น</p>
        </div>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-close hover-filled-slide-up" data-dismiss="modal"><span>Close</span></button>
      </div>
    </div>
  </div>
</div>
@endsection

