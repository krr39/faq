<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner well-lg" >
                <div class="carousel-item active">
                    <img src="http://www.top13.net/wp-content/uploads/2012/01/Bernstorff-Isofjord-Greenland-1024x768.jpg" alt="Nature2">
                    <div class="carousel-caption">
                        <p>What is the name of the place?</p>
                        <h3> Bernstorff Isofjord, Greenland</h3>
                    </div>

                </div>
                <div class="carousel-item">
                    <img src="http://www.top13.net/wp-content/uploads/2012/01/Madeira-Island-Portugal-1024x768.jpg" alt="Nature1">
                    <div class="carousel-caption">
                        <p>What is the name of the place?</p>
                        <h3> Madeira Island, Portugal</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="http://www.top13.net/wp-content/uploads/2012/01/nepal.jpg" alt="Nature3" alt="Nature3">
                    <div class="carousel-caption">
                        <h3>Khangsar, Nepal</h3>
                        <p>Would you like to explore this place?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="http://www.top13.net/wp-content/uploads/2012/01/Ban-Gioc-Waterfall-1024x768.jpg" alt="Nature4">
                    <div class="carousel-caption">
                        <h3>Ban Gioc Waterfall, Cao Bang Province, Vietnam</h3>
                        <p>Would you like to visit this place?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="http://www.top13.net/wp-content/uploads/2012/01/The-Wave-at-the-Vermillion-Cliffs-National-Monument-ArizonaUtah-1024x768.jpg" alt="Nature5">
                    <div class="carousel-caption">
                        <p>Omg..!! what a beautiful cliffs it is?</p>
                        <h3>The Wave at the Vermillion Cliffs National Monument (Arizona, Utah)
                        </h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="http://www.top13.net/wp-content/uploads/2012/01/Columbia-River-Gorge-Oregon-1024x768.jpg" alt="Nature6">
                    <div class="carousel-caption">
                        <p>So, what could be name of wonderfull river?</p>
                        <h3>Columbia River Gorge, Oregon</h3>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>


    </div>
</div>
    </div>
</body>
</html>