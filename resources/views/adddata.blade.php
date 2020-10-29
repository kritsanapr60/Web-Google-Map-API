@extends('layouts.app')

@section('title,add_data')

@section('content')

<div class="container">
        <h1>เพิ่มข้อมูลในระบบ</h1>
        <hr>
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif

    <form method="post" action="{{ route('data.update') }}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="exampleFormControlInput1">ชื่อ</label>
          <input type="text" class="form-control" id="Name" placeholder="">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">ที่อยู่</label>
            <input type="text" class="form-control" id="Address" placeholder="">
        </div>
        <label for="exampleFormControlInput1">จังหวัด</label>
        <select class="form-control" id="Province" name="Province">
            <option value="อุบลราชธานี" name="อุบลราชธานี">อุบลราชธานี</option>
            <option value="บุนีรัมย์" name="บุนีรัมย์">บุนีรัมย์</option>
            <option value="ศรีสะเกษ" name="ศรีสะเกษ">ศรีสะเกษ</option>
            <option value="สุรินทร์" name="สุรินทร์">สุรินทร์</option>
            <option value="ยโสธร" name="ยโสธร">ยโสธร</option>
        </select>
        <br>
        <label for="exampleFormControlInput1">สถานะ</label>
        <select class="form-control" name="Status" id='Status'>
            <option value="ป้ายพระราชทาน" name="ป้ายพระราชทาน">ป้ายพระราชทาน</option>
            <option value="ก.1" name="ก.1">ก.1</option>
        </select>
        <br>
        <fieldset class="form-group">
                <legend>ประเภท</legend>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="School" id="optionsRadios1" value="option1" checked>
                    โรงเรียน
                  </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="Distric" id="optionsRadios2" value="option2">
                   ตำบล
                  </label>
                </div>
        </fieldset>
        <div class="form-group">
                <label for="exampleFormControlInput1">Latitude</label>
                <input type="text" class="form-control" id="Latitude" name="Longitude" placeholder="">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Longitude</label>
            <input type="text" class="form-control" id="Longitude" name="Longitude" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">เลือกไฟล์รูปภาพ</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button type="submit" class="btn btn-warning">บันทึกข้อมูล</button>
      </form>
</div>
@endsection
