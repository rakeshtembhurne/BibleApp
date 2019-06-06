<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<!-- for dynodropdwon -->
<link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('/css/jquery.dyndropdown.css') }}">
<script src="{{ URL::asset('/js/jquery.dyndropdown.js') }}"></script>

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
    .fb_iframe_widget{overflow: hidden;}

    .fb-comments, .fb_iframe_widget_fluid_desktop iframe {
        width: 100%;
        min-width: 100% !important;
    }
    .dropdown-submenu .dyndropdown-selectable {
        width: 50px;
        float: left;
    }
</style>

@extends('layouts.app')

@section('template_title')
    {{ trans('titles.activation') }}
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-sm-offset-3">
                <div id="bookDropDown"></div> 
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                @if(($dataFromTable))
                    @foreach($dataFromTable as $key => $value)
                        <p class="text-sm-left">
                        <?= str_replace('<red>', '<span class="text-danger">', str_replace('</red>', '</span>', $value->t)) ?>
                        </p>
                    @endforeach
                @else
                    <p>No Data Found</p>
                @endif
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="fb-comments" data-href="/{{$versionId}}/{{$bookId}}/{{$chapterId}}" data-width="100%" data-numposts="5"></div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
@endsection

<script type="text/javascript">
    var $ = jQuery;
    var bookWithChapters = @json($bookWithChapters);
    (function($) {
        $( document ).ready(function() {
            var books = {};
            for(t in bookWithChapters) {
                books[t] = {
                    name: t,
                    values: {}
                };
                for(n in bookWithChapters[t]) {
                    books[t].values[n] = bookWithChapters[t][n];
                }                
            }
            var simple = $('#bookDropDown').dyndropdown();
            simple.setStructure(JSON.stringify(books));
        });
    })(jQuery);

    (function($) {
        $( document ).ready(function() {
            var bookNames = @json($books);
            for(t in bookWithChapters) {
                var bookName = t;
                for(c in bookWithChapters[t]) {
                    for(b in bookNames) {
                        if(bookNames[b] == t) {
                            var chap = bookWithChapters[t][c]-1;
                            $("#dyndropdownop_"+t+"___"+chap+" > a").attr('href','/{{$versionId}}/'+b+'/'+bookWithChapters[t][c]);
                            $(".dropdown-toggle").text('{{$bookName}}');
                        }
                    }
                }
            }
            // $("#dyndropdown_menu").prepend( "<b>Books</b>" );
            // $(".dropdown-menu .dropdown-menu-f").prepend( "<b>Chapters</b>" );
        });
    })(jQuery);
</script>