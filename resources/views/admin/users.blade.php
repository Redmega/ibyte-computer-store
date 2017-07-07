@extends('layouts.dashboard')
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
@stop
@section('content')
    <div class="row" style="padding-top:2rem">
      <div class="col s12 m6 l4">
        <form method="POST" role="form" action="{{ route('banUser')}}">
          {{ csrf_field() }}
          <div class="input-field">
              <input id="banUser" name="email" type="email" placeholder="Email Address" value="">
              <label>Ban User</label>
          </div>
        </form>
      </div>
    </div>
    <div class="row">
        <div class="col s12">
            <table id="user-table" class="bordered">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Banned?</th>
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
    var users = {!! json_encode($users) !!};
    console.log(users);
    jQuery((function($){
      $('#user-table').DataTable({
        data: users,
        columns: [
          { data: 'email' },
          { data: function(row) {
              return row.first_name + ' ' + row.last_name;
            }
          },
          { data: function(row) {
              return row.banned ? 'Yes' : 'No';
            }
          },
        ]
      });

      $('#banUser').on('input', function(e) {
        this.value = this.value.replace(/[^a-z0-9\.@]/ig, '');
      });

    })(jQuery));
    </script>
@stop
