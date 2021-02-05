@section('title', 'เข้าสู่ระบบ')
@section('tagkeyword', '')
@section('tagdescription', '')

@extends('include/start')

@section('contentpage')
 
<div class="container-in">
    <div id="main-content" class="page type-login">
        <div class="page-section regiter-form">
            @include('page/register.form')
        </div>
    </div>
</div>

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

@include('include.css_scripts')
<script type="text/javascript">
    // TH
    $.datepicker.regional['th'] = {
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        dayNamesMin: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
        monthNamesShort: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
        constrainInput: true,
        yearOffSet: 543,
        yearRange: '-10:+0',
        maxDate: 0,
    };
    $.datepicker.setDefaults($.datepicker.regional['th']);
    // EN
    /*$.datepicker.regional['en'] ={
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        constrainInput: true,
        yearOffSet : 0,
        yearRange: '-80:+0',
        maxDate: 0,
        onSelect: function(dateText, inst) {
            var old = $(this).datepicker('getDate');
            var age = GetAge(old);
            console.log(age);
            $('#age').val(age);
        },
    };
    $.datepicker.setDefaults($.datepicker.regional['en']);*/

    $(document).ready(function () {
        $("#birthDate").datepicker($.datepicker.regional["th"]);
        $("#birthDate").datepicker("setDate", new Date());
        $('#icon_birthDate').click(function () {
            $("#birthDate").focus();
        });
    });
</script>

<script type="text/javascript">
    $("#FileInput").on('change',function (e) {
            var labelVal = $(".title").text();
            var oldfileName = $(this).val();
                fileName = e.target.value.split( '\\' ).pop();

                if (oldfileName == fileName) {return false;}
                var extension = fileName.split('.').pop();

            if ($.inArray(extension,['jpg','jpeg','png']) >= 0) {
                $(".filelabel i").removeClass().addClass('far fa-file-image');
                $(".filelabel i, .filelabel .title").css({'color':'#10a44a'});
                // $(".filelabel").css({'border-bottom':' 2px solid #208440'});
            }
            else if(extension == 'pdf'){
                $(".filelabel i").removeClass().addClass('far fa-file-pdf');
                $(".filelabel i, .filelabel .title").css({'color':'#eb4335'});
                // $(".filelabel").css({'border-bottom':' 2px solid red'});

            }
  else if(extension == 'doc' || extension == 'docx'){
            $(".filelabel i").removeClass().addClass('far fa-file-word');
            $(".filelabel i, .filelabel .title").css({'color':'#2388df'});
            // $(".filelabel").css({'border-bottom':' 2px solid #2388df'});
        }
            else{
                $(".filelabel i").removeClass().addClass('far fa-file-alt');
                $(".filelabel i, .filelabel .title").css({'color':'#525252'});
                // $(".filelabel").css({'border-bottom':' 2px solid black'});
            }

            if(fileName ){
                if (fileName.length > 10){
                    $(".filelabel .title").text(fileName.slice(0,4)+'...'+extension);
                }
                else{
                    $(".filelabel .title").text(fileName);
                }
            }
            else{
                $(".filelabel .title").text(labelVal);
            }
        });
</script>
@endsection

