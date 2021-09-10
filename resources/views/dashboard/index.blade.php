<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ram's Profile</title>
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
            TRAVEL-RECOMMENDER
        </div>
        <div class="menus">
            <ul>
                <li>
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                    <a href="{{ url('/dashboard/users') }}">Users</a>
                    <a href="">Add Users</a>
                    <a href="">Edit User Type</a>
                    <a href="">Edir User Details</a>
                    <a href="">Others</a>
                </li>
            </ul>
        </div>
   </nav>
   <h1>This is the dashboard page</h1>
</body>
</html>