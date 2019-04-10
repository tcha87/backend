@extends('layouts.auth')

@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="container-fluid">

      <div class="row align-items-center justify-content-center">
        <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6 my-5">
          <div class="text-center">
            <img src="{{asset('img/logo.svg')}}" alt="">
          </div>
          <!-- Heading -->
          <h1 class="display-4 text-center mb-3">
            Sign Up
          </h1>

          <!-- Subheading -->
          <p class="text-muted text-center mb-5">
           Some copy needed
          </p>

          <!-- Form -->
          <form  method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

            <!-- Store name -->
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

              <!-- Label -->
              <label>Store Name</label>

              <!-- Input -->
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="name@address.com" required autofocus>
              @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

<!-- Label -->
<label>Email Address</label>


<input id="email" type="email"  placeholder="name@domain.com" class="form-control" name="email" value="{{ old('email') }}" required>

@if ($errors->has('email'))
    <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
@endif

</div>

            <!-- Password -->
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

              <div class="row">
                <div class="col">

                  <!-- Label -->
                  <label>Password</label>

                </div>

              </div>



                <!-- Input -->
                <input type="password" name="password" required class="form-control form-control-appended" placeholder="Enter your password">


@if ($errors->has('password'))
    <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
@endif




            </div>

            <div class="form-group my-3">
                            <label for="password-confirm" class="control-label">Confirm Password</label>


                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                        </div>

            <!-- Submit -->
            <button class="btn btn-lg btn-block btn-primary my-5" type="submit">
              Register Store
            </button>

            <!-- Link -->
            <p class="text-center">
              <small class="text-muted text-center">
                You have an account already? <a href="{{url('login')}}">Login to Vazy</a>.
              </small>
            </p>

          </form>

        </div>
        <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">

          <!-- Image -->
          <div class="bg-cover vh-100 mt-n1 mr-n3" style="background-image: url({{asset('img/authbg.png)')}}"></div>

        </div>
      </div> <!-- / .row -->
    </div>
@endsection
