@extends('layouts.default')
@section('content')
    <div class="row" style="margin-top:2rem">
        <div class="col s12 m8 offset-m2">
            <form class="card row" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="col s12" style="padding: 1rem 2rem">
                    <div>
                        <h3 style="margin-top:0; display:inline-block;">Login</h3>
                        <span class="grey-text" style="font-size:0.85rem;margin-left:0.5rem;">
                            No account?&nbsp;
                            <a href="{{ route('register')}}">Sign up now</a>
                        </span>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" name="email" class="validate" value="{{ old('email') }}" required autofocus>
                            <label for="email" data-error="{{ $errors->first('email') }}">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" name="password" class="validate" required>
                            <label for="password" data-error="{{ $errors->first('password') }}">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">Remember Me</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6">
                            <button class="btn waves-effect waves-light" type="submit" name="action" id="login">
                                Login
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                        <div class="col s6">
                            <a href="{{ route('password.request') }}">
                                Forgot Password
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

@section('scripts')
    <script src="{{asset('js/login.js')}}"
@stop
