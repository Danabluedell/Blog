<html>
<title>Mr Robot</title>
<head>
<script type="text/javascript" src="js/jquery.js"></script>
{{--<script type="text/javascript" src="public/form1.php"></script>--}}
<script src="js/ajax.js"></script>
    {{--<link href='style.css' rel='stylesheet' type='text/css'>--}}
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-success">
                    {{--<div class="card">--}}
                        {{--<div class="card-header">List of characters</div>--}}
                        {{--<div class="card-body">--}}
                            {{--<form action="/api/add" method="POST">--}}
                            {{--<p><b>Character</b><br>--}}
                                    {{--<input type="text" name="character" size="22">--}}
                           {{--</p>--}}
                            {{--<p><b>Real name</b><br>--}}
                               {{--<input type="text" name="real_name" size="25">--}}
                            {{--</p>--}}

                                {{--<p style="text-align: left" size="30">--}}
                                    {{--<button type="submit">--}}
                                        {{--<h1><b>Put new character</b></h1>--}}
                                     {{--</button>--}}
                                {{--</p>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="card">
                        <div class="card-header">Add your character with a jquery</div>
                        <div class="card-body">
                            <form method="POST" id="ajax_form" action="">
                                <p><b>Character</b><br>
                                    <input type="text" name="character" size="22">
                                </p>
                                <p><b>Real name</b><br>
                                    <input type="text" name="real_name" size="25">
                                </p>

                                <p style="text-align: left" size="30">
                                    <input id="btn" type="button" value="Add">
                                </p>
                            </form>
                        </div>
                    </div>

                   <div id="result_form"></div>

                        <div class="card">
                    <div class="card-header">List of Game of Thrones Characters</div>
                    <div class="card-body">
                @if(Auth::check())
                        <table border="6" bordercolor="4169e1"  class="table">
                            <tr>
                                <td>Character</td>
                                <td>Real Name</td>
                                <td>Choose</td>
                            </tr>
                            @foreach($characters as $key => $value)
                                <tr>
                                    <td>{{ $value->character }}</td><td>{{ $value->real_name }}</td><td><input type="checkbox" value="{{ $value->id }}"></td>
                                </tr>
                            @endforeach
                        </table>
                    <input type="button" value="Delete" id="deleteBtn" style="float: right;width: 33%;">
                    @endif
                </div>
                @if(Auth::guest())
                    <a href="/login" class="btn btn-info"> You need to login to see the list 😜😜 >>></a>
                @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>
</html>
























