<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URl::asset('css/nav.css')}}">
</head>
<body>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="home">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Timetable</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Subject</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Branch</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Viewusers</a>
          </li>
        </ul>
        <!-- <form class="d-flex" role="search"> -->
          <!-- <input class="form-control me-2" type="search" placeholder="login" aria-label="Search"> -->
          <button class="btn btn-outline-success" type="submit"><a href="logout">logout</a></button>
        </form>
         <!-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Register"> -->
          <!-- <button class="btn btn-outline-success" type="submit"><a href="register">Register</a></button> -->
        </form>
      </div>
    </div>
  </nav>
</header>
</body>
</html>

