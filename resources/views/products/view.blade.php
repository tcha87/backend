@extends('layouts.dashboard')

<style media="screen">
.custom-color label {
  display: block;
  float: left;
  width: 2.25rem;
  height: 2.25rem;
  margin-right: .375rem;
  margin-bottom: 0;
  padding: .375rem;
  transition: all .2s ease-in-out;
  transform: scale(.95);
  text-align: center;
  opacity: .7;
  border: 1px solid transparent;
  border-radius: .25rem;
}

.rounded-circle {
  border-radius: 50%!important;
}

.custom-color:after, .custom-color:before {
    display: table;
    content: '';
}

.custom-color:after {
    clear: both;
}

.custom-color input {
    position: absolute;
    left: -9999px;
}

input[type=checkbox], input[type=radio] {
    box-sizing: border-box;
    padding: 0;
}

.custom-color input:checked+label {
    transform: scale(1.1);
    opacity: 1;
}

.custom-color label:hover {
    cursor: pointer;
    opacity: 1;
}


.checkbox-alphanumeric label:hover {
    cursor: pointer;
    border-color: #dee2e6;
}

.checkbox-alphanumeric label {
    font-size: .875rem;
    font-weight: 400;
    display: block;
    float: left;
    width: 2.25rem;
    height: 2.25rem;
    margin-bottom: 0;
    padding: .375rem 0;
    transition: all .3s ease;
    transform: scale(.95);
    text-align: center;
    text-transform: uppercase;
    color: #6c7686;
    border: .0625rem solid #ced4da;
    border-radius: .2rem;
    background: 0 0;
}

.checkbox-alphanumeric {
    list-style: none;
}

[class*=alpha] {
    transition: all .2s ease-in-out;
}

.checkbox-alphanumeric:after, .checkbox-alphanumeric:before {
    display: table;
    content: '';
}

.checkbox-alphanumeric:after {
    clear: both;
}


</style>

@section('content')


<div class="main-content">

      <header class="slice pt-lg pb-4 bg-gradient-warning d-flex align-items-end">
          <div class="container pt-lg">
              <div class="row">
                  <div class=" col-lg-12">
                      <div class="row align-items-center mb-4">
                          <div class="col-lg-5 mb-4 mb-lg-0">
                              <span class="h2 mb-0 text-white d-block">{{$product->name}}</span>
                              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                  <li class="breadcrumb-item">
                                      <a href="#" class="text-normal">Home</a>
                                  </li>
                                  <li class="breadcrumb-item">
                                      <a href="#" class="text-normal">{{$product->store->name}}</a>
                                  </li>
                                  <li class="breadcrumb-item">
                                      <a href="#" class="text-normal">Men's clothing</a>
                                  </li>
                              </ol>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </header>

      <section class="slice slice-lg" id="sct-products">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6">
                      <!-- Product gallery -->
                      <div class="mb-5">
                          <a href="">
                              <img class="group list-group-image img-fluid" src="{{asset('uploads/'.$product->main_image)}}" style ="max-height:400px;" alt="" />
                          </a>
                      </div>

                      <div class="row">
                        @foreach($images as $image)
                        <div class="col-sm-4">
                          <img class="group list-group-image img-fluid" src="{{asset('uploads/gallery_images/'.$image->path)}}" style ="max-height:200px;" alt="" />
                        </div>
                      @endforeach
                      </div>

                  </div>
                  <div class="col-lg-6">
                      <form class="pl-lg-4">
                          <!-- Product title -->
                          <h2 class="h5 text-capitalize">{{$product->name}}</h2>

                          <!-- Rating stars -->

                          <span class="static-rating static-rating-sm">

      <i class="star far fa-star voted"></i>
      <i class="star far fa-star voted"></i>
      <i class="star far fa-star voted"></i>
      <i class="star far fa-star voted"></i>
      <i class="star far fa-star"></i>

  </span>

                          <!-- Product description -->
                          <div class="mt-4">
                              <small class="text-dark font-weight-bold d-block mb-2">Description:</small>
                              <div class="text-sm lh-150">

                                {!!$product->description!!}
                              </div>

                          <!-- Size -->
                          <div class="mt-4">
                              <small class="d-block font-weight-bold text-dark mb-2">Size:</small>
                              <div class="d-flex">
                                  <div class="checkbox-alphanumeric">
                                      <input id="size-1" name="size" type="radio">
                                      <label for="size-1">37</label>
                                  </div>
                                  <div class="checkbox-alphanumeric">
                                      <input id="size-2" name="size" type="radio">
                                      <label for="size-2">38</label>
                                  </div>
                                  <div class="checkbox-alphanumeric">
                                      <input id="size-3" name="size" type="radio">
                                      <label for="size-3">39</label>
                                  </div>
                                  <div class="checkbox-alphanumeric">
                                      <input id="size-4" name="size" type="radio">
                                      <label for="size-4">40</label>
                                  </div>
                                  <div class="checkbox-alphanumeric">
                                      <input id="size-5" name="size" type="radio">
                                      <label for="size-5">41</label>
                                  </div>
                                  <div class="checkbox-alphanumeric">
                                      <input id="size-6" name="size" type="radio">
                                      <label for="size-6">42</label>
                                  </div>
                              </div>
                          </div>

                          <!-- Color -->
                          <div class="mt-4">
                              <small class="d-block font-weight-bold text-dark mb-2">Color:</small>
                              <div class="d-flex">
                                  <div class="custom-color">
                                      <input id="color-1" name="size" type="radio">
                                      <label for="color-1" class="rounded-circle" style="background: #59ad46;"></label>
                                  </div>
                                  <div class="custom-color">
                                      <input id="color-2" name="size" type="radio">
                                      <label for="color-2" class="rounded-circle" style="background: #04050a;"></label>
                                  </div>
                                  <div class="custom-color">
                                      <input id="color-3" name="size" type="radio">
                                      <label for="color-3" class="rounded-circle" style="background: #62aedd;"></label>
                                  </div>
                                  <div class="custom-color">
                                      <input id="color-4" name="size" type="radio">
                                      <label for="color-4" class="rounded-circle" style="background: #e84385;"></label>
                                  </div>
                              </div>
                          </div>


                          <!-- Product info -->
                          <div class="mt-4">
                              <small class="d-block font-weight-bold text-dark">Maintaining</small>
                              <ul class="list-unstyled list-icon">
                                  <li class="text-sm py-1">
                                      <i class="far fa-tshirt mr-3"></i>Exterior: 98% cotton, 2% elastane
                                  </li>
                                  <li class="text-sm py-1">
                                      <i class="far fa-air-freshener mr-3"></i>Machine wash up to 30°/86°F gentle cycle
                                  </li>
                                  <li class="text-sm py-1">
                                      <i class="far fa-charging-station mr-3"></i>Iron up to 110°C/230°F
                                  </li>
                              </ul>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </section>






</div>


@endsection