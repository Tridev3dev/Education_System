@extends('layout.default')
@section('content')
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
    <style type="text/css">
body {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
}

.card-img-left {
  width: 45%;
  /* Link to your background image using in the property below! */
  background: scroll center url('https://source.unsplash.com/WEQbe2jBg40/414x512');
  background-size: cover;
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
  background-color: #3b5998;
}
</style>
<body>
    <div class="container">
    <div class="row">
    <div class="col-lg-10 col-xl-9 mx-auto">
    <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
    <div class="card-img-left d-none d-md-flex">
            
<!-- Background image for card set in CSS! -->
</div>
    <div class="card-body p-4 p-sm-5">
    <h5 class="card-title text-center mb-5 fw-light fs-5">Register Form</h5>
    <title>REGISTER</title>
    <form action="register-submit" method="post">
    <div class="form-floating mb-3">
    <input type="text" class="form-control" name="name" id="floatingInputUsername"placeholder="name" required autofocus>
    <label for="floatingInputUsername">Name</label>
</div>
    <div class="form-floating mb-3">
    <input type="email" class="form-control" name="email" id="floatingInputEmail" placeholder="name@example.com">
    <label for="floatingInputEmail">Email address</label>
</div>
<hr>
    <div class="form-floating mb-3">
    <input type="mobile" class="form-control" name="Phone" id="floatingPassword" placeholder="Phone">
    <label for="floatingPassword">Phone</label>
</div>
<hr>
    <div class="form-floating mb-3">
    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Password</label>
</div>
    <hr>
    <div class="form-floating mb-3">
    <select class="form-control" name="Role">
        <option selected hidden>-Choose-</option>
        <option value="student">Faculty</option>
        <option value="faculty">Student</option>
    </select>
    <label for="floatingPassword">Role</label>
</div>
<hr>
    <div class="form-floating mb-3">
    <select class="form-control" name="Status">
        <option selected hidden>-Choose-</option>
        <option value="student">Inactive</option>
        <option value="faculty">Active</option>
    </select>
    <label for="floatingPassword">Status</label>
</div>

    @csrf
    <div class="d-grid mb-2">
    <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Register</button>
</div>
    <a class="d-block text-center mt-2 small" href="#">Have an account? Sign In</a>
    <hr class="my-4">
    <div class="d-grid mb-2">
    <button class="btn btn-lg btn-google btn-login fw-bold text-uppercase" type="submit">
    <i class="fab fa-google me-2"></i> Sign up with Google
</button>
</div>
    <div class="d-grid">
    <button class="btn btn-lg btn-facebook btn-login fw-bold text-uppercase" type="submit">
    <i class="fab fa-facebook-f me-2"></i> Sign up with Facebook
</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
<p class="float-end"><a href="#">Back to top</a></p>
@stop
