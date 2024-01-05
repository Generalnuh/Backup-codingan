<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Manajemen Pegawai</title>

    <!-- Styles -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/icon/bootstrap-icons.css') }}" rel="stylesheet">    
    <link href="{{ asset('vendor/DataTables/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/summernote/summernote-bs4.css') }}" rel="stylesheet">
</head>
  
<body class="h-100">
    <nav class="navbar navbar-expand-sm navbar-dark sticky-top bg-info">
         <a class="navbar-brand col-md-2 col-lg-2 px-3" href="#">Manajemen Pegawai</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#sidebar" aria-controls="sidebar" 
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
    </nav>
   
    <div class="container-fluid h-100">
      <div class="row h-100">
         <nav class="col-md-2 col-sm-4 bg-dark h-100 p-0 position-fixed 
            collapse d-sm-block" id="sidebar" style="z-index:1000">
            
<ul class="list-group list-group-flush">
    <li class="list-group-item bg-dark"> 
       <a class="nav-link text-white" href="{{ route('home') }}">
           <i class="bi bi-speedometer2"></i>  Dashboard
       </a>
    </li>
    <li class="list-group-item bg-dark"> 
       <a class="nav-link text-white" href="{{ route('pegawai.index') }}">
           <i class="bi bi-person-square"></i> Data Pegawai
       </a> 
    </li>
    <li class="list-group-item bg-dark"> 
       <a class="nav-link text-white" href="{{ route('jabatan.index') }}">
           <i class="bi bi-star-fill"></i>  Data Jabatan
       </a> 
    </li>
    <li class="list-group-item bg-dark"> 
       <a class="nav-link text-white" href="{{ route('logout') }}"
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
         <i class="bi bi-power"></i>  Logout
       </a>
    </li>
</ul>
    </nav>

    <div  class="col-md-10 col-sm-9 offset-md-2 offset-sm-3 py-3">  
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
         @csrf
      </form>
      
    @if($message = Session::get('success'))
        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true"
            style="position:absolute; right:10px; top:20px; z-index:1030;"
        >
        <div class="toast-header">
        <strong class="me-auto">Sukses</strong>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {{$message}}
        </div>     
    </div>
    @endif
    
      <section class="pb-4">
         @yield('content')
     </section>
  </div>

        </div>
      </div>

    <div class="bg-light fixed-bottom">
      <p class="p-2 text-center text-muted">Copyright &copy; Rohi Abdulloh</p>
    </div>
    
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jQuery/jquery.min.js') }}"></script>  
    <script src="{{ asset('vendor/DataTables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/DataTables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('vendor/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $(function(){
            $('.table').DataTable();
            $('#tanggal').datepicker();
            $('#keterangan').summernote();
        });
    </script>
   </body>
</html>
