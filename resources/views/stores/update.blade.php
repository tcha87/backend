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
              {{$store->name}}
            </h6>

                                <!-- Title -->
                                <h1 class="header-title">
                                  Update Store Details
                                </h1>

                            </div>
                        </div>
                        <!-- / .row -->
                    </div>
                </div>

                <!-- Form -->
                <form method="POST" id="upload" action="{!! route('updateStore') !!}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <input type="hidden"  name="store_id" value="{{$store->id}}">
                    <!-- Store name -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    Store name
                                </label>
                                <input type="text" name="name" disabled value ="{{$store->name}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="">Store Phone Number</label>
                                <input type="text" value="{{old( 'phone_number', $store->phone_number) }}" name="phone_number" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    Store Owner
                                </label>
                                <input type="text" value="{{old( 'owner_name', $store->owner_name) }}" name="owner_name" class="form-control">
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

                    <!-- Store description -->
                    <div class="form-group">
                        <label class="mb-1">
                            Store description
                        </label>
                        <small class="form-text text-muted">
          This is how others will learn about the Store, so make it good!
        </small>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="6">{!!old( 'description', $store->description) !!}</textarea>
                    </div>

                    <div class="form-group">
                        <label class="mb-1">
                            Store Address
                        </label>
                        <small class="form-text text-muted">
          This is how others will learn about the Store, so make it good!
        </small>
                        <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="6">{!!old( 'address', $store->address) !!}</textarea>
                    </div>

                    <div class="form-group">
                        <label class="mb-1">
                            Store Logo
                        </label>
                        <input type="file" name="logo" class="form-control">

                    </div>

                    <div class="form-group">
                        <label class="mb-1">
                            Store Banner
                        </label>
                        <input type="file" name="banner" class="form-control">

                    </div>

                    <!-- Store tags -->
                    <div class="form-group">
                        <label>
                            Store tags
                        </label>
                        <select class="form-control" data-toggle="select" multiple>
                            <option>Women</option>
                            <option>Apparel</option>
                            <option>Man </option>
                            <option>Shoes</option>
                        </select>
                    </div>



                    <hr class="mt-4 mb-5">

                    <div class="row">
                        <div class="col-12 col-md-6">

                            <!-- Private Store -->
                            <div class="form-group">
                                <label class="mb-1">
                                    Private Store
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
                                        Once a Store is made private, you cannot revert it to a public Store.
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- / .row -->

                    <!-- Divider -->
                    <hr class="mt-5 mb-5">

                    <button class="btn btn-primary my-5" type="submit">Update Store</button>

                </form>

            </div>
        </div>

    </div>

</div>

@endsection
