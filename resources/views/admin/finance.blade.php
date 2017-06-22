@extends('layouts.dashboard')
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
@stop
@section('content')
    <div class="row" style="padding-top:2rem">
        <div class="col s12">
            <h4>Possible Revenue: <small>${{ $possibleRevenue }}</small></h4>
            <h4>Actual Revenue: <small>${{ $revenue }}</small></h4>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <table id="finance-table" class="bordered">
                <thead>
                    <tr>
                        <th>Order Number</th>
                        <th>Subtotal</th>
                        <th>Paid?</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>${{ $order->subtotal() }}</td>
                            <td>{{ $order->payment_status ? 'Paid' : 'Unpaid' }}
                        </tr>
                    @empty
                        <tr><td colspan="4">No Users</td></tr>
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
        $('#finance-table').DataTable();
    })(jQuery));
    </script>
@stop
