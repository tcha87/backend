@extends('layouts.dashboard') 


@section('content')
<div class="main-content">
    <div class="container" style ="margin-top:100px;">
        <div class="row">
          <div class="col-12">
            
            <!-- Files -->
            <div class="card" data-toggle="lists" data-lists-values='["name"]'>
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
                    <h4 class="card-header-title">
                      Files
                    </h4>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Dropdown -->
                    <div class="dropdown">

                      <!-- Toggle -->
                      <a href="#" class="small text-muted dropdown-toggle" data-toggle="dropdown">
                        Sort order
                      </a>

                      <!-- Menu -->
                      <div class="dropdown-menu">
                        <a class="dropdown-item sort" data-sort="name" href="#!">
                          Asc
                        </a>
                        <a class="dropdown-item sort" data-sort="name" href="#!">
                          Desc
                        </a>
                      </div>

                    </div>
    
                  </div>
                  <div class="col-auto">
                    
                    <!-- Button -->
                    <a href="#!" class="btn btn-sm btn-primary">
                      Upload
                    </a>

                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="card-header">
                <div class="row">
                  <div class="col-12">
                    
                    <!-- Form -->
                    <form>
                      <div class="input-group input-group-flush input-group-merge">
                        <input type="search" class="form-control form-control-prepended search" placeholder="Search">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <span class="fe fe-search"></span>
                          </div>
                        </div>
                      </div>
                    </form>

                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="card-body">

                <!-- List -->
                <ul class="list-group list-group-lg list-group-flush list my-n4">
                    @foreach($categories as $category)
                  <li class="list-group-item px-0">
                    
                    <div class="row align-items-center">
                      <div class="col-auto">
                        
                      
                                <img class="group list-group-image img-fluid" src="{{asset('uploads/categories/'.$category->banner)}}"  alt="Category Banner" />
                      

                      </div>
                      <div class="col ml-n2">

                        <!-- Title -->
                        <h2 class="card-title mb-1 name">
                          <a href="#!">{{$category->name}}</a>
                        </h2>

                       

                      
                        
                      </div>
                      <div class="col-auto">
                        
                        <!-- Button -->
                        <a href="#!" class="btn btn-sm btn-white d-none d-md-inline-block">
                          View Category
                        </a>

                      </div>
                    
                    </div> <!-- / .row -->

                  </li>
                
                 @endforeach
                
                </ul>

              </div>
            </div>

          </div>
        </div> <!-- / .row -->
    
</div>

@endsection