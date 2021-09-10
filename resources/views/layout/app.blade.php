<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;        
        }
        .nav-bar{
            padding: 30px;
            width: 100%;
            background-color: #757575;
            display: flex;
            justify-content: space-between;
            align-items: center; 
        }
        .logo{
            font-size: 23px;
            color: #fff;

            font-weight: bold;
        }
        .menus ul{
            list-style: none;
        }

        .menus ul li{
            padding: 10px;
        }
        .menus ul li a{
            text-decoration: none;
            color: #fff;
        }
        .one{
            background-color: #7f7f75;
        }    </style>

</head>
<body>
    @include('layout.includes.navbar')
    @yield('content')
    
    <!-- @include('layout.includes.footer') -->
</body>
</html>