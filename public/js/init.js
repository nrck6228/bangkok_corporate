// header
$(function(){
  var w = $('.logo').outerWidth();
  //console.log(w);
  $('.topbar-main-wrapper').css({ 'width': 'calc(100% - ' + w + 'px)' });
});

// Menu
$(function () {
    // const get_Height = $('.menu-main-wrapper').height();
    // console.log(get_Height);
    $(".sub-menu-main li.open").hover(function(){
        $(this).addClass('show');
        $(this).find('.sub-menu-lv2').show();
    }, function(){
        $(".sub-menu-main li.open").removeClass('show');
        $(this).find('.sub-menu-lv2').hide();
    });

    $(".list-menu-lv2.open").hover(function(){
        $(this).addClass('show');
        $(this).find('.sub-menu-lv3').show();
    }, function(){
        $(".list-menu-lv2.open").removeClass('show');
        $(this).find('.sub-menu-lv3').hide();
    });

    //menu mobile
    // window.onscroll = function() {myFunction()};
    // var header = document.getElementById("menu_sticky");
    // var sticky = header.offsetTop;
    
    // function myFunction() {
    //     if (window.pageYOffset > sticky) {
    //         header.classList.add("sticky");
    //     } else {
    //         header.classList.remove("sticky");
    //     }
    // }


    // Navigation Menu Slider
    $('#nav-expander').on('click',function(e){
      e.preventDefault();
      $('body').toggleClass('nav-expanded');
    });
    $('#nav-close').on('click',function(e){
      e.preventDefault();
      $('body').removeClass('nav-expanded');
      //$('#out_canvas').removeClass('cl_out_canvas');
    });
    $('.menu-list-touch').navgoco({
        caretHtml: '<i class="fas fa-angle-down"></i>',
        accordion: true,
        openClass: 'open',
    });


	$(".menu-wrapper ul li").hover(function () {
	    $(this).addClass('active');
        $(this).find('.sub-menu').stop().slideDown('fast');
	}, function () {
	    $(this).removeClass('active');
	    $(this).find('.sub-menu').stop().slideUp('fast');
	});
        
});

// lang
$(function () {
    $('.control-container_lang').click(function(){
        $(this).toggleClass('active');
        $('.multi-lang').slideToggle();
    });
});

//slide
$(function () {
    // banner
    $('.list-banner').slick({
        autoplay: false,
        autoplaySpeed: 6000,
        infinite: false,
        dots: true,
        arrows: true,
    });
    if($('.slick-slide').length == 1){
      $('.slick-dots li').css('display','none');
    }
    
    // คำนวณ dots banner
    var slick_dots = $('.slick-dots li').size();
    var calculate_dots =  100 / slick_dots;
    $('.slick-dots li').css('width', calculate_dots + '%');
});

$(function () {
  $(".increase").on("click",function(){
      $("html").css("font-size",'72.5' + "%");
  });
  $(".normal").on("click",function(){
      $("html").css("font-size",'62.5' + "%");
  });
  $(".reduce").on("click",function(){
      $("html").css("font-size",'52.5'+ "%");
  });
});

//Gototop
function scrollToTop() {
    verticalOffset = typeof (verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $('body');
    offset = element.offset();
    offsetTop = offset.top;
    $('html, body').animate({ scrollTop: offsetTop }, 500, 'linear');
}
$(function () {
    $(document).on('scroll', function () {
        if ($(window).scrollTop() > 50) {
            $('.gototop').addClass('show');
        } else {
            $('.gototop').removeClass('show');
        }
    });

    $('.gototop').on('click', scrollToTop);
});

//upload File
var fileTypes = ['pdf', 'docx', 'rtf', 'jpg', 'jpeg', 'png', 'txt', 'mp4'];  //acceptable file types
function readURL(input) {
    if (input.files && input.files[0]) {
        var extension = input.files[0].name.split('.').pop().toLowerCase(),  //file extension from input file
            isSuccess = fileTypes.indexOf(extension) > -1;  //is extension in acceptable types

        if (isSuccess) { //yes
            var reader = new FileReader();
            reader.onload = function (e) {
                if (extension == 'pdf'){
                  $(input).closest('.fileUpload').find(".icon").attr('src','https://www.flaticon.com/svg/static/icons/svg/179/179483.svg');
                }
                else if (extension == 'docx'){
                  $(input).closest('.fileUpload').find(".icon").attr('src','https://image.flaticon.com/icons/svg/281/281760.svg');
                }
                else if (extension == 'rtf'){
                  $(input).closest('.fileUpload').find(".icon").attr('src','https://www.flaticon.com/svg/static/icons/svg/136/136539.svg');
                }
                else if (extension == 'png'){ $(input).closest('.fileUpload').find(".icon").attr('src','https://www.flaticon.com/svg/static/icons/svg/136/136523.svg'); 
                }
                else if (extension == 'jpg' || extension == 'jpeg'){
                  $(input).closest('.fileUpload').find(".icon").attr('src','https://www.flaticon.com/svg/static/icons/svg/136/136524.svg');
                }
                else if (extension == 'txt'){
                  $(input).closest('.fileUpload').find(".icon").attr('src','https://www.flaticon.com/svg/static/icons/svg/136/136538.svg');
                }
                else if (extension == 'mp4'){
                  $(input).closest('.fileUpload').find(".icon").attr('src','https://www.flaticon.com/svg/static/icons/svg/3534/3534231.svg');
                }
                else {
                  //console.log('here=>'+$(input).closest('.uploadDoc').length);
                  $(input).closest('.uploadDoc').find(".docErr").slideUp('slow');
                }
            }

            reader.readAsDataURL(input.files[0]);
        }
        else {
            //console.log('here=>'+$(input).closest('.uploadDoc').find(".docErr").length);
            $(input).closest('.uploadDoc').find(".docErr").fadeIn();
            setTimeout(function() {
              $('.docErr').fadeOut('slow');
          }, 9000);
        }
    }
}
$(document).ready(function(){
    
    $(document).on('change','.up', function(){
      var id = $(this).attr('id'); /* gets the filepath and filename from the input */
      var profilePicValue = $(this).val();
      var fileNameStart = profilePicValue.lastIndexOf('\\'); /* finds the end of the filepath */
      profilePicValue = profilePicValue.substr(fileNameStart + 1).substring(0,20); /* isolates the filename */
      //var profilePicLabelText = $(".upl"); /* finds the label text */
      if (profilePicValue != '') {
        //console.log($(this).closest('.fileUpload').find('.upl').length);
        $(this).closest('.fileUpload').find('.upl').html(profilePicValue); /* changes the label text */
      }
    });

    $(".btn-new").on('click',function(){
        $("#uploader").append('<div class="row uploadDoc"><div class="col"><div class="docErr">Please upload valid file</div><!--error--><div class="fileUpload btn btn-orange"> <img src="https://image.flaticon.com/icons/svg/136/136549.svg" class="icon"><span class="upl" id="upload">Upload document</span><input type="file" class="upload up" id="up" onchange="readURL(this);" /></div></div><div class="col-sm-1"><a class="btn-check"><i class="fa fa-times"></i></a></div></div>');
    });
    
    $(document).on("click", "a.btn-check" , function() {
      if($(".uploadDoc").length>1){
        $(this).closest(".uploadDoc").remove();
      }else{
        alert("You have to upload at least one document.");
      } 
    });

    $(document).on("click", "a.btn-check-only" , function() {
      if($(".uploadDocOnly").length>1){
        $(this).closest(".uploadDocOnly").remove();
      }else{
        alert("You have to upload at least one document.");
      } 
    });
    $(document).on("click", "a.btn-check-only-media" , function() {
      if($(".uploaderFilemedia").length>1){
        $(this).closest(".uploaderFilemedia").remove();
      }else{
        alert("You have to upload at least one Media.");
      } 
    });
});
