{{-- {{ $data }} --}}
<div class="container">
    <div class="card border-navbar-custom mb-3" style="max-width: 90rem;">
        <div class="card-header navbar-custom text-white">เพิ่มข้อมูล</div>
        <div class="card-body">
            <form method="post" action="{{ route('data.update') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleFormControlInput1">ชื่อ</label>
                    <input type="text" name="name" class="form-control" id="schoolname" value="{{ $data->Name }}" required>
                    <p class="text-danger">*โปรดระบุชื่อ</p>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">ที่อยู่</label>
                    <input type="text" name="address" class="form-control" id="address" value="{{ $data->Address }}" required>
                    <p class="text-danger">*โปรดระบุที่อยู่</p>
                </div>


                <div class="form-group">
                    <label for="exampleFormControlSelect1">จังหวัด</label>
                    <select class="form-control" name="province" id="exampleFormControlSelect1">

                        <?php
                        $d = array('บุรีรัมย์', 'ยโสธร', 'ศรีสะเกษ', 'สุรินทร์', 'อำนาจเจริญ', 'อุบลราชธานี');
                        foreach ($d as $key => $value) {
                            if ($data->Province == $value) {
                                echo '<option selected value=' . $value . '>' . $value . '</option>';
                            } else {
                                echo '<option value=' . $value . '>' . $value . '</option>';
                            }
                        }
                        ?>
                    </select>

                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">ระดับ</label>
                    <select class="form-control" name="status" id="exampleFormControlSelect1">
                        <?php
                        $d = array('ป้ายพระราชทาน', 'เกียรติบัตรขั้นที่ 1', 'เกียรติบัตรขั้นที่ 2');
                        foreach ($d as $key => $value) {
                            if ($data->Status == $value) {
                                echo '<option selected value=' . $value . '>' . $value . '</option>';
                            } else {
                                echo '<option value=' . $value . '>' . $value . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">วันที่ได้รับป้ายพระราชทาน</label>
                    <input id="datepicker" name="register_date" width="300" value="{{ $data->Register_date }}" />
                    <p class="text-danger">*โปรดระบุวันที่ได้รับป้ายพระราชทาน โดยเลือกวัน เดือน และปี ค.ศ.</p>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">วันที่ได้รับเกียรติบัตรขั้นที่ 1</label>
                    <input id="datepicker2" name="Certificate_date1" width="300" value="{{ $data->Certificate_date1 }}" />
                    <p class="text-danger">*โปรดระบุวันที่ได้รับเกียรติบัตรขั้นที่ 1 โดยเลือกวัน เดือน และปี ค.ศ.</p>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">วันที่ได้รับเกียรติบัตรขั้นที่ 2</label>
                    <input id="datepicker3" name="Certificate_date2" width="300" value="{{ $data->Certificate_date2 }}" />
                    <p class="text-danger">*โปรดระบุวันที่ได้รับเกียรติบัตรขั้นที่ 2 โดยเลือกวัน เดือน และปี ค.ศ.</p>
                    <br>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">อัพโหลดรูปภาพ</label>
                    <a class="text-danger">*โปรดเลือกรูปภาพอย่างน้อย 1 รูป ขนาดไม่เกิน 5 MB โดยมีสกุลไฟล์ jpeg,png,jpg,gif,svg เท่านั้น</a>
                    <br>
                    <br>

                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                    รูปที่1
                        <br>
                        <input id="img_file1" type="file" name="Picture_1" accept="image/*" placeholder="{{ $data->Picture_1 }}" />
                        <label >{{ $data->Picture_1 }}</label>
                        <br>
                    รูปที่2
                        <br>
                        <input id="img_file2" type="file" name="Picture_2" accept="image/*" placeholder="{{ $data->Picture_2 }}" />
                        <label >{{ $data->Picture_2 }}</label>
                        <br>
                    รูปที่3
                        <br>
                        <input id="img_file3" type="file" name="Picture_3" accept="image/*" placeholder="{{ $data->Picture_3 }}" />
                        <label >{{ $data->Picture_3 }}</label>
                        <br>
                    รูปที่4
                        <br>
                        <input id="img_file4" type="file" name="Picture_4" accept="image/*" placeholder="{{ $data->Picture_4 }}" />
                        <label >{{ $data->Picture_4 }}</label>
                        <br>
                    รูปที่5
                        <br>
                        <input id="img_file5" type="file" name="Picture_5" accept="image/*" placeholder="{{ $data->Picture_5 }}" />
                        <label >{{ $data->Picture_5 }}</label>
                        <br>
                    รูปที่6
                        <br>
                        <input id="img_file6" type="file" name="Picture_6" accept="image/*" placeholder="{{ $data->Picture_6 }}" />
                        <label >{{ $data->Picture_6 }}</label>
                        <br>
                    รูปที่7
                        <br>
                        <input id="img_file7" type="file" name="Picture_7" accept="image/*" placeholder="{{ $data->Picture_7 }}" />
                        <label >{{ $data->Picture_7 }}</label>
                        <br>
                    รูปที่8
                        <br>
                        <input id="img_file8" type="file" name="Picture_8" accept="image/*" placeholder="{{ $data->Picture_8 }}" />
                        <label >{{ $data->Picture_8 }}</label>
                        <br>
                    รูปที่9<br>
                        <input id="img_file9" type="file" name="Picture_9" accept="image/*" placeholder="{{ $data->Picture_9 }}" />
                        <label >{{ $data->Picture_9 }}</label>
                        <br>
                    รูปที่10
                        <br>
                        <input id="img_file10" type="file" name="Picture_10" accept="image/*" placeholder="{{ $data->Picture_10 }}" />
                        <label >{{ $data->Picture_10 }}</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">URL วีดีโอ</label><br>
                    <a href="https://www.youtube.com/watch?v=_moh_pi13ag">วิธีเพิ่ม URL video จากเว็บไซต์ Youtube</a>
                    <input type="text" id="youTubeUrl" name="vdo" class="form-control" id="vod" value="{{ $data->Vdo }}" >
                </div>

                <div class="form-group">
                    <a href="https://www.youtube.com/watch?time_continue=322&v=C1qT0TslTNo&feature=emb_title" target="_blank">หาค่า Latitude(ละติจูด),Latitude(ละติจูด) </a><br>
                    <label for="exampleFormControlSelect1">ละติจูด</label>
                    <input class="form-control" name="lat" id="lat" type="text" value="{{ $data->Latitude }}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">ลองจิจูด</label>
                    <input class="form-control" name="lng" id="lng" type="text" value="{{ $data->Longitude }}">
                </div>

                <hr>
                <button type="submit" onclick="check_url()" class="btn navbar-custom text-white"><i class="fas fa-share-square"></i> บันทึกข้อมูล </button>
                <button type="reset" class="btn btn-warning"><i class="fas fa-trash-restore-alt"></i> รีเซต </button>

                <a href="{{ asset('/map') }}"><button type="button" class="btn btn-danger float-right"><i class="fas fa-share-square"></i>  ยกเลิก</button></a>
            </form>
            <br>
            <div><br>
                 <form class="form-group" method="get" action="{{ route('data.delete') }}">
                 <input type="hidden" name="name" class="form-control" id="schoolname" value="{{$data->Name}}" required>
                    <h5 for="">ลบรูป</h5><a class="text-danger">*โปรดเลือกหมายเลขรูปภาพที่ต้องการลบ</a><br><br>
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <select name="status" >
                            <option value="Picture_1">รูปที่1</option>
                            <option value="Picture_2">รูปที่2</option>
                            <option value="Picture_3">รูปที่3</option>
                            <option value="Picture_4">รูปที่4</option>
                            <option value="Picture_5">รูปที่5</option>
                            <option value="Picture_6">รูปที่6</option>
                            <option value="Picture_7">รูปที่7</option>
                            <option value="Picture_8">รูปที่8</option>
                            <option value="Picture_9">รูปที่9</option>
                            <option value="Picture_10">รูปที่10</option>
                        </select>
                        &nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn navbar-custom text-white">ลบ</button>
                    </div>
                    <br>
                    @if (session('alert'))
                        <div class="alert alert-success">
                            {{ session('alert') }}
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br><br>
<script>
    function check_url() {
  var url = $('#youTubeUrl').val();
  if (url != undefined || url != '') {
      var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=|\?v=)([^#\&\?]*).*/;
      var match = url.match(regExp);
      if (match && match[2].length == 11) {
      }
      else {
        alert("url vdo ไม่ถูกต้อง ตัวอย่างเช่น https://www.youtube.com/embed/xxxxxxxxx");
        $('#youTubeUrl').val('');
      }
  }
}

    $(document).ready(function() {
        $('#img_file1').on('change', function(evt) { check_size(this.files[0].size,'#img_file1') ; });
        $('#img_file2').on('change', function(evt) { check_size(this.files[0].size,'#img_file2') ; });
        $('#img_file3').on('change', function(evt) { check_size(this.files[0].size,'#img_file3') ; });
        $('#img_file4').on('change', function(evt) { check_size(this.files[0].size,'#img_file4') ; });
        $('#img_file5').on('change', function(evt) { check_size(this.files[0].size,'#img_file5') ; });
        $('#img_file6').on('change', function(evt) { check_size(this.files[0].size,'#img_file6') ; });
        $('#img_file7').on('change', function(evt) { check_size(this.files[0].size,'#img_file7') ; });
        $('#img_file8').on('change', function(evt) { check_size(this.files[0].size,'#img_file8') ; });
        $('#img_file9').on('change', function(evt) { check_size(this.files[0].size,'#img_file9') ; });
        $('#img_file10').on('change', function(evt) { check_size(this.files[0].size,'#img_file10') ; });

    function check_size(size,id) {
            if (size > 5242880) {
                alert("รูปภาพต้องมีขนาดไม่เกิน 5 MB");
                $( id ).val("")
            }
        }
    });

    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });

    $('#datepicker2').datepicker({
        uiLibrary: 'bootstrap4'
    });

    $('#datepicker3').datepicker({
        uiLibrary: 'bootstrap4'
    });

    $('.close').click(function() {
        $('.alert').hide();
    })
</script>
