<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Map API</title>

    <link rel="shortcut icon" href="{{ asset('img/logo.gif') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <link href="https://fonts.googleapis.com/css?family=Itim|Kanit|Prompt|Sarabun|Trirong&display=swap" rel="stylesheet">
<style>
    body {
        background-color: #720081;

        font-family: 'Trirong', serif;
    }
    img {
        -webkit-box-shadow: -4px 14px 63px -9px rgba(0,0,0,0.75);
        -moz-box-shadow: -4px 14px 63px -9px rgba(0,0,0,0.75);
        box-shadow: -4px 14px 63px -9px rgba(0,0,0,0.75);

        -webkit-animation-name: fadeInDown;
        animation-name: fadeInDown;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }
    /* header {
            background-image: url("img/index4.png");
            width: 60%;
            height: 600px;

            -webkit-animation-name: fadeInDown;
            animation-name: fadeInDown;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        } */
</style>
</head>
<body>
    <br><br><br><br>
<div class="container w3-center w3-animate-zoom">
    <div class="col-md-12">
            <center>
                {{-- <header>
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-lg-12">
                                  &nbsp;
                                    <br> <br><br><br><br><br><br>
                                    <br><br> <br><br><br><br><br><br><br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <center><a href="/index"><button type="button" class="btn btn-outline-warning" data-toggle="tooltip" data-placement="right" title="Visit website">เข้าสู่เว็บไซต์ <i class="fa fa-sign-in" aria-hidden="true"></i></button></a></center>
                            </div>
                        </div>
                    </div>
                </header> --}}
            </center>


        <img src="img/index2.png" class="img-fluid" alt="index" width="60%" height="600">
        <br>
        <br>
        <center>
            <a href="{{ asset('/map') }}"><button type="button" class="btn btn-outline-warning" data-toggle="tooltip" data-placement="right" title="">เข้าสู่แผนที่ <i class="fa fa-sign-in" aria-hidden="true"></i></button></a>
            &nbsp;
            <a target="_blank" href="https://www.ubu.ac.th/web/research/content/อพ.สธ.%20มหาวิทยาลัยอุบลราชธานี/"><button type="button" class="btn btn-outline-warning" data-toggle="tooltip" data-placement="right" title="">อพ.สธ.-มอบ. <i class="fa fa-sign-in" aria-hidden="true"></i></button></a>
        </center>
    </div>
    <br>
    <br>
    {{-- <center><a href="/index"><button type="button" class="btn btn-outline-warning" data-toggle="tooltip" data-placement="right" title="Visit website">เข้าสู่เว็บไซต์ <i class="fa fa-sign-in" aria-hidden="true"></i></button></a></center> --}}
    <div>
        <p style="color: white; font-size: large; ">แผนที่แสดงตำแหน่งหน่วยงานที่ร่วมสนองพระราชดำริ โครงการอนุรักษ์พันธุกรรมพืชอันเนื่องมาจากพระราชดำริ สมเด็จพระเทพรัตนราชสุดาฯ<br>สยามบรมราชกุมารี ในเขตพื้นที่รับผิดชอบของ ศูนย์ประสานงานโครงการอนุรักษ์พันธุกรรมพืชอันเนื่องมาจากพระราชดำริ สมเด็จพระเทพรัตนราชสุดาฯ<br>สยามบรมราชกุมารี มหาวิทยาลัยอุบลราชธานี (อพ.สธ.-มอบ.)</p>
    </div>
    {{-- text-shadow: 2px 2px 4px #000000; --}}
</div>
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
</body>
</html>
