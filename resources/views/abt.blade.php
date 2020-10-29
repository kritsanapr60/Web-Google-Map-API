<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <!-- ใช้ไม่ได้ -->
        <link rel="shortcut icon" href="img/logo.gif" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>API UBU</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
            integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <!-- css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    
        <!-- Styles -->
        <style>
            .navbar-custom {
            background-color: #a400d6;
            }

            body {
            padding-bottom: 20px;
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

            #map {
        height: 963px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
        </style>
    </head>
    <body>
       @foreach($abts as $abt)
          <div>{{ $abt->Name }} {{ $abt->Longitude }}</div>
       @endforeach
    </body>
</html>
