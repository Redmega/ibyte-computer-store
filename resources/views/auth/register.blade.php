@extends('layouts.default')

@section('content')
    <div class="row" style="margin-top:2rem">
        <div class="col s12 m8 offset-m2">
            <form class="card row" role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="col s12" style="padding: 1rem 2rem">
                    <div>
                        <h3 style="margin-top:0; display:inline-block;">Register</h3>
                    </div>
                    <div class="row" id="name">
                        <div class="input-field col s6">
                            <input id="first_name" name="first_name" type="text" class="validate" autofocus>
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" name="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" name="email" class="validate" value="{{ old('email') }}" required>
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
                        <div class="input-field col s12">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            <label for="password-confirm">Confirm Password</label>
                    </div>
                    <div class="row">
                        <div class="col s6">
                            <button class="btn waves-effect waves-light" type="submit" name="action" id="login">
                                Sign Up
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
