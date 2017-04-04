@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col s12 m6 offset-m3">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <h1 class="card-title" id="title">Sign Up</h1>
                    <div class="row">
                        <form class="col s12">
                            <div class="row" id="name">
                                <div class="input-field col s6">
                                    <input id="first_name" type="text" class="validate">
                                    <label for="first_name">First Name</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="last_name" type="text" class="validate">
                                    <label for="last_name">Last Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="email" class="validate">
                                    <label for="email" data-error="wrong" data-success="right">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" type="password" class="validate">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-action">
                    <button class="btn waves-effect waves-light" type="submit" name="action" id="login">Login
                        <i class="material-icons right">send</i>
                        <a href="#"></a>
                    </button>

                    <button class="btn waves-effect waves-light" type="submit" name="action" id="signup">Sign Up
                        <i class="material-icons right">send</i>
                        <a href="#"></a>
                    </button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script src="{{asset('js/login.js')}}"
@stop
