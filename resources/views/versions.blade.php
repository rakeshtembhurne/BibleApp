<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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

@extends('layouts.app')

@section('template_title')
    {{ trans('titles.activation') }}
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>The Bible in English</h1>
                <div class="list-group" id="list-tab" role="tablist">
                    @foreach($versions as $key => $value)
                        <a class="list-group-item list-group-item-action" id="list-home-list" href=/{{$bookId}}/{{$key}} role="tab" aria-controls="home">{{$value}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection