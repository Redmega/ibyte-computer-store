@extends('layouts.default')
@section('content')
    <h1 class="header center orange-text">You got this!</h1>
    <div class="row center">
        <h5 class="header col s12 light">Pick your components from below to continue.</h5>
    </div>
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s6 input-field offset-s3">
                <select >
                    <option value="" disabled selected>Choose your option</option>
                    <option value="$Product"></option>
                </select>
                <label>Tower & Motherboard</label>
            </div>
        </div>
        <div class="row">
            <div class="col s6 input-field offset-s3">
                <select >
                    <option value="" disabled selected>Choose your option</option>
                    <option value="CPU2">CPU 1</option>
                    <option value="CPU2">CPU 2</option>
                </select>
                <label>CPU</label>
            </div>
        </div>
        <div class="row">
            <div class="col s6 input-field offset-s3">
                <select >
                    <option value="" disabled selected>Choose your option</option>
                    <option value="GPU1">GPU 1</option>
                    <option value="GPU2">GPU 2</option>
                </select>
                <label>GPU</label>
            </div>
        </div>
        <div class="row">
            <div class="col s6 input-field offset-s3">
                <select >
                    <option value="" disabled selected>Choose your option</option>
                    <option value="PSU1">PSU 1</option>
                    <option value="PSU2">PSU 2</option>
                </select>
                <label>PSU</label>
            </div>
        </div>
        <div class="row">
            <div class="col s6 input-field offset-s3">
                <select >
                    <option value="" disabled selected>Choose your option</option>
                    <option value="HD1">Hard Drives/SSDs 1</option>
                    <option value="HD2">Hard Drives/SSDs 2</option>
                </select>
                <label>Hard Drives/SSDs</label>
            </div>
        </div>
        <div class="row">
            <div class="col s6 input-field offset-s3">
                <select>
                    <option value="" disabled selected>Choose your option</option>
                    <option value="RAM1">RAM 1</option>
                    <option value="RAM2">RAM 2</option>
                </select>
                <label>RAM</label>
            </div>
        </div>
        <div class = "row">
            <div class = "col s12 center-align ">
                <a class="waves-effect wave-light btn"><i class = "material-icons left">send</i><span>SUBMIT</span></a>
            </div>
        </div>
    </div>
</div>
@stop
