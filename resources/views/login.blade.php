@extends('layout.default')
@section('content')
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<style type="text/css">
    body {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
}

.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
}

.btn-google {
  color: white !important;
  background-color: #ea4335;
}

.btn-facebook {
  color: white !important;
/*  background-color: #3b5998;*/
}
</style>
<body>
    <div class="container">
    <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
    <div class="card border-0 shadow rounded-3 my-5">
    <div class="card-body p-4 p-sm-5">
    <h5 class="card-title text-center mb-5 fw-light fs-5">Log In</h5>
    <title>LOGIN</title>
    <form action="login-submit" method="post">
    <div class="form-floating mb-3">
    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
    <label for="floatingInput">Email address</label>
</div>
    <div class="form-floating mb-3">
    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
    <label for="floatingPassword">Password</label>
</div>
    <div class="form-check mb-3">
    <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
    <label class="form-check-label" for="rememberPasswordCheck">Remember password</label>
    @csrf
</div>
    <div class="d-grid">
    <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Log In</button>
</div>
    <hr class="my-4">
    <div class="d-grid mb-2">
    <button class="btn btn-google btn-login text-uppercase fw-bold" type="submit">
    <i class="fab fa-google me-2"></i> Sign In with Google
</button>
</div>
    <div class="d-grid">
    <button class="btn btn-facebook btn-login text-uppercase fw-bold" type="submit">
    <i class="fab fa-facebook-f me-2"></i> Sign In with Facebook
</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
@Stop



