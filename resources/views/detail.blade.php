<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{$data -> Name}}</title>
    <meta charset="UTF-8">
<link rel="shortcut icon" href="{{ asset('img/logo.gif') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>API UBU</title>
    <link rel="shortcut icon" href="img/logo.gif" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/theme.css"> -->
    <style>
      body,
      html {
          margin: 0px;
          height: 100%;
      }
      body{
          display:flex;
          flex-direction:column;
          overflow-x: hidden;
      }
      .navbar-custom {
          background-color: #a400d6;
      }
      .navbar {
          margin-bottom: 0px;
      }

      .footer {
          margin-top:auto;
          background-color: #a400d6;
          color: white;
          text-align: center;
      }
      img{
            max-height:100%;
            max-width:100%;
        }
        .box.large{
            height:400px;
        }
  </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <img src="{{ asset('img/logo1.png') }}"  width="35" height="35" alt="no image" >
          <a class="navbar-brand" href="{{ url('/map') }}" style="font-size: 1rem; text-align: right;">&nbsp;แผนที่แสดงตำแหน่งหน่วยงานร่วมสนองพระราชดำริโครงการอนุรักษ์พันธุกรรมพืชอันเนื่องมาจากพระราชดำริฯ</a>
        <img src="{{ asset('img/logo.gif') }}"  width="35" height="35" alt="no image" >
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


          <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="{{ asset('/') }}">หน้าเเรก <span class="sr-only">(current)</span></a>
                      </li>

                      <form class="form-inline my-2 my-lg-0">
                          @guest
                          <a href="{{ url('/login') }}" class="btn btn-warning" type="buton"><i class='fas fa-sign-in-alt'></i> เข้าสู่ระบบ</a>
                          @if (Route::has('register'))

                          @endif
                          @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  @if (Auth::user()->hasRole('super-admin'))
                                  <a class="dropdown-item" href="{{ asset('admin/user') }}">
                                      <i class="fas fa-user-edit"></i> เเก้ไขข้อมูล
                                  </a>

                                  @else
                                  <a class="dropdown-item" href="{{ asset('/home') }}">
                                      <i class="fas fa-user-edit"></i> เเก้ไขข้อมูล
                                  </a>
                                  @endif
                                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                      <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                          @endguest
                          @guest
                          <a href="/login" class="btn btn-warning float-right" type="buton" style="display: none;"><i class='fas fa-sign-in-alt'></i> เข้าสู่ระบบ</a>
                          @if (Route::has('register'))
                          @endif
                          @else

                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" style="display: none;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="display: none;">

                              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                          @endguest
                      </form>
                  </ul>
              </div>
        </nav>
<div class="container">
        <!-- Portfolio Item Heading -->
        <h1 class="my-4">
            {{$data -> Name}}
        </h1>
        <hr>
        <!-- Portfolio Item Row -->
        <div class="row">

          <div class="col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel box large">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>

                        </ol>
                        <div class="carousel-inner box large">

                          <div class="carousel-item active">
                            <img id=1 onerror="standby(1)" class="d-block w-100" src="{{ asset('image_school/'.$data->Picture_1) }}" >
                          </div>
                          <div class="carousel-item">
                            <img id=2 onerror="standby(2)" class="d-block w-100" src="{{ asset('image_school/'.$data->Picture_2) }}" >
                          </div>
                          <div class="carousel-item">
                            <img id=3 onerror="standby(3)" class="d-block w-100" src="{{ asset('image_school/'.$data->Picture_3) }}" >
                          </div>
                           <div class="carousel-item">
                            <img id=4 onerror="standby(4)" class="d-block w-100" src="{{ asset('image_school/'.$data->Picture_4) }}" >
                          </div>
                           <div class="carousel-item">
                            <img id=5 onerror="standby(5)" class="d-block w-100" src="{{ asset('image_school/'.$data->Picture_5) }}" >
                          </div>
                           <div class="carousel-item">
                            <img id=6 onerror="standby(6)" class="d-block w-100" src="{{ asset('image_school/'.$data->Picture_6) }}" >
                          </div>
                           <div class="carousel-item">
                            <img id=7 onerror="standby(7)" class="d-block w-100" src="{{ asset('image_school/'.$data->Picture_7) }}" >
                          </div>
                           <div class="carousel-item">
                            <img id=8 onerror="standby(8)" class="d-block w-100" src="{{ asset('image_school/'.$data->Picture_8) }}" >
                          </div>
                           <div class="carousel-item">
                            <img id=9 onerror="standby(9)" class="d-block w-100" src="{{ asset('image_school/'.$data->Picture_9) }}" >
                          </div>
                           <div class="carousel-item">
                            <img id=10 onerror="standby(10)" class="d-block w-100" src="{{ asset('image_school/'.$data->Picture_10) }}" >
                          </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>

          </div>

          <div class="col-md-4">
            <p class="my-3"><b>ที่อยู่ :</b> {{$data -> Address}}<p>
            <p class="my-3"><b>จังหวัด :</b> {{$data -> Province}}<p>
            <p class="my-3"><b>ระดับ :</b>
            <?php
            //<p class="my-3"><b>ระดับ :</b> เกียรติบัตรขั้นที่ 1 เกียรติบัตรแห่งความมุ่งมั่น อนุรักษ์ สรรพสิ่ง สรรพชีวิต ด้วยจิตสำนึกของครูและเยาวชน <p>
            if ( $data -> Status == "ก.1" ){
                echo ('เกียรติบัตรขั้นที่ 1 เกียรติบัตรแห่งความมุ่งมั่น อนุรักษ์ สรรพสิ่ง สรรพชีวิต ด้วยจิตสำนึกของครูและเยาวชน');
            }elseif( $data -> Status == "ก.2"){
                echo ('เกียรติบัตรขั้นที่ 2 เกียรติบัตรแห่งการเข้าสู่สถานภาพสถานศึกษา อบรมสั่งสอน เบ็ดเสร็จบนฐานงานสวนพฤกษศาสตร์โรงเรียน');
            }else{
                echo ('ป้ายพระราชทาน');
            }
            ?>
            <p>

            <p class="my-3"><b>วันที่ได้รับป้ายพระราชทาน :</b> {{date('d-mY', strtotime($data->Register_date))}}<p>
            <p class="my-3"><b>วันที่ได้รับเกียรติบัตรขั้นที่ 1 :</b> {{date('d-mY', strtotime($data->Certificate_date1))}}<p>
            <p class="my-3"><b>วันที่ได้รับเกียรติบัตรขั้นที่ 2 :</b> {{date('d-mY', strtotime($data->Certificate_date2))}}<p>


                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">วีดีโอ <i class="fas fa-video"></i> </button>

                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">วีดีโอ</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                            <iframe width="100%" height="500" src="{{$data -> Vdo}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
          </div>

        </div>


            </div>
            <hr>
            </div>
            <br>
    <div class="footer">
        <br>
        <p>
            โครงการอนุรักษ์พันธุกรรมพืชอันเนื่องมาจากพระราชดำริ
            สมเด็จพระเทพรัตนราชสุดาฯ สยามบรมราชกุมารี
            <br>
             มหาวิทยาลัยอุบลราชธานี โทร 045-353035
             <hr width="35%">
        </p>
    </div>
    <script>
            // function standby(x) {
            //     document.getElementById(x).src = "{{ asset('image_school/NoImageFound.jpg') }}"
            // }

            function standby(x) {
                document.getElementById(x).src = "http://202.28.49.95/~plant/plantmaker/public/image_school/NoImageFound.png"
            }

    </script>


</body>

</html>
