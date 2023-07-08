@extends('layout.default')
@section('content')
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Home</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
  </style>

<!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>
<body>
    
<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
  <div class="carousel-inner">
  <div class="carousel-item active">
  <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
  <img src="https://easycourses.in/filescab/courses/learndigitalmarketing.jpeg"class="bd-placeholder-img" width="100%" height="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
  <div class="container">
  <div class="carousel-caption text-start">
  <!-- <h1>Example headline.</h1>
  <p>Some representative placeholder content for the first slide of the carousel.</p>
  <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> -->
</div>
</div>
</div>
  <div class="carousel-item">
  <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
  <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/Why-Digital-Marketing-is-Critical-to-Your-Organization-in-2017.jpg" width="100%" height="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
  <div class="container">
  <div class="carousel-caption">
  <!-- <h1>Another example headline.</h1>
  <p>Some representative placeholder content for the second slide of the carousel.</p>
  <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
</div>
</div>
</div>
  <div class="carousel-item">
  <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
  <img src="https://thumbs.dreamstime.com/b/business-analyst-word-cloud-concept-88378867.jpg" width="100%" height="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
  <div class="container">
  <div class="carousel-caption text-end">
  <!-- <h1>One more for good measure.</h1>
  <p>Some representative placeholder content for the third slide of this carousel.</p>
  <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p> -->
</div>
</div>
</div>
</div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>
<!-- Marketing messaging and featurettes
  ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

<!-- Three columns of text below the carousel -->
  <div class="row">
  <div class="col-lg-4">
  <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
  <img src="https://thumbs.dreamstime.com/b/teamwork-team-together-collaboration-business-communication-outd-outdoors-concept-48568990.jpg"class="bd-placeholder-img" width="100%" height="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
  <!-- <h2 class="fw-normal">Heading</h2>
  <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
  <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p -->
</div> <!-- /.col-lg-4 -->
  <div class="col-lg-4">
  <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
  <img src="https://www.reliablesoft.net/wp-content/uploads/2021/10/digital-marketing-team.webp"class="bd-placeholder-img" width="100%" height="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
  <!-- <h2 class="fw-normal">Heading</h2>
  <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
  <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p> -->
</div> <!-- /.col-lg-4 -->
  <div class="col-lg-4">
  <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
  <img src="https://cdn2.hubspot.net/hubfs/53/digital-marketing-tips.jpg" width="100%" height="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
  <!-- <h2 class="fw-normal">Heading</h2>
  <p>And lastly this, the third column of representative placeholder content.</p>
  <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p> -->
</div> <!-- /.col-lg-4 -->
</div> <!-- /.row -->

<!-- START THE FEATURETTES -->
  <hr class="featurette-divider">
  <div class="row featurette">
  <div class="col-md-7">
  <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
  <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
</div>
  <div class="col-md-5">
  <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
  <img src="https://www.openaccessgovernment.org/wp-content/uploads/2018/09/dreamstime_s_115214581.jpg"class="bd-placeholder-img" width="100%" height="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
</div>
</div>
  <hr class="featurette-divider">
  <div class="row featurette">
  <div class="col-md-7 order-md-2">
  <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
  <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
</div>
  <div class="col-md-5 order-md-1">
  <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
  <img src="https://imageio.forbes.com/specials-images/dam/imageserve/1071915572/960x0.jpg?format=jpg&width=960" width="100%" height="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
</div>
</div>
  <hr class="featurette-divider">
  <div class="row featurette">
  <div class="col-md-7">
  <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
  <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
</div>
  <div class="col-md-5">
  <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
  <img src="https://cdn.pixabay.com/photo/2017/01/14/10/56/people-1979261__480.jpg"class="bd-placeholder-img" width="100%" height="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
</div>
</div>

  <hr class="featurette-divider">

<!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

      
  </body>
</html>
@stop