</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UBU API : Login</title>
    
    <link rel="shortcut icon" href="{{ asset('img/logo.gif') }}" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="css/login.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
    i{
    color: white;
    }
    body {
        background-image: url('img/bg4.jpg');
        overflow-y: hidden;
        height: 100%;

     
       background-position: center;
       background-repeat: no-repeat;
       background-size: cover;   
    }
    /* style="background-color: #a400d6;" */
    </style>
</head>
<body >
<div class="container-fluid">
    <br><br>
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('/map') }}">&nbsp;&nbsp;<i class='fas fa-angle-double-left' style='font-size:36px'></i></a>
            </div>
        </div>
    </div>
<div class="wrapper fadeInDown" >
        <div id="formContent" >
            <!-- Tabs Titles -->
            <br>
            <!-- Icon -->
            <div class="fadeIn first">
                <img src="img/logo.gif" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror fadeIn second" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="username">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror fadeIn third" name="password" required autocomplete="current-password" placeholder="password">
                <br><br>
                <div>
                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                <input type="submit" class="fadeIn fourth" value="Log In">
                </div>
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
            {{-- <a class="underlineHover" href="{{route('register')}}"> สมาชิกใหม่</a> --}}
            </div>

        </div>
    </div>
</body>

