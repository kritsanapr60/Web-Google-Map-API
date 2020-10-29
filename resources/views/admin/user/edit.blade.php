@extends('layouts.app')
@section('title',$user->name)
@section('content')
    <div class="container">
        <br>
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">แก้ไขข้อมูล {{ $user->name }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/user') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($user, [
                            'method' => 'PATCH',
                            'url' => ['/admin/user', $user->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.user.formedit', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
                                         
            <div class="col-md-3"></div>
            <div class="col-md-9"><br><br>
                    

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
@if ($user->hasRole('super-admin'))
                            <br>

                            @else
                                 @include ('admin.user.formschool', ['formMode' => 'edit'])
                                 @endif
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
