@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col s12 m6 l3">
            <div class="card green card small">
                <div class="card-content white-text">
                    <span class="card-title">
                        <a class="white-text" href="{{ route('admin/orders')}}">Orders</a>
                    </span>
                    <h4 class="card-stats-number">{{ $numOrders }}</h4>
                    <p class="card-stats-compare">
                        <span class="green-text text-lighten-5">Orders have been placed</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card pink lighten-1 card small">
                <div class="card-content white-text">
                    <span class="card-title">
                        <a class="white-text" href="{{ route('admin/inventory') }}">Inventory</a>
                    </span>
                    <h4 class="card-stats-number">High</h4>
                    <p class="card-stats-compare">
                        <span class="deep-purple-text text-lighten-5">Overall Available Inventory</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card indigo card small">
                <div class="card-content white-text">
                    <span class="card-title">
                        <a class="white-text" href="{{route('admin/users')}}">Users</a>
                    </span>
                    <h4 class="card-stats-number">{{ $numUsers }}</h4>
                    <p class="card-stats-compare">
                        <span class="deep-purple-text text-lighten-5">Current Users</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card blue-grey card small">
                <div class="card-content white-text">
                    <span class="card-title">
                        <a class="white-text" href="{{route('admin/finance')}}">Finance</a>
                    </span>
                    <h4 class="card-stats-number">${{ $numRevenue }}</h4>
                    <p class="card-stats-compare">
                        <span class="deep-purple-text text-lighten-5">Current Net Profit from Purchases</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
@stop
