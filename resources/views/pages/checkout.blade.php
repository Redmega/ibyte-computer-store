@extends('layouts.default')
@section('content')
    <h1 class="header center orange-text">Checkout</h1>
    <div class="container">
        <div class="section">
            <table class="striped">
                <thead>
                    <tr>
                        <th>
                        <th>Item Type</th>
                        <th>Item Name</th>
                        <th>Item Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img style="max-width: 100px" src="{{$products->where('type', 'TOW')->first()->image_url}}" class="responsive-img" /></td>
                        <td>Tower & Motherboard</td>
                        <td>{{$products->where('type', 'TOW')->first()->name}}</td>
                        <td>${{$products->where('type', 'TOW')->first()->salePrice}}</td>
                    </tr>
                    <tr>
                      <td><img style="max-width: 100px" src="{{$products->where('type', 'CPU')->first()->image_url}}" class="responsive-img" /></td>
                        <td>CPU</td>
                        <td>{{$products->where('type', 'CPU')->first()->name}}</td>
                        <td>${{$products->where('type', 'CPU')->first()->salePrice}}</td>
                    </tr>
                    <tr>
                      <td><img style="max-width: 100px" src="{{$products->where('type', 'GPU')->first()->image_url}}" class="responsive-img" /></td>

                        <td>GPU</td>
                        <td>{{$products->where('type', 'GPU')->first()->name}}</td>
                        <td>${{$products->where('type', 'GPU')->first()->salePrice}}</td>
                    </tr>
                    <tr>
                      <td><img style="max-width: 100px" src="{{$products->where('type', 'PSU')->first()->image_url}}" class="responsive-img" /></td>

                        <td>PSU</td>
                        <td>{{$products->where('type', 'PSU')->first()->name}}</td>
                        <td>${{$products->where('type', 'PSU')->first()->salePrice}}</td>
                    </tr>
                    <tr>
                      <td><img style="max-width: 100px" src="{{$products->where('type', 'SSD')->first()->image_url}}" class="responsive-img" /></td>

                        <td>Hard Drives/SSDs</td>
                        <td>{{$products->where('type', 'SSD')->first()->name}}</td>
                        <td>${{$products->where('type', 'SSD')->first()->salePrice}}</td>
                    </tr>
                    <tr>
                      <td><img style="max-width: 100px" src="{{$products->where('type', 'RAM')->first()->image_url}}" class="responsive-img" /></td>

                        <td>RAM</td>
                        <td>{{$products->where('type', 'RAM')->first()->name}}</td>
                        <td>${{$products->where('type', 'RAM')->first()->salePrice}}</td>
                    </tr>
                    <thead>
                      <th></th>
                      <th></th>
                        <th></th>
                        <th></th>
                    </thead>
                    <thead>
                        <tr>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th>Total Price</th>
                        </tr>
                    </thead>
                </tbody>
                <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                        <td></td>
                        <td>$838.71</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class = "row">
        <div class = "col s12 center-align ">
            <a id="pay" class="waves-effect wave-light btn" href="#">
              <i class = "material-icons left">payment</i><span>Submit Payment</span></a>
        </div>
    </div>


  <div class="preloader-wrapper big active">
    <div class="spinner-layer spinner-blue">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>

    <div class="spinner-layer spinner-red">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>

    <div class="spinner-layer spinner-yellow">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>

    <div class="spinner-layer spinner-green">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>

@stop
@section('scripts')
<style>
.preloader-wrapper {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate3d(-50%, 50%);
}
</style>
<script>
  jQuery((function($){
    $('.preloader-wrapper').hide();
    $('#pay').click(function(e) {
      $('.preloader-wrapper').show();
      setTimeout(function() {
        $('.preloader-wrapper').hide();
        alert('Payment processed! You can close this window.');
      }, 5000);
    });

  })(jQuery));
</script>
@stop
