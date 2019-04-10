<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <link href="https://fonts.googleapis.com/css?family=Varela" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts/feather/feather.min.css')}}">
    <link rel="stylesheet" href="{{asset('libs/highlight.js/styles/vs2015.css')}}">
    <link rel="stylesheet" href="{{asset('libs/quill/dist/quill.core.css')}}">
    <link rel="stylesheet" href="{{asset('libs/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('libs/flatpickr/dist/flatpickr.min.css')}}">


    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/css/froala_style.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{asset('css/theme.min.css')}}" id="stylesheetLight">


    <title>Vazy | Rent | Return </title>
  </head>
  <body >

      <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
        <div class="container-fluid">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Brand -->
          <a class="navbar-brand" href="{{url('/dashboard')}}">
            <img src="{{asset('img/logo.svg')}}" class="navbar-brand-img
            mx-auto" alt="...">
          </a>

          <!-- User (xs) -->
          <div class="navbar-user d-md-none">

            <!-- Dropdown -->
            <div class="dropdown">

              <!-- Toggle -->
              <a href="#!" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-sm avatar-online">
                  <img src="{{asset('img/avatars/profiles/avatar-1.png')}}" class="avatar-img rounded-circle" alt="...">
                </div>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
                <a href="profile-posts.html" class="dropdown-item">Profile</a>
                <a href="{{url('/account-settings')}}" class="dropdown-item">Settings</a>
                <hr class="dropdown-divider">
                <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
              </div>

            </div>

          </div>

          <!-- Collapse -->
          <div class="collapse navbar-collapse" id="sidebarCollapse">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
              <div class="input-group input-group-rounded input-group-merge">
                <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <span class="fe fe-search"></span>
                  </div>
                </div>
              </div>
            </form>

            <!-- Navigation -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{url('/dashboard')}}">
                  <i class="fe fe-activity"></i> Dashboard
                </a>

              </li>
        
            </ul>

            <!-- Divider -->
            <hr class="navbar-divider my-3">

            <!-- Heading -->
            <h6 class="navbar-heading">
              Store Management
            </h6>

            <!-- Navigation -->
            <ul class="navbar-nav mb-md-4">
              <li class="nav-item">
                <a class="nav-link " href="{{url('/products')}}">
                  <i class="fe fe-save"></i> Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{url('/new-product')}}">
                  <i class="fe fe-file-plus"></i> Add Product
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{url('/view-store')}}" >
                 <span class="fe fe-layers"></span> Manage Rentals
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{url('/categories')}}" >
                 <span class="fe fe-layers"></span> Categories
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{url('/view-store')}}" >
                 <span class="fe fe-layers"></span> View Store
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{url('/account-settings')}}">
                  <i class="fe fe-clipboard"></i> Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{url('/account-settings')}}">
                  <i class="fe fe-credit-card"></i> Billing Info
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{url('/account-settings')}}">
                  <i class="fe fe-sliders"></i> Settings
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{url('/store-settings')}}">
                  <i class="fe fe-settings"></i> Store Settings
                </a>
              </li>


            </ul>

            <!-- Push content down -->
            <div class="mt-auto"></div>


            <!-- Customize -->
            <a href="#modalDemo" class="btn btn-block btn-primary mb-4" data-toggle="modal">
              <i class="fe fe-sliders mr-2"></i> Customize
            </a>






          </div>

        </div>
      </nav>




      @yield('content')



    <!-- Libs JS -->
    <script src="{{asset('libs/jquery/dist/jquery.min.js')}}"></script>

    <script type="text/javascript">
    $(document).ready(function() {
  $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
  $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
    </script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/js/froala_editor.pkgd.min.js"></script>

<script>

$('textarea').froalaEditor({
 toolbarSticky: false,
 toolbarButtons: ['undo', 'redo' , '|', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'outdent', 'indent', 'insertLink', 'formatOL', 'formatUL','insertFile', 'clearFormatting', 'insertTable', 'html'],
		 toolbarButtonsXS: ['undo', 'redo' , '-', 'bold', 'italic', 'underline']
})

</script>
  <script src="{{asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
      {{--<script src="{{asset('libs/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{asset('libs/chart.js/Chart.extension.min.js')}}"></script>
    <script src="{{asset('libs/highlightjs/highlight.pack.min.js')}}"></script>
    <script src="{{asset('libs/flatpickr/dist/flatpickr.min.js')}}"></script>
    <script src="{{asset('libs/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
    <script src="{{asset('libs/list.js/dist/list.min.js')}}"></script>
    <script src="{{asset('libs/quill/dist/quill.min.js')}}"></script>
    <script src="{{asset('libs/dropzone/dist/min/dropzone.min.js')}}"></script>
    <script src="{{asset('libs/select2/dist/js/select2.min.js')}}"></script> --}}


    {{-- <script src="{{asset('js/theme.min.js')}}"></script> --}}



</body>

</html>
