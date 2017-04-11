@extends('layouts.dashboard')
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
@stop
@section('content')
    <div class="row" style="padding-top:2rem">
        <div class="col s12">
            <table id="order-table" class="bordered">
                <thead>
                    <tr>
                        <th>Order #</th>
                        <th>User</th>
                        <th>Status</th>
                        <th>Paid?</th>
                        <th>Build</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->user->email }}</td>
                            <td>
                                <span style="font-weight:600">
                                    {{ $order->status->name }}:
                                </span>
                                {{ $order->status->description }}
                            </td>
                            <td>{{ $order->payment_status ? "Paid" : "Unpaid"}}</td>
                            <td>
                                <a href="{{ route('assembly',
                                    ['readonly' => 'true',
                                     'build_id' => $order->build->id])}}">
                                See build
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="4">No Orders</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop
@section('scripts')
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script>
    jQuery((function($){
        $('#order-table').DataTable();
    })(jQuery));
    </script>
@stop
