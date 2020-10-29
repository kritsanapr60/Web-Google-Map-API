<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <!-- ใช้ไม่ได้ -->
    <link rel="shortcut icon" href="{{ asset('img/logo.gif') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>API UBU</title>
    <link rel="shortcut icon" href="img/logo.gif" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
        body {
            background-image: url('/pix/samples/bg1.gif');
        }

        main {
            margin-bottom: 200%;
        }

        .navbar-custom {
            background-color: #a400d6;
        }

        body,
        html {
            padding-bottom: 20px;
            overflow-x: hidden;
            overflow-y: hidden;
        }

        .navbar {
            margin-bottom: 0px;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 100px;
            background-color: #a400d6;
            color: white;
            text-align: center;
        }
        .CellWithComment{
            position:relative;
        }

            .CellComment{
            display:none;
            position:absolute;
            z-index:100;
            border:2px;
            background-color:white;
            border-style:solid;
            border-width:2px;
            border-radius: 5px;
            padding:8px;
            top:20px;
            left:20px;
        }

        .CellWithComment:hover span.CellComment{
            display:block;
        }

        #map {
            height: 1200px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
        }
        /* .dropdown-menu {
            width: 100% !important;
            height: 100% !important;
        } */

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <img src="{{ asset('img/logo1.png') }}"  width="35" height="35" alt="no image" >
          <a class="navbar-brand" href="{{ url('/map') }}" style="font-size: 1rem; text-align: right;">&nbsp; แผนที่แสดงตำแหน่งหน่วยงานร่วมสนองพระราชดำริโครงการอนุรักษ์พันธุกรรมพืชอันเนื่องมาจากพระราชดำริฯ</a>
        <img src="{{ asset('img/logo.gif') }}"  width="35" height="35" alt="no image" >
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


          <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                      {{-- <li class="nav-item">
                          <a class="nav-link" href="{{ asset('/') }}">หน้าเเรก <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ url('/โรงเรียน') }}" id="dropdown03" aria-expanded="false">โรงเรียน</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ url('/องค์การบริหารส่วนตําบล') }}" id="dropdown03" aria-expanded="false">องค์กรปกครองส่วนท้องถิ่น</a>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">จังหวัด</a>
                          <div class="dropdown-menu" aria-labelledby="dropdown03">
                              <a class="dropdown-item" href="{{ url('/อุบลราชธานี') }}">อุบลราชธานี</a>
                              <a class="dropdown-item" href="{{ url('/ศรีสะเกษ') }}">ศรีสะเกษ</a>
                              <a class="dropdown-item" href="{{ url('/สุรินทร์') }}">สุรินทร์</a>
                              <a class="dropdown-item" href="{{ url('/บุรีรัมย์') }}">บุรีรัมย์</a>
                              <a class="dropdown-item" href="{{ url('/อำนาจเจริญ') }}">อำนาจเจริญ</a>
                              <a class="dropdown-item" href="{{ url('/ยโสธร') }}">ยโสธร</a>
                          </div>
                      </li> --}}
                      <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target=".bd-example-modal-sm">เเสดงเเถบป้าย</button>
                      &nbsp;

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
                      <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-list-ul"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="nav-item">
                                            <a class="nav-link"  style="color:black" href="{{ asset('/') }}">หน้าเเรก <span class="sr-only">(current)</span></a>
                                        </a>
                                        <a class="nav-item">
                                            <a class="nav-link" style="color:black" href="{{ url('/โรงเรียน') }}" id="dropdown03" aria-expanded="false">โรงเรียน</a>
                                        </a>
                                        <a class="nav-item">
                                            <a class="nav-link" style="color:black" href="{{ url('/องค์การบริหารส่วนตําบล') }}" id="dropdown03" aria-expanded="false">องค์กรปกครองส่วนท้องถิ่น</a>
                                        </a>
                                        <a class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" style="color:black" href="" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">จังหวัด</a>
                                            <div class="dropdown-menu" aria-labelledby="dropdown03">
                                                <a class="dropdown-item" href="{{ url('/อุบลราชธานี') }}">อุบลราชธานี</a>
                                                <a class="dropdown-item" href="{{ url('/ศรีสะเกษ') }}">ศรีสะเกษ</a>
                                                <a class="dropdown-item" href="{{ url('/สุรินทร์') }}">สุรินทร์</a>
                                                <a class="dropdown-item" href="{{ url('/บุรีรัมย์') }}">บุรีรัมย์</a>
                                                <a class="dropdown-item" href="{{ url('/อำนาจเจริญ') }}">อำนาจเจริญ</a>
                                                <a class="dropdown-item" href="{{ url('/ยโสธร') }}">ยโสธร</a>
                                            </div>
                                        </a>
                            </div>
                    </li>
                  </ul>
              </div>
        </nav>
    <!-- ================= -->
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby=".bd-example-modal-sm" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ข้อมูลสีเเต่ละป้าย</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                        <table style="width:100% " text-align="center" border="2" bordercolor="white">
                            <tr>
                                <td bgcolor="#630436">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td class="CellWithComment">&nbsp;&nbsp; ก.1
                                    <span class="CellComment">เกียรติบัตรขั้นที่ 1 เกียรติบัตรแห่งความมุ่งมั่น อนุรักษ์ สรรพสิ่ง สรรพชีวิต ด้วยจิตสำนึกของครูและเยาวชน</span>
                                </td>
                                </tr>
                            <tr>
                                <td bgcolor="#F6D400">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td class="CellWithComment">&nbsp;&nbsp; ก.2
                                    <span class="CellComment"> เกียรติบัตรขั้นที่ 2 เกียรติบัตรแห่งการเข้าสู่สถานภาพสถานศึกษา อบรมสั่งสอน เบ็ดเสร็จบนฐานงานสวนพฤกษศาสตร์โรงเรียน </span>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#B65FCF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td class="CellWithComment">&nbsp;&nbsp; ป้ายพระราชทาน
                                    <span class="CellComment">ป้ายพระราชทาน</span>
                                </td>
                            </tr>
                        </table>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-book"></i> ข้อมูลสมาชิกเเผนที่</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="containe-fluid">
        <div class="row">
            <div class="col-md-12">

                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">ข้อมูลสมาชิกจังหวัด</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                @foreach ($abts as $key=> $abt)
                                {{$key+1}}. {{$abt->Name}} จังหวัด {{$abt->Province}} ระดับ {{$abt->Status}}
                                <br>
                                @endforeach
                                <br><br>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="map"></div>
    <script>
    function initMap(){
    var locations = [
    @foreach($abts as $abt)
    ['{!! $contentStrings[$abt->Name] !!}', {{ $abt->Latitude }}, {{ $abt->Longitude }},'{{ $abt->Status }}','{{ $abt->Name }}'],
    @endforeach
    ];
    var myLatlng = { lat: {{$lat}}, lng: {{$lng}} };
    var zoom = {{$zoom}}
    var map = new google.maps.Map(document.getElementById('map'), {
    zoom: zoom,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;
    // http://maps.google.com/mapfiles/ms/icons/blue-dot.png
    for (i = 0; i < locations.length; i++) {
    if (locations[i][3] == "ป้ายพระราชทาน") {
        var urlmaker = "{{ asset('img/3.png') }}"
    } else if(locations[i][3] == "ก.1") {
        var urlmaker = "{{ asset('img/2.png') }}"
    } else if(locations[i][3] == "ก.2") {
        var urlmaker = "{{ asset('img/1.png') }}"
    }


    marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon: urlmaker,
        title: locations[i][4],
    });

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
        infowindow.setContent(locations[i][0]);
        infowindow.open(map, marker);
        }
    })(marker, i));
    }
    }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyByxAxM_f64MaGCNie0y3joCJmUUA_TRZE&callback=initMap">
    </script>
</body>
</html>
