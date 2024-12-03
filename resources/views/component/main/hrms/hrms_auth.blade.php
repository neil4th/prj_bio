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

<div class="bg-zinc-700 flex  flex-col justify-center items-center " >
  <h2 class="text-white" >Register</h2>
  <form action="/register" method="POST" class="flex  flex-col  justify-center items-center">
      @csrf
      <input class="p-2 m-2 outline-none rounded-sm" type="text" name="name" placeholder="name">
      <input class="p-2 m-2 outline-none rounded-sm" type="text" name="email" placeholder="email">
      <input class="p-2 m-2 outline-none rounded-sm" type="password" name="password" placeholder="password">
      <div class="flex">
          <button class="mb-2 p-2 bg-green-500  text-white font-bold rounded-sm">Register</button>
      </div>
  </form>
</div>


</body>
</html>