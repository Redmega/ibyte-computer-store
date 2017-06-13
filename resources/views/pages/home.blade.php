@extends('layouts.default')
@section('content')
    <h1 class="header center orange-text">iByte Computers</h1>
    <div class="row center">
        <h5 class="header col s12 light">We make it easy to create a computer of your dreams!</h5>
    </div>
    <div class="section">
        <div class="row">
            <div class="col s6">
                <div class="icon-block">
                    <h2 class="center light-blue-text">
                        <a href="/assembly"><i class="large material-icons">flash_on</i></a>
                    </h2>
                    <h5 class="center">Build your own PC!</h5>
                    <p class="light">Click here if you would like to build a computer of your own.</p>
                </div>
            </div>

            <div class="col s6">
                <div class="icon-block">
                    <h2 class="center light-blue-text">
                        <a href ="/quiz"><i class="large material-icons">group</i></a>
                    </h2>
                    <h5 class="center">Help me Build a PC.</h5>
                    <p class="light">Click here to take a quiz to determine the computer that fits your needs.</p>
                </div>
            </div>
        </div>
    </div>
@stop
