<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin Portal')</title>
    <link rel="shortcut icon" href="{{ asset('/fav.ico') }}">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
  
  <!-- plugin css -->
  <link href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" />
  <!-- end plugin css -->
</head>
<body class="container">
  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="text-center">
      <a href="{{'/portal/admin'}}">
        <button type="button" class="btn btn-outline-primary m-2 "> 
        <i class="link-icon" data-feather="shield" style="height: 20px;"></i>
         <span>Administrator</span>
        </button>
        </a>
      <a href="{{'/portal/accounting'}}">
        <button type="button" class="btn btn-outline-primary m-2 "> 
        <i data-feather="dollar-sign" style="height: 20px;"></i>
        Accounting</button>
      </a>
      <a href="{{'/portal/hrms'}}">
        <button type="button" class="btn btn-outline-primary m-2 "> 
        <i class="link-icon" data-feather="users" style="height: 20px;"></i>
        Human Resource</button>
      </a>
    </div>
</div>

  </div>
 <!-- base js -->
 <script src="{{ asset('js/app.js') }}"></script>
 <script src="{{ asset('assets/plugins/feather-icons/feather.min.js') }}"></script>
 <!-- end base js -->

 <!-- plugin js -->
 @stack('plugin-scripts')
 <!-- end plugin js -->

 <!-- common js -->
 <script src="{{ asset('assets/js/template.js') }}"></script>
 <!-- end common js -->

 @stack('custom-scripts')
</body>
</html>