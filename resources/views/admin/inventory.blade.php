@extends('layouts.dashboard')
@section('styles')

@stop
@section('content')
<div class="row" style="margin-top:2rem">
    <div class="input-field col s12 m4">
        <select id="type">
          <option value="" disabled selected>Choose your option</option>
          <option value="TOW">Tower/Motherboard</option>
          <option value="CPU">CPUs</option>
          <option value="GPU">Graphics Cards</option>
          <option value="PSU">Power Supplies</option>
          <option value="HDD">Hard Drive Disks</option>
          <option value="SSD">Solid State Drives</option>
          <option value="RAM">RAM</option>
        </select>
        <label>Product Type</label>
    </div>
</div>
@if(isset($products))
    <div class="row">

        @foreach ($products as $product)
            <div class="col s12 m4">
                <form action="{{ route('updateInventory')}}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <div class="row">
                        <div class="col s12">
                            <img style="max-height:170px"
                                src="{{ $product->image_url }}" class="responsive-img"/>
                            <h5 title="{{$product->name}}"
                            style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap">
                                {{ $product->name }}
                            </h5>
                            <div class="input-field">
                                <input name="quantity" type="number" value="{{$product->stock->quantity}}">
                                <label>Quantity</label>
                            </div>
                            <div class="input-field">
                                <input name="price" type="number" value="{{$product->price}}">
                                <label>Price</label>
                            </div>
                            <div class="input-field">
                                <input name="salePrice" type="number" value="{{$product->salePrice}}">
                                <label>salePrice</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 center-align">
                            <button class="waves-effect wave-light btn">Update <i class="right material-icons">cloud_upload</i> </button>
                        </div>
                    </div>
                </form>
            </div>
        @endforeach
    </div>
@endif

@stop
@section('scripts')
    <script>
    jQuery((function($) {
        if('{{$type}}' !== 'null') {
            $('#type').val('{{$type}}');
        }

        $('#type').change(function(e) {
            window.location = '/admin/inventory/' + this.value;
        })
    })(jQuery));
    </script>
@stop
