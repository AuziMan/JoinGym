<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'JoinGym') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    

    <style>
        li 
        {
            list-style-type: none;
            text-align: center;
        }   
        .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

/* Three image containers (use 25% for four, and 50% for two, etc) */
.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}
        
/* .container, .showcase 
{
  background-color:#383B4D
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
} */

.bioSection{
    Height: 150px;
    padding: 15px;
}





/* #app{
    background-color:#383B4D!important;
} */

#bar-nav{
    font-size: 20px;!important

}

.GymProfileHeader{
		text-align: center;
		font-size: 80px;
	}

.testimonials{
    padding-top: 30px;

}

.bioSection{
    padding-right: 100px!important;
    padding: 20px;
}

.navbar-nav{
    font-size: 22px;
}


    </style>

   

    
</head>
{{-- Changes page background color --}}
<body style=background-color:#E1C5C4!important>  
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style=background-color:#F55C57!important>
            <div class="container" id="bar-nav">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'JoinGym') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            @if(Auth::user()->role == 'admin')
                            <li class="nav-item">
                            	<a class="nav-link" href="admin">{{ __('User Admin') }}</a>
                            </li>
                            <li class="nav-item">
                            	<a class="nav-link" href="jobAdmin">{{__('Listings Admin')}}</a>
                            </li>
                             <li class="nav-item">
                            	<a class="nav-link" href="admingym">{{__('gyms Admin')}}</a>
                            </li>
                             <li class="nav-item">
                            	<a class="nav-link" href="moreinfo">{{__('Additional Info')}}</a>
                            </li>
                            <li class="nav-item">
                            	<a class="nav-link" href="userGymProfile">{{__('User Gym Profile')}}</a>
                            </li>
                            
                            @endif
                            @if(Auth::user()->role == 'customer')
                            <li class="nav-item">
                            	<a class="nav-link" href="userProfile">{{__('')}}</a>
                            </li>
                            <li class="nav-item">
                            	<input type="hidden" value="{{Auth::user()->id}}" name="id" id="id">
                            	<a class="nav-link" href="blank">{{ __('Edit Profile | ') }}</a>
                            </li>
                            <li class="nav-item">
                            	<a class="nav-link" href="moreinfo">{{__('Additional Info | ')}}</a>
                            </li>
                            <li class="nav-item">
                            	<a class="nav-link" href="userGymProfile">{{__('User Gym Profile | ')}}</a>
                            </li>
                             <li class="nav-item">
                            	<a class="nav-link" href="home">{{__('Gyms | ')}}</a>
                            </li>
                            @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
@include('layouts.header')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('layouts.footer')

</body>
</html>
