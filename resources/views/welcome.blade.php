@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-success">
                    <div class="card">
                        <div class="card-header">List of characters</div>
                        <div class="card-body">
                            <form action="/api/add" method="POST">
                            <p><b>Character</b><br>
                                    <input type="text" name="character" size="22">
                           </p>
                            <p><b>Real name</b><br>
                               <input type="text" name="real_name" size="25">
                            </p>

                                <p style="text-align: left" size="30">
                                    <button type="submit">
                                        <h1><b>Put new character</b></h1>
                                     </button>
                                </p>
                            </form>
                        </div>
                    </div>
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
                                    <td>{{ $value->character }}</td><td>{{ $value->real_name }}</td><td>{{ $value->choose }}</td>
                                </tr>
                            @endforeach
                        </table>
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


























