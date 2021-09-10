<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>
    
</body>
</html> -->
<nav class="nav-bar">
        <div class="logo">
        KRISHA-LARAVEL-PAGE
        </div>
        <div class="menus">
            <ul>
                <li>
                    <a href="{{ url('/profile') }}">Home</a>
                    <a href="{{ url('/profile/about') }}">About</a>
                    <a href="{{ url('/profile/about/skills') }}">Skills</a>
                    <a href="{{ url('/profile/about/skills/laravel') }}">Contact</a>
                    <a href="{{ url('/profile/about/skills/angular') }}">Others</a>
                </li>
            </ul>
        </div>
   </nav>