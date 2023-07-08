@extends('layout.default')
@section('content')
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">
<header>
    <title>INDEX</title>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
  <div class="carousel-inner">
  <div class="carousel-item active" style="background-image: url('https://images.pexels.com/photos/936137/pexels-photo-936137.jpeg?cs=srgb&dl=pexels-nappy-936137.jpg&fm=jpg')">
  <div class="carousel-caption">
<!-- <h5>First slide label</h5>
  <p>Some representative placeholder content for the first slide.</p> -->
</div>
</div>
  <div class="carousel-item" style="background-image: url('https://c1.wallpaperflare.com/preview/599/694/534/year-new-year-s-day-business-idea-planning.jpg')">
        <div class="carousel-caption">
          <!-- <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p> -->
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://thumbs.dreamstime.com/b/business-development-woman-using-smartphone-business-development-woman-using-her-smartphone-couch-128991705.jpg')">
        <div class="carousel-caption">
          <!-- <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p> -->
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</header>

<!-- Page Content -->
<section class="py-5">
  <div class="container">
    <!-- <h1 class="fw-light">Full Page Image Slider</h1>
    <p class="lead">The background images for the slider are set directly in the HTML using inline CSS. The images
      in this snippet are from <a href="https://unsplash.com">Unsplash</a>, taken by <a href="https://unsplash.com/@joannakosinska">Joanna Kosinska</a>!</p> -->
  </div>
</section>
<style type="text/css">
  .carousel-item {
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
<div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://cdn.utaustinbootcamps.com/wp-content/uploads/sites/119/2020/11/DM_blog_post_image_03.jpg" alt="..."></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Business Name or Tagline</h1>
                    <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
                    <a class="btn btn-primary" href="CalltoAction ">Call to Action</a>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body">
                    <img src="https://cdn2.hubspot.net/hubfs/53/digital-marketing-tips.jpg" width="100%" height="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">

                    <!-- <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p></div> -->
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Card One</h2>
                            <img src="https://cdn.utaustinbootcamps.com/wp-content/uploads/sites/119/2020/11/DM_blog_post_image_03.jpg" width="100%" height="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <!-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p> -->
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="https://www.infosys.com/">More Info</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Card Two</h2>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaEXne97TUIzUkvkz237Z-KeCXmF7wMtF5Bw&usqp=CAU" width="100%" height="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <!-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p> -->
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="https://www.infosys.com/">More Info</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Card Three</h2>
                            <!-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p> -->
                            <img src="https://ca-times.brightspotcdn.com/dims4/default/e57111f/2147483647/strip/true/crop/3600x2307+0+0/resize/1200x769!/quality/80/?url=https%3A%2F%2Fcalifornia-times-brightspot.s3.amazonaws.com%2Ff0%2Ff2%2F8ee33b004dc2a9e8f3fdb8146a78%2Fsd-photos-freelance-contract-470022-sd-fi-powerdigital-profile-gasx001.JPG" width="100%" height="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="https://www.infosys.com/">More Info</a></div>
                    </div>
                </div>
            </div>
        </div>
@stop