@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Linux the best!
                        <a href="/list"><h1><b>To Characters</b></h1></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
