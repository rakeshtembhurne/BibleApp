<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #000000;
                /* font-family: 'Raleway', sans-serif; */
                /* font-weight: 100; */
                /* height: 100vh; */
                line-height: 24pt;
                font-size: 16px;
                margin: 0;
            }
            p { 
                text-indent: 2em; 
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

            .title small {
                font-size: 60px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
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
        <div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Book
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            @foreach($books as $key => $value)
                                <li><a href="/{{$key}}/{{$versionId}}">{{$value}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Version
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            @foreach($versions as $key => $value)
                                <li><a href=/{{$bookId}}/{{$key}}>{{$value}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    @if(!is_null($dataFromTable))
                        @foreach($dataFromTable as $key => $value)
                            <p class="text-sm-left">{{$value->t}}</p>
                        @endforeach
                    @else
                        <p>No Data Found</p>
                    @endif
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </body>
</html>
