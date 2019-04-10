@extends('layouts.dashboard')



@section('content')

  <style media="screen">


.card-product {
    overflow: hidden;
}

.card {
    position: relative;
}
[class*=shadow] {
    transition: all .2s ease-in-out;
}
.shadow {
    box-shadow: 0 0 1.25rem rgba(108,118,134,.1)!important;
}
\
.card-product .card-image {
    padding: 1.5rem;
}

.card-product-actions {
    position: absolute;
    top: 10px;
    left: 10px;
    width: 80px;
    height: 40px;
    opacity: 0;
    background: 0 0;
}

.card-product-actions .btn-product-action {
    line-height: 40px;
    display: inline-block;
    float: left;
    width: 40px;
    height: 40px;
    cursor: pointer;
    color: #343a40;
    border: 0;
    outline: 0;
    background: 0 0;
}

.card-product .card-title {
    font-size: 1rem;
    font-weight: 600;
    color: #343a40;
}

.card-title {
    margin-bottom: 1.25rem;
}

.card-product .card-price {
    font-size: 1rem;
    font-weight: 600;
    display: block;
    color: #adb5bd;
}


  .view-group {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: row;
  flex-direction: row;
  padding-left: 0;
  margin-bottom: 0;
}
.thumbnail
{
  margin-bottom: 30px;
  padding: 0px;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
}

.item.list-group-item
{
  float: none;
  width: 100%;
  background-color: #fff;
  margin-bottom: 30px;
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%;
  padding: 0 1rem;
  border: 0;
}
.item.list-group-item .img-event {
  float: left;
  width: 30%;
}

.item.list-group-item .list-group-image
{
  margin-right: 10px;
}
.item.list-group-item .thumbnail
{
  margin-bottom: 0px;
  display: inline-block;
}
.item.list-group-item .caption
{
  float: left;
  width: 70%;
  margin: 0;
}

.item.list-group-item:before, .item.list-group-item:after
{
  display: table;
  content: " ";
}

.item.list-group-item:after
{
  clear: both;
}

.card-product .card-image img {
    transition: all .2s ease-in-out;
    transition-delay: .2s;
    transform: scale(1);
}
.img-center {
    display: block;
    margin-right: auto;
    margin-left: auto;
}
  </style>


<div class="main-content">


@include('partials.nav')


<div class="container">
  @if($products->count() > 0)
    <div class="row">
        <div class="col-lg-12 my-3">
            <div class="pull-right">
                <div class="btn-group">
                    <button class="btn btn-info" id="list">
                     <span class="fe fe-list"></span>
                    </button>
                    <button class="btn btn-danger" id="grid">
                     <span class="fe fe-grid"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="products" class="row view-group">
  {{-- @foreach($products as $product)
      <div class="item col-lg-3 col-sm-6 mb-5">
                        <div class="card card-product no-border shadow shadow--hover">
                            <div class="card-image">
                                <a href="shop-product.html">
                                    <img alt="Image placeholder" src="{{asset('uploads/main_gallery/'.$product->main_image)}}" style ="max-height:200px;">

                                </a>

                                <span class="ribbon ribbon-right ribbon-primary rounded-circle">New</span>

                            </div>
                            <div class="card-body pt-0">
                                <a href="shop-product.html" class="card-title text-center" >{{$product->name}}</a>
                                <span class="card-price text-center">{{$product->price}}</span>
                                <div class="product-colors mt-3">
                                  <small>  {!!$product->description!!}</small>
                                </div>
                            </div>
                            <div class="card-product-actions" data-animation-in="slideInLeft" data-animation-out="slideOutLeft">
                                <button type="button" class="btn-product-action" data-toggle="tooltip" data-original-title="Add to cart">
                                    <i class="far fa-shopping-bag"></i>
                                </button>
                                <button type="button" class="btn-product-action" data-toggle="tooltip" data-original-title="Wishlist">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                      @endforeach --}}
                @foreach($products as $product)
                <div class="item col-xs-3 col-lg-3">
                    <div class="thumbnail card">
                        <div class="img-event">
                          <div class="text-center">
                              <img class="group list-group-image img-fluid" src="{{asset('uploads/'.$product->main_image)}}" style ="max-height:200px;" alt="" />
                          </div>

                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                            <a href="{{url('/products/'.$product->id)}}">  {{$product->name}}</a> </h4>
                            <p class="group inner list-group-item-text">
                                <small>{!!$product->description!!}</small> </p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        {{$product->price}}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
              @endforeach

            </div>

          @else


            <div class="row my-5">
            <div class="col-12">

              <!-- Card -->
              <div class="">
                <div class="card-body text-center">

                  <!-- Image -->
                  <img src="{{asset('img/designer-life.svg')}}" alt="..." class="img-fluid" style="max-width: 282px;">

                  <!-- Title -->
                  <h1>
                    No Products Yet.
                  </h1>

                  <!-- Subtitle -->
                  <p class="text-muted">
                  Start Adding Products for your Store
                  </p>

                  <!-- Button -->
                  <a href="{{ url('/new-product') }}" class="btn btn-primary">
                    Buy Reports
                  </a>

                </div>
              </div>

            </div>
          </div> <!-- / .row -->


          @endif



</div>


</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
          $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
          $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
      });
</script>


@endsection