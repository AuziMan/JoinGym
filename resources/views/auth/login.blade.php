@extends('layouts.app')

<style>

.cardTest{

    margin-top: 100px;
    height: 351px;
    width: 1000px;
    border-style: dashed;
    display: flex;


}

.card{
    margin: 10px;
    height: 370px;
    width: 500px;
}

.card-header{
    z-index: 3;
    height: 600px;
    border-color: aqua;
    font-size: 75px;
    text-align: center;
    background-color: #F55C57!important;
}

.loginHeader{
    text-align: center;
    width: 90%;
    font-size: 30px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    border-style: dashed;
}

.container{
    width: 1200px;
    border-style: dashed;
    border-color: #F55C57;

}

.loginImages{
    background-image: url('../images/groupGymimg1.png');
    width: 500px;
    height: 450px;
}



</style>


@section('content')
<div class="container">
            <div class="loginHeader">
                <p>Login below to begin creating your profile!</p>
            </div>
            <div class="cardTest">
                
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="card">
                    <div class="card-body">
                           <div class="loginImages">
                           </div>
                    </div>
                </div>
            </div>        
</div>
@endsection
