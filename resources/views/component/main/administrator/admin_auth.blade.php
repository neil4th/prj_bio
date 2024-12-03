<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'Daily Time Record')</title>
  <link rel="shortcut icon" href="{{ asset('/fav.ico') }}">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
     <body>
    

<div class="d-flex justify-content-center align-items-center  vh-100">
  <div class="align-items-center">
  <a href="#" class="noble-ui-logo d-block mb-2">Bacaca <span>HRMS</span></a>
  <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>
  <form class="" method="POST" action="{{route('hrms-auth-login')}}">
    @csrf
    <div class="mb-3">
      <label for="userEmail" class="form-label">Employee ID</label>
      <input type="text" class="form-control" id="employee_id" placeholder="Enter Employee ID">
    </div>
    <div class="mb-3">
      <label for="userPassword" class="form-label">Password</label>
      <input type="password" class="form-control" id="userPassword" autocomplete="current-password" placeholder="Password">
    </div>
    <div>
      <button href="{{ url('/') }}" class="btn btn-primary me-2 mb-2 mb-md-0 ">Login</button>
    </div>
    <a href="{{ url('/') }}" class="d-block mt-3 text-muted">Not a user? Go back to DTR</a>
  </form>
</div>
</div>
</div>  
</body>
</html>