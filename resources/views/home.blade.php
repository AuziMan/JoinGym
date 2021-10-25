@extends('layouts.app')

@section('content')
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">A little about me</div>
                        <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="colsm-6 colmd-5 col-lg-4 item">
                            <div class="box">
                                <img class= "Soccer picture" src="/images/soccerpicture.jpg" width="200" height="200"/>
                                <h3 class="intro"> Sports have always been a big part of my life.</h3>
                                <p class="description"> Growing up I played alot of baseball and swam for the state of Kansas</p>

                            </div>
                        </div>
                        <div class="colsm-6 colmd-5 col-lg-4 item">
                            <div class="box">
                                <h3 class="intro"> Sports have always been a big part of my life.</h3>
                                <p class="description"> Growing up I played alot of baseball and swam for the state of Kansas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
