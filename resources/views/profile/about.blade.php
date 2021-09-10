<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Krisha's Profile</title>
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

    </style>
</head>
<body>
   <nav class="nav-bar">
        <div class="logo">
            KRISHA-LARAVEL-PAGE
        </div>
        <div class="menus">
            <ul>
                <li>
                    <a href="">Home</a>
                    <a href="">About</a>
                    <a href="">Skills</a>
                    <a href="">Contact</a>
                    <a href="">Others</a>
                </li>
            </ul>
        </div>
   </nav>
   <section>
        <h1>this is the about page</h1>
   </section>
</body>
</html> -->
@extends('layout.app')
@section('content')
<p>This is about page</p>
@endsection