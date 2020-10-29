@extends('layouts.app')

@section('title,edite_data')

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
    <form method="post" action="{{action('AbtController@update', $id)}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="exampleFormControlInput1">ชื่อ</label>
          <input type="text" class="form-control" id="์Name" value="{{$abt->Name}}" >
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">ที่อยู่</label>
            <input type="text" class="form-control" id="Address" placeholder="">
        </div>

        <label for="exampleFormControlInput1">จังหวัด</label>
        <input class="form-control" type="text" placeholder="{{ $data->Province }}" readonly>
        <label for="exampleFormControlInput1">จังหวัด</label>
        <select class="form-control" id="Province" name="Province">
            <option>อุบลราชธานี</option>
            <option>บุนีรัมย์</option>
            <option>ศรีสะเกษ</option>
            <option>สุรินทร์</option>
            <option>ยโสธร</option>
        </select>
        <br>
        <label for="exampleFormControlInput1">สถานะ</label>
        <select class="form-control" name="Status" id='Status'>
            <option>ป้ายพระราชทาน</option>
            <option>ก.1</option>
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
                <input type="number" class="form-control" id="Latitude" name="Longitude" placeholder="">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Longitude</label>
            <input type="number" class="form-control" id="Longitude" name="Longitude" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">เลือกไฟล์รูปภาพ</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
      </form>
</div>
@endsection
