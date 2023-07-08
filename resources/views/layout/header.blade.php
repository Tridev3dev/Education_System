        {{-- <section data-bs-version="5.1" class="menu cid-s48OLK6784" once="menu" id="menu1-h">

            <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
                <div class="container"> 
                    <div class="navbar-brand">
                        <span class="navbar-logo">
                            <a href="home">
                                <img src="assets1/images/mbr-121x175.png" alt="" style="height: 3.8rem;">
                            </a>
                        </span>
                        <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7"
                                href="/">School Management System</a></span>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                            @auth
                                <li class="nav-item"><a class="nav-link link text-primary display-4"
                                        href="{{ Route('home') }}">Home</a>
                                </li>
                                <li class="nav-item"><a class="nav-link link text-primary display-4"
                                        href="{{ Route('profile') }}">Profile</a>
                                </li>
                                <li class="nav-item"><a class="nav-link link text-primary display-4"
                                        href="{{ Route('timetable') }}">Time table</a>
                                <li class="nav-item"><a class="nav-link link text-primary display-4"
                                        href="{{ Route('contact') }}">Contact
                                        Us</a></li>
                                <li class="nav-item"><a class="nav-link link text-primary display-4" href="#">About
                                        Us</a>
                                </li>
                                <li class="nav-item"><a class="nav-link link btn-danger display-4"
                                        href="{{ Route('logout') }}">Logout</a>
                                @else
                                <li class="nav-item"><a class="nav-link link text-primary display-4"
                                        href="{{ Route('home') }}">Home</a>
                                </li>
                                <li class="nav-item"><a class="nav-link link text-primary display-4" href="#contact">Contact
                                        Us</a></li>
                                <li class="nav-item"><a class="nav-link link text-primary display-4" href="#about">About
                                        Us</a>
                                </li>
                                <li class="nav-item"><a class="nav-link link text-primary display-4"
                                        href="{{ Route('login') }}">Login</a>
                                </li>
                                <li class="nav-item"><a class="nav-link link text-primary display-4"
                                        href="{{ Route('register') }}">Register</a></li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>

        </section> --}}


        <!-- ======= Header ======= -->
        <header id="header">
            <div class="container d-flex align-items-center">

                <h1 class="logo me-auto"><a href="{{ Route('home') }}">School Management System</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                <nav id="navbar" class="navbar">
                    @auth
                        <ul>
                            <li><a class="nav-link scrollto active" href="{{ Route('home') }}">Home</a></li>
                            <li><a class="nav-link scrollto" href="#about">About</a></li>
                            <li><a class="nav-link scrollto" href="#team">Faculty</a></li>
                            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                            <li class="dropdown"><a href="#"><span>Student</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="{{ Route('profile') }}">Profile</a></li>
                                    <li><a href="{{ Route('timetable') }}">TimeTable</a></li>
                                    {{-- <li><a href="#">Drop Down 3</a></li>
                                    <li><a href="#">Drop Down 4</a></li> --}}
                                </ul>
                            </li>
                            <li><a class="getstarted scrollto btn btn-danger" href="{{ Route('logout') }}">Logout</a></li>
                        </ul>
                    @else
                        <ul>
                            <li><a class="nav-link scrollto active" href="{{ Route('home') }}">Home</a></li>
                            <li><a class="nav-link scrollto" href="#about">About</a></li>
                            <li><a class="nav-link scrollto" href="#team">Faculty</a></li>
                            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                            <li><a class="getstarted scrollto" href="{{ Route('login') }}">Login</a></li>
                            <li><a class="getstarted scrollto" href="{{ Route('register') }}">Register</a></li>
                        </ul>
                    @endauth
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

            </div>
        </header><!-- End Header -->
