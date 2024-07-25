<div class="countdown--wrapper">
    <div class="election--figure">
        <a href="https://pr-bangkok.com/?page_id=99747" target="_blank">
            <img src="{{ asset('assets/images/election-OK3.png')}}" alt="เลือกตั้ง 66" class="w-100">
        </a> 
    </div>
    <div class="container">
        <h3 class="countdown--title">นับถอยหลังสู่วันเลือกตั้ง 14 พ.ค. 2566</h3>
        <div id="countdown" class="countdown--body">
            <ul>
            <li><span id="days" class="digits"></span><span>วัน</span></li>
            <li><span id="hours" class="digits"></span><span>ชั่วโมง</span></li>
            <li><span id="minutes" class="digits"></span><span>นาที</span></li>
            <li><span id="seconds" class="digits"></span><span>วินาที</span></li>
            </ul>
        </div>
    </div>
</div>
 
<style>
    .countdown--wrapper{
        position: relative;
        background-color: #072E54;
        padding: 30px 0;
    }

    .election--figure{
        position: absolute;
        width: 180px;
        height: auto;
        top: 15px;
        left: 15px;
        transition:  all 0.3s ease-in-out;
    }

    .election--figure:hover{
        transform: scale(1.1);
    }

    .election--figure a{
        display: block;
    }

    .countdown--title{
        margin-bottom: 20px;
        font-size: 30px;
        font-weight: 400;
        font-style: normal;
        line-height: 24px;
        text-align: center;
        color: white;
    }
    .countdown--body{
        text-align: center;
    }
    .countdown--body ul{
        list-style: none;
        margin: 0;
        padding: 0;
        display: table;
        table-layout: fixed;
        width: 100%;
    }
    .countdown--body ul li{
        display: inline-block;
        list-style: none;
        margin: 0;
        padding: 0;
        display: table-cell;
        position: relative;
        text-transform: uppercase;
    }

    .countdown--body ul li span{
        display: block;
        font-size: 2.2rem;
        line-height: 2.6rem;
        font-weight: 400;
        text-transform: capitalize;
        font-style: normal;
        color: white;
    }

    .countdown--body ul li span.digits{
        font-size: 115px;
        line-height: 120px;
        font-weight: 400;
        text-transform: capitalize;
        font-style: normal;
        color: #fec503;
    }

    @media all and (max-width: 991.98px) {
        .election--figure{
            position: relative;
            width: 160px;
            height: auto;
            top: auto;
            left: auto;
            margin: 0 0 30px 30px;
        }
        .countdown--body ul li span.digits{
            font-size: 80px;
            line-height: 85px;
        }   
    }

    @media all and (max-width: 767.98px) {
        .election--figure{
            width: 120px;
            margin: 0 auto 15px auto;
        }

        .countdown--title {
            font-size: 18px;
        }
    
        .countdown--body ul li span{
            display: inline-flex;
            font-size: 16px;
            line-height: 24px;
        }

        .countdown--body ul li span.digits{
            font-size: 24px;
            line-height: 24px;
            margin-right: 5px;
        } 
    }
</style>

<script>
    (function () {
    const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  //I'm adding this section so I don't have to keep updating this pen every year :-)
  //remove this if you don't need it
    // let targetDate = moment.tz("2023/05/14 09:00", "Australia/Sydney");
    let today = new Date(),
        dd = String(today.getDate()).padStart(2, "0"),
        mm = String(today.getMonth() + 1).padStart(2, "0"),
        yyyy = today.getFullYear(),
        nextYear = yyyy + 1,
        dayMonth = "05/14/ 09:00",
        election = dayMonth + yyyy;
  
    today = mm + "/" + dd + "/" + yyyy;
    if (today > election) {
        election = dayMonth + nextYear;
    }
    //end
  
  const countDown = new Date(election).getTime(),
      x = setInterval(function() {    

        const now = new Date().getTime(),
            distance = countDown - now;

            document.getElementById("days").innerText = Math.floor(distance / (day)),
            document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
            document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
            document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        // if (distance < 0) {
        //   document.getElementById("headline").innerText = "It's my election!";
        //   document.getElementById("countdown").style.display = "none";
        //   document.getElementById("content").style.display = "block";
        //   clearInterval(x);
        // }
        //seconds
      }, 0)
  }());
</script>