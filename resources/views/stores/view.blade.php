@extends('layouts.dashboard') @section('content')

<style media="screen">
    .avat {
        font-size: 1rem;
        position: relative;
        display: inline-block;
        max-width: 240px;
        height: 5rem;
    }


    .btn-app-store .btn-inner--text {
        font-size: .75rem;
        line-height: .75rem;
        display: block;
        margin-bottom: .125rem
    }

    .btn-app-store .btn-inner--brand {
        font-size: 21px;
        line-height: 21px;
        display: block;
        text-align: left
    }

    .btn-app-store:hover {
        color: #fff;
        background-color: #410c87
    }

    .card>.actions {
        position: absolute;
        top: 1rem;
        right: .875rem
    }

    .card-stats .actions {
        top: .5rem;
        right: .75rem
    }

    .action-item {
        font-size: .875rem;
        padding: .375rem .25rem;
        cursor: pointer;
        transition: color .3s;
        color: #adb5bd
    }

    .action-item:hover {
        color: #6c7686
    }

    .actions-dark .action-item {
        color: rgba(255, 255, 255, .7)
    }

    .actions-dark .action-item:hover {
        color: rgba(255, 255, 255, .9)
    }

    .shadow {
    box-shadow: 0 0 1.25rem rgba(108, 118, 134, .1)!important;
}
.rounded-circle {
    border-radius: 50%!important;
}

    .card {
        position: relative
    }

    .card-translucent-dark {
        background: rgba(255, 255, 255, .2)
    }

    .card-translucent-light {
        background: rgba(0, 0, 0, .2)
    }

    .card-img-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: all .7s cubic-bezier(.2, 1, .22, 1);
        border-radius: .375rem;
        background-size: cover;
        -webkit-backface-visibility: hidden
    }

    .card:hover .card-img-bg {
        -webkit-transform: scale(1.1);
        transform: scale(1.1)
    }

    .card-img-bg~.card-body {
        position: relative
    }

    [data-lg-columns='2'] {
        column-count: 2!important
    }

    @media (min-width:992px) and (max-width:1199.98px) {
        [data-lg-columns='3'] {
            column-count: 3!important
        }
    }

    @media (min-width:992px) and (max-width:1199.98px) {
        [data-lg-columns='4'] {
            column-count: 4!important
        }
    }

    .card-pricing .card-header {
        padding-top: 1.25rem;
        padding-bottom: 1.25rem
    }

    .card-pricing .list-unstyled li {
        padding: .5rem 0;
        color: #6c7686
    }

    .card-pricing.popular {
        z-index: 1;
        border: 3px solid #510fa8!important
    }

    @media (min-width:768px) {
        .card-pricing.zoom-in {
            z-index: 1;
            transform: scale(1.1)
        }
    }

    .card-comment-box input,
    .card-comment-box textarea {
        width: 100%;
        margin: 0;
        padding: .3125rem 0;
        resize: none;
        color: #343a40;
        border: 0;
        outline: 0;
        background: 0 0;
        box-shadow: none
    }

    .card-comment-box input:focus,
    .card-comment-box textarea:focus {
        background: 0 0;
        box-shadow: none
    }

    .card-profile .card-profile-image {
    min-width: 10rem;
    height: 7rem;
    transform: translateY(-50%);
    border: .1875rem solid #fff;
}

    .card-profile .card-body {
        position: relative;
        z-index: 2;
        margin-top: -3.5rem
    }

    .card-profile-cover {
        overflow: hidden;
        max-height: 300px
    }

    .card-product {
        overflow: hidden
    }

    .card-product .card-image {
        padding: 1.5rem
    }

    .card-product .card-image img {
        transition: all .2s ease-in-out;
        transition-delay: .2s;
        transform: scale(1)
    }

    @media screen and (prefers-reduced-motion:reduce) {
        .card-product .card-image img {
            transition: none
        }
    }

    .card-product:hover .card-image img {
        transform: scale(1.1)
    }

    .card-product .card-title {
        font-size: 1rem;
        font-weight: 600;
        color: #343a40
    }

    .card-product .card-price {
        font-size: 1rem;
        font-weight: 600;
        display: block;
        color: #adb5bd
    }

    .card-product .product-colors a {
        display: inline-block;
        float: none!important;
        width: 1rem;
        height: 1rem;
        margin-right: 3px;
        margin-bottom: 0;
        transition: all .2s ease-in-out;
        border-radius: 50%
    }

    @media screen and (prefers-reduced-motion:reduce) {
        .card-product .product-colors a {
            transition: none
        }
    }

    .card-product .product-colors a:hover {
        transform: scale(1.1)
    }

    .card-product-actions {
        position: absolute;
        top: 10px;
        left: 10px;
        width: 80px;
        height: 40px;
        opacity: 0;
        background: 0 0
    }

    .card-product-actions.in {
        opacity: 1
    }

    .card-product-actions.animated {
        animation-duration: .5s
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
        background: 0 0
    }

    .card-product-actions .btn-product-action:hover {
        color: #510fa8;
        background: 0 0
    }

    .card-product-actions .btn-product-action:active {
        border-color: transparent
    }

    .card-group .card .mask {
        border-radius: 0
    }

    .close>span:not(.sr-only) {
        color: rgba(0, 0, 0, .5)
    }

    .close:focus>span:not(.sr-only),
    .close:hover>span:not(.sr-only) {
        color: rgba(0, 0, 0, .8)
    }

    .collage {
        height: 600px
    }

    .collage .bg-img-holder {
        position: relative;
        z-index: 0;
        width: 100%;
        height: 100%
    }

    .collage .collage-bg {
        z-index: 3
    }

    .collage .collage-back {
        position: absolute;
        z-index: 1;
        top: 0;
        left: 0
    }

    .collage .collage-back img {
        max-width: 100%
    }

    .collage .collage-front {
        position: absolute;
        z-index: 2;
        top: 0;
        left: 0
    }

    .btn:not(:disabled):not(.disabled) {
        cursor: pointer
    }

    .btn:not(:disabled):not(.disabled).active,
    .btn:not(:disabled):not(.disabled):active {
        box-shadow: none
    }

    .btn:not(:disabled):not(.disabled).active:focus,
    .btn:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 4px 15px rgba(81, 15, 168, .35), none
    }

    a.btn.disabled,
    fieldset:disabled a.btn {
        pointer-events: none
    }

    .btn-primary {
        color: #fff;
        border-color: #510fa8;
        background-color: #510fa8;
        box-shadow: none
    }

    .btn-primary:hover {
        color: #fff;
        border-color: #3a0b79;
        background-color: #400c85
    }

    .btn-primary.focus,
    .btn-primary:focus {
        box-shadow: none, 0 0 0 0 rgba(81, 15, 168, .5)
    }

    .btn-primary.disabled,
    .btn-primary:disabled {
        color: #fff;
        border-color: #510fa8;
        background-color: #510fa8
    }

    .btn-primary:not(:disabled):not(.disabled).active,
    .btn-primary:not(:disabled):not(.disabled):active,
    .show>.btn-primary.dropdown-toggle {
        color: #fff;
        border-color: #350a6d;
        background-color: #3a0b79
    }

    .btn-primary:not(:disabled):not(.disabled).active:focus,
    .btn-primary:not(:disabled):not(.disabled):active:focus,
    .show>.btn-primary.dropdown-toggle:focus {
        box-shadow: none, 0 0 0 0 rgba(81, 15, 168, .5)
    }

    .btn-secondary {
        color: #212529;
        border-color: #fafbfe;
        background-color: #fafbfe;
        box-shadow: none
    }

    .btn-secondary:hover {
        color: #212529;
        border-color: #d0d9f6;
        background-color: #dae2f8
    }

    .btn-secondary.focus,
    .btn-secondary:focus {
        box-shadow: none, 0 0 0 0 rgba(250, 251, 254, .5)
    }

    .btn-secondary.disabled,
    .btn-secondary:disabled {
        color: #212529;
        border-color: #fafbfe;
        background-color: #fafbfe
    }

    .btn-secondary:not(:disabled):not(.disabled).active,
    .btn-secondary:not(:disabled):not(.disabled):active,
    .show>.btn-secondary.dropdown-toggle {
        color: #212529;
        border-color: #c5d1f3;
        background-color: #d0d9f6
    }

    .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .btn-secondary:not(:disabled):not(.disabled):active:focus,
    .show>.btn-secondary.dropdown-toggle:focus {
        box-shadow: none, 0 0 0 0 rgba(250, 251, 254, .5)
    }

    .btn-success {
        color: #fff;
        border-color: #4cd964;
        background-color: #4cd964;
        box-shadow: none
    }

    .btn-success:hover {
        color: #fff;
        border-color: #2ac845;
        background-color: #2dd249
    }

    .btn-success.focus,
    .btn-success:focus {
        box-shadow: none, 0 0 0 0 rgba(76, 217, 100, .5)
    }

    .btn-success.disabled,
    .btn-success:disabled {
        color: #fff;
        border-color: #4cd964;
        background-color: #4cd964
    }

    .btn-success:not(:disabled):not(.disabled).active,
    .btn-success:not(:disabled):not(.disabled):active,
    .show>.btn-success.dropdown-toggle {
        color: #fff;
        border-color: #28bd42;
        background-color: #2ac845
    }

    .btn-success:not(:disabled):not(.disabled).active:focus,
    .btn-success:not(:disabled):not(.disabled):active:focus,
    .show>.btn-success.dropdown-toggle:focus {
        box-shadow: none, 0 0 0 0 rgba(76, 217, 100, .5)
    }

    .btn-info {
        color: #fff;
        border-color: #24b7fa;
        background-color: #24b7fa;
        box-shadow: none
    }

    .badge-lg {
        padding: .85em 1.375em;
    }

    .badge {
        margin: .25rem 0;
    }

    .mb-2,
    .my-2 {
        margin-bottom: .5rem!important;
    }

    .mr-2,
    .mx-2 {
        margin-right: .5rem!important;
    }

    .badge-lg {
        padding: .85em 1.375em;
    }

    a:hover {
        text-decoration: none;
        color: #2f0962;
    }

    .h4,
    .h5,
    .h6,
    h4,
    h5,
    h6 {
        font-weight: 600;
    }

    .mb-0,
    .my-0 {
        margin-bottom: 0!important;
    }

    .h6,
    h6 {
        font-size: 1rem;
    }

    .badge-info {
        color: #0090d2;
        background-color: #d3f0fe;
    }

    .card-body {
        padding: 1.5rem;
        flex: 1 1 auto;
    }

    .pl-2,
    .px-2 {
        padding-left: .5rem!important;
    }

    .media-body {
        flex: 1 1;
    }

    .avatar+.avatar-content {
        display: inline-block;
        margin-left: .75rem;
    }


    .btn-info:hover {
        color: #fff;
        border-color: #059fe6;
        background-color: #06a8f2
    }

    .bg-secondary {
        background-color: #fafbfe!important;
    }

    @media (min-width: 768px) .header-account-page {
        height: 350px;
    }

    .bg-gradient-primary {
        background: linear-gradient(80deg, #510fa8 0, #320fa8 100%)!important;
    }

    .card-img-top {
        width: 100%;
        border-top-left-radius: calc(.375rem - .0625rem);
        border-top-right-radius: calc(.375rem - .0625rem);
    }

    .collage .collage-front img {
        max-height: 100%
    }

    .avat {
        font-size: 1rem;
        font-weight: 600;
        position: relative;
        display: inline-flex;
        width: 3rem;
        height: 3rem;
        color: #fff;
        border-radius: .25rem;
        align-items: center;
        justify-content: center;
    }
    .card-product .img-wrap {
    border-radius: 3px 3px 0 0;
    overflow: hidden;
    position: relative;
    height: 220px;
    text-align: center;
}
.card-product .img-wrap img {
    max-height: 100%;
    max-width: 100%;
    object-fit: cover;
}
.card-product .info-wrap {
    overflow: hidden;
    padding: 15px;
    border-top: 1px solid #eee;
}
.card-product .bottom-wrap {
    padding: 15px;
    border-top: 1px solid #eee;
}

.label-rating { margin-right:10px;
    color: #333;
    display: inline-block;
    vertical-align: middle;
}

.card-product .price-old {
    color: #999;
}

.tinted-image {
    background: linear-gradient(rgb(235, 7, 140), rgb(8, 8, 8)) ! important;
}
</style>

<div class="main-content">

    {{-- @include('partials.nav') --}}

    <main>

        <header class="header-account-page d-flex align-items-end tinted-image" style ="padding:70px 0px;background:url('{{asset('img/banner.jpg')}}')">
            <div class="container">
                <div class="row justify-content-end">
                    <div class=" col-lg-8">
                        <!-- Salute + Small stats -->
                        <div class="row align-items-center mb-4">
                            <div class="col-md-5 mb-4 mb-md-0">
                                <span class="h2 mb-0 text-white d-block">Morning Heather</span>
                                <span class="text-light">Have a nice day!</span>
                            </div>
                            <div class="col-auto flex-fill">
                                <ul class="list-inline row justify-content-lg-end mb-0">
                                    <li class="list-inline-item col-sm-4 col-md-auto px-3 my-2 mx-0">
                                        <span class="badge badge-dot text-white">
                                        <i class="bg-green"></i>Sales
                                    </span>
                                        <a class="d-sm-block h5 text-white font-weight-bold pl-2" href="#">
                                        20.5%
                                        <small class="far fa-angle-up text-success"></small>
                                    </a>
                                    </li>
                                    <li class="list-inline-item col-sm-4 col-md-auto px-3 my-2 mx-0">
                                        <span class="badge badge-dot text-white">
                                        <i class="bg-orange"></i>Tasks
                                    </span>
                                        <a class="d-sm-block h5 text-white font-weight-bold pl-2" href="#">
                                        5.7%
                                        <small class="far fa-angle-up text-warning"></small>
                                    </a>
                                    </li>
                                    <li class="list-inline-item col-sm-4 col-md-auto px-3 my-2 mx-0">
                                        <span class="badge badge-dot text-white">
                                        <i class="bg-red"></i>Sales
                                    </span>
                                        <a class="d-sm-block h5 text-white font-weight-bold pl-2" href="#">
                                        -3.24%
                                        <small class="far fa-angle-down text-danger"></small>
                                    </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Account navigation -->
                        <div class="d-flex">
                            <a href="account-profile-public.html" class="btn btn-icon btn-group-nav shadow btn-secondary">
                                <span class="btn-inner--icon"><i class="far fa-user"></i></span>
                                <span class="btn-inner--text d-none d-md-inline-block">My Profile</span>
                            </a>
                            <div class="btn-group btn-group-nav shadow ml-auto" role="group" aria-label="Basic example">
                                <div class="btn-group" role="group">
                                    <button id="btn-group-boards" type="button" class="btn btn-secondary btn-icon dropdown-toggle" data-toggle="dropdown" data-offset="0,8" aria-haspopup="true" aria-expanded="false">
                                        <span class="btn-inner--icon"><i class="far fa-chart-line"></i></span>
                                        <span class="btn-inner--text d-none d-sm-inline-block">Boards</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="btn-group-boards">
                                        <a class="dropdown-item" href="account-overview.html">Overview</a>
                                        <a class="dropdown-item" href="account-projects.html">Projects</a>
                                        <a class="dropdown-item" href="account-tasks.html">Tasks</a>
                                        <a class="dropdown-item" href="account-connections.html">Connections</a>
                                    </div>
                                </div>
                                <div class="btn-group" role="group">
                                    <button id="btn-group-settings" type="button" class="btn btn-secondary btn-icon dropdown-toggle" data-toggle="dropdown" data-offset="0,8" aria-haspopup="true" aria-expanded="false">
                                        <span class="btn-inner--icon"><i class="far fa-sliders-h"></i></span>
                                        <span class="btn-inner--text d-none d-sm-inline-block">Settings</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="btn-group-settings">
                                        <a class="dropdown-item" href="account-profile.html">Profile</a>
                                        <a class="dropdown-item" href="account-settings.html">Settings</a>
                                        <a class="dropdown-item" href="account-billing.html">Billing</a>
                                        <a class="dropdown-item" href="account-notifications.html">Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="pt-5 pt-lg-0 bg-secondary" >
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-5">

                      <div data-toggle="sticky" data-sticky-offset="100" data-negative-margin=".card-profile-cover" class="" style="margin-top:-150px;">

                            <div class="card card-profile border-0 shadow  text-center">
                                <div class="card-profile-cover">
                                    <img alt="Image placeholder" src="{{asset('storage/'.$store->banner)}}" class="card-img-top">
                                </div>
                                <a href="#">
                                        <img alt="Image placeholder" src="{{asset('img/lo.png')}}" class="card-profile-image avat shadow">
                                    </a>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <h5 class="mb-0">{{$store->owner_name}}</h5>
                                        <span class="text-muted">{{$store->name}}</span>
                                    </div>
                                 
                                    <div class="pt-4 mt-4 delimiter-top">
                                        <div class="btn-group shadow rounded-circle">
                                            <button class="btn btn-sm btn-primary btn-circle btn-icon">
                                                <span class="btn-inner--icon"><i class="far fa-user"></i></span>
                                                <span class="btn-inner--text">Edit Store Detail</span>
                                            </button>
                                            <button class="btn btn-sm btn-dark btn-circle"><i class="far fa-envelope"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                  <div class="col-md-8 mt-lg-5 mb-5"></div>
                </div>
            </div>
        </section>

        <div class ="container">
        <div class="row">
        @foreach($products as $product)
<div class="col-md-4">
	<figure class="card card-product">
	<div class="img-wrap">   <img class="group list-group-image img-fluid" src="{{asset('uploads/'.$product->main_image)}}" style ="max-height:400px;" alt="" /></div>
		<figcaption class="info-wrap">
				<h4 class="title">{{$product->name}}</h4>
				<p class="desc">Some small description here</p>
				<div class="rating-wrap">
					<div class="label-rating">132 reviews</div>
					<div class="label-rating">154 orders </div>
				</div> <!-- rating-wrap.// -->
		</figcaption>
		<div class="bottom-wrap">
			<a href="{{url('/products/edit/'.$product->id)}}" class="btn btn-sm btn-primary float-right">Edit</a>	
			<div class="price-wrap h5">
				<span class="price-new" style ="color:red;">‎KSh </span><span>{{$product->price}}</span> 
			</div> <!-- price-wrap.// -->
		</div> <!-- bottom-wrap.// -->
	</figure>
</div> <!-- col // -->
   @endforeach

</div> <!-- row.// -->
        
        </div>

    </main>

    @endsection
