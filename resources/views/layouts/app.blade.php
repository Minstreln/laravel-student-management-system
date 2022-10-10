<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/class.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <div class="navbar-container">
        <div class="header">
            <h1>Student Manage<span>ment</span></h1>
        </div>
        <div class="navbar">
            <nav>
                <ul>
                    <li class="active"><a href="{{asset('/index')}}">Index</a></li>
                    <li><a href="{{asset('/create')}}">Create</a></li>
                </ul>
            </nav>
        </div>
    </div>
    @yield('content')
</body>
</html>