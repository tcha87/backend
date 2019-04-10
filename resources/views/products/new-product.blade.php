@extends('layouts.dashboard')

@section('content')
<div class="main-content">

    @include('partials.nav')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">

                <!-- Header -->
                <div class="header mt-md-5">
                    <div class="header-body">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Pretitle -->
                                <h6 class="header-pretitle">
              New Product
            </h6>

                                <!-- Title -->
                                <h1 class="header-title">
              Create a new Product
            </h1>

                            </div>
                        </div>
                        <!-- / .row -->
                    </div>
                </div>

                <!-- Form -->
                <form method="POST" id="upload" action="{!! route('newProduct') !!}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <!-- Product name -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    Product name
                                </label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="">Category</label>
                                <select name="category_id" id="inputState" class="form-control">
                                    <option disabled selected="">Choose a category...</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    Product Price
                                </label>
                                <input type="text" name="price" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="">Country</label>
                                <select   id="inputState" class="form-control">
                                    <option disabled selected="">Choose a location...</option>

                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Product description -->
                    <div class="form-group">
                        <label class="mb-1">
                            Product description
                        </label>
                        <small class="form-text text-muted">
          This is how others will learn about the Product, so make it good!
        </small>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="6"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="mb-1">
                            Main Image
                        </label>
                        <input type="file" name="main_image" class="form-control">

                    </div>

                    <div class="form-group">
                        <label class="mb-1">
                            Product Images
                        </label>
                        <input type="file" name="images[]" multiple class="form-control">

                    </div>

                    <!-- Product tags -->
                    <div class="form-group">
                        <label>
                            Product tags
                        </label>
                        <select class="form-control" data-toggle="select" multiple>
                            <option>CSS</option>
                            <option>HTML</option>
                            <option>JavaScript</option>
                            <option>Bootstrap</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6">

                            <!-- Start date -->
                            <div class="form-group">
                                <label>
                                    Start date
                                </label>
                                <input type="text" class="form-control" data-toggle="flatpickr">
                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <!-- Start date -->
                            <div class="form-group">
                                <label>
                                    End date
                                </label>
                                <input type="text" class="form-control" data-toggle="flatpickr">
                            </div>

                        </div>
                    </div>

                    <hr class="mt-4 mb-5">

                    <div class="row">
                        <div class="col-12 col-md-6">

                            <!-- Private Product -->
                            <div class="form-group">
                                <label class="mb-1">
                                    Private Product
                                </label>
                                <small class="form-text text-muted">
              If you are available for hire outside of the current situation, you can encourage others to hire you.
            </small>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="switchOne">
                                    <label class="custom-control-label" for="switchOne"></label>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <!-- Warning -->
                            <div class="card bg-light border">
                                <div class="card-body">

                                    <h4 class="mb-2">
                <i class="fe fe-alert-triangle"></i> Warning
              </h4>

                                    <p class="small text-muted mb-0">
                                        Once a Product is made private, you cannot revert it to a public Product.
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- / .row -->

                    <!-- Divider -->
                    <hr class="mt-5 mb-5">

                    <button class="btn btn-primary my-5" type="submit">Create Product</button>

                </form>

            </div>
        </div>

    </div>

</div>

@endsection
