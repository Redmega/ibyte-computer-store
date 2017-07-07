@extends('layouts.dashboard')
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
@stop
@section('content')
    <div class="row"  style="padding-top:2rem">
      <div class="col s12 m6">
        <form method="POST" action="{{ route('modifyOrder') }}">
          {{ csrf_field() }}
          <div class="input-field inline">
            <select name="id" id="order_id">
              <option disabled selected value="NULL">Select one</option>
              @forelse($orders as $order)
                <option value="{{ $order->id }}">{{ $order->id }}</option>
              @empty
              @endforelse
            </select>
            <label>Order #</label>
          </div>
          <div class="input-field inline">
            <select name="status_code" id="status_code">
              <option disabled selected value="NULL">Select one</option>
              @forelse($statuses as $status)
                <option value="{{ $status->code }}">{{ $status->name }}</option>
              @empty
              @endforelse
            </select>
            <label>Status</label>
          </div>
          <div class="input-field inline">
            <select name="payment_status" id="paid_status">
              <option disabled selected value="NULL">Select one</option>
              <option value="1">Paid</option>
              <option value="0">Unpaid</option>
            </select>
            <label>Paid?</label>
          </div>
          <div class="input-field inline">
            <input type="submit" class="btn waves waves-light" value="Update">
          </div>
        </form>
      </div>
    </div>
    <div class="row">
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
                </tbody>
            </table>
        </div>
    </div>
@stop
@section('scripts')
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script>
      jQuery((function($){

        var orders = {!! json_encode($orders) !!};

        $('#order-table').DataTable({
          data: orders,
          columns: [
            { data: 'id' },
            { data: 'user.email' },
            { data: 'status_code' },
            { data: function(row) {
                return row.payment_status ? 'Paid' : 'Unpaid';
              }
            },
            { data: function(row) {
                return `<a href="/assembly?readonly=true&build_id=${row.build.id}">See build</a>`;
              }
            }
          ]
        });

        var formElements = ['#order_id', '#status_code', '#paid_status'];

        $('form').on('submit', function(e) {
          var emptyElements = formElements.some(function(id) {
            return !$(id).val();
          });
          if(emptyElements) {
            e.preventDefault();
            alert('You must complete all sections!');
          }
        })
      })(jQuery));
    </script>
@stop
