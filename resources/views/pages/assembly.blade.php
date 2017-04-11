@extends('layouts.default')
@section('content')
    @php
        $build = App\Models\Build::where('id', $build_id)->first();
    @endphp
    <h1 class="header center orange-text">You got this!</h1>
    <div class="row center">
        <h5 class="header col s12 light">Pick your components from below to continue.</h5>
    </div>
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s6 input-field offset-s3">
<<<<<<< HEAD
              <div class="form-group">
                <label for="">Towers and Motherboards></label>
                  <select class="form-control input-sm name="">
                  <option value"{{$Product->id}}"></option>"
=======
                <select id="tower-select">
                    <option value="" disabled selected>Choose your option</option>
                    @foreach ($products->where('type', 'TOW') as $product)
                    <option {{ !empty($build_id) ? ($build->tow_id == $product->id ? 'selected': '') : ''}}
                        value="{{$product->id}}">{{$product->name}}</option>
                    @endforeach
>>>>>>> d3da2966f258036ce76f8b5b8c0d25fca175f876
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col s6 input-field offset-s3">
<<<<<<< HEAD
                <select >
                  {{ Form::select('company_id', $company_lists) }}
=======
                <select id="cpu-select">
>>>>>>> d3da2966f258036ce76f8b5b8c0d25fca175f876
                    <option value="" disabled selected>Choose your option</option>
                    @foreach ($products->where('type', 'CPU') as $product)
                        <option {{ !empty($build_id) ? ($build->cpu_id == $product->id ? 'selected': '') : ''}}
                        value="{{$product->id}}">{{$product->name}}</option>
                    @endforeach
                </select>
                <label>CPU</label>
            </div>
        </div>
        <div class="row">
            <div class="col s6 input-field offset-s3">
                <select id="gpu-select">
                    <option value="" disabled selected>Choose your option</option>
                    @foreach ($products->where('type', 'GPU') as $product)
                        <option {{ !empty($build_id) ? ($build->gpu_id == $product->id ? 'selected': '') : ''}}
                        value="{{$product->id}}">{{$product->name}}</option>
                    @endforeach
                </select>
                <label>GPU</label>
            </div>
        </div>
        <div class="row">
            <div class="col s6 input-field offset-s3">
                <select id="psu-select">
                    <option value="" disabled selected>Choose your option</option>
                    @foreach ($products->where('type', 'PSU') as $product)
                        <option {{ !empty($build_id) ? ($build->psu_id == $product->id ? 'selected': '') : ''}}
                        value="{{$product->id}}">{{$product->name}}</option>
                    @endforeach
                </select>
                <label>PSU</label>
            </div>
        </div>
        <div class="row">
            <div class="col s6 input-field offset-s3">
                <select id="hdd-select">
                    <option value="" disabled selected>Choose your option</option>
                    @foreach ($products->whereIn('type', ['SSD']) as $product)
                        <option {{ !empty($build_id) ? ($build->ssd_id == $product->id ? 'selected': '') : ''}}
                        value="{{$product->id}}">{{$product->name}}</option>
                    @endforeach
                </select>
                <label>Hard Drives/SSDs</label>
            </div>
        </div>
        <div class="row">
            <div class="col s6 input-field offset-s3">
                <select id="ram-select">
                    <option value="" disabled selected>Choose your option</option>
                    @foreach ($products->where('type', 'RAM') as $product)
                        <option {{ !empty($build_id) ? ($build->ram_id == $product->id ? 'selected': '') : ''}}
                        value="{{$product->id}}">{{$product->name}}</option>
                    @endforeach
                </select>
                <label>RAM</label>
            </div>
        </div>
        <div class = "row">
            <div class = "col s12 center-align">
                <button class="waves-effect wave-light btn"><i class = "material-icons right">send</i><span>SUBMIT</span></button>
            </div>
        </div>
    </div>
</div>
@stop

@section('scripts')
<script>
    jQuery((function($){
        if({{$readonly}}) {
            $('select, button').prop('disabled', true);
        }
    })(jQuery));
</script>
@stop
