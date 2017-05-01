@extends('layouts.dashboard')
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
@stop
@section('content')
    <div class="row" style="padding-top:2rem">
        <div class="col s12">
            <table id="user-table" class="bordered">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Open Orders</th>
                        <th>State</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->email }}</td>
                            <td>{{$user->first_name}} {{$user->last_name}}</td>
                            <td>{{ $user->orders()->whereNotIn('status_code',['DONE'])->count()}}</td>
                            <td>{{ $user->addresses()->first()->state }}
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
        $('#user-table').DataTable();
    })(jQuery));
    </script>
@stop
