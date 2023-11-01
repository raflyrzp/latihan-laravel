<!-- /*
* Template Name: Append
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/feather/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

    <title>WeeBoo</title>
</head>

<body class="scrollspy home" id="home">


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <div class="container">


        <nav class="site-nav">
            <div class="logo">
                <a href="index.html" class="text-white">Wee<span class="text-primary">Boo.</span></a>
            </div>
            <div class="row align-items-center">


                <div class="col-12 col-sm-12 col-lg-12 site-navigation text-center">
                    <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#cosplay">Cosplay</a></li>
                        <li><a href="#studios">Studios</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>

                    <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right menu-absolute">
                        @if (Auth::check())
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="images/maki.jpg" width="40" height="40" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="return confirm('Are you sure to logout?')">Log Out</a>
                                </div>
                            </li>
                        @else
                            <li class="cta-button"><a href="{{ route('login') }}">Login</a></li>
                        @endif
                    </ul>

                    <a href="#" class="burger light ml-auto site-menu-toggle js-menu-toggle d-block d-lg-none"
                        data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>

                </div>

            </div>
        </nav> <!-- END nav -->

    </div> <!-- END container -->


    <div class="hero-slant overlay" data-stellar-background-ratio="0.5"
        style="background-image: url('images/hand-sword.jpg')">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 intro text-center">
                    <h1 class="text-white font-weight-bold mb-4" data-aos="fade-up" data-aos-delay="0">Wee<span
                            class="text-primary">Boo.</span></h1>
                    <p class="text-white mb-4" data-aos="fade-up" data-aos-delay="100">Get ready to binge! Dive into
                        epic anime adventures, hot releases, and fan faves. Don't miss out, fam – the anime party starts
                        here!</p>
                    <p data-aos="fade-up" data-aos-delay="200"><a href="#about" class="btn btn-primary">Get Started</a>
                    </p>


                </div>


            </div>


        </div>

        <div class="slant" style="background-image: url('images/slant.svg');"></div>
    </div>

    <div class="site-section scrollspy cosplay" id="cosplay">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-4">
                    <h2 class="section-title mb-4">Express yourself with some sick cosplay vibes!</h2>
                    <p>Level up your vibes with cosplay drip! Dive into epic character transformations, flaunt your
                        style, and express your passion through jaw-dropping costumes. Embrace the art of embodying
                        beloved characters, channeling your inner hero or villain, and living the anime dream with
                        authentic cosplay swag. Unleash your creativity and slay the cosplay game!</p>
                </div>
                <div class="col-lg-7 pl-lg-5 position-relative ">


                    <div class="section-stack">
                        <div class="image-stack">
                            <div class="image-stack__item image-stack__item--top">
                                <img src="images/nanami.jpg" alt="">
                            </div>
                            <div class="image-stack__item image-stack__item--bottom">
                                <img src="images/nanami2.jpg" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light scrollspy studios" id="studios">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h4 class="font-weight-bold">Studios</h4>
                </div>
            </div>

            <div class="owl-logos owl-carousel">
                <div class="item">
                    <img src="images/logo-mappa.png" alt="Image" class="img-fluid">
                </div>
                <div class="item">
                    <img src="images/logo-wit.png" alt="Image" class="img-fluid">
                </div>
                <div class="item">
                    <img src="images/logo-google.png" alt="Image" class="img-fluid">
                </div>
                <div class="item">
                    <img src="images/logo-paypal.png" alt="Image" class="img-fluid">
                </div>
                <div class="item">
                    <img src="images/logo-adobe.png" alt="Image" class="img-fluid">
                </div>
                <div class="item">
                    <img src="images/logo-google.png" alt="Image" class="img-fluid">
                </div>


            </div>


        </div>

    </div>


    <div class="site-section scrollspy about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="images/vagabond2.jpg" alt="image" class="img-fluid rounded">
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <h3 class="mb-4 font-weight-bold">Who We Are</h3>
                    <p>At WeeBoo, we're your portal to the enchanting realm of anime. Far from the ordinary, we're a
                        community of avid anime fans. Our site, a hub for all things anime, brings enthusiasts together
                        for spirited discussions and immersive experiences in this captivating world.</p>

                    <p>
                        Step into the anime universe with us at WeeBoo and let your passion for Japanese animation
                        flourish. Welcome to the heart of anime fandom, where every pixel pulsates with its vibrant
                        essence.</p>
                    <ul class="list-check list-unstyled primary">
                        <li>Accurate Recommendations</li>
                        <li>Latest News</li>
                        <li>Exclusive Content</li>
                        <li>In-Depth Knowledge</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="section-grey bg-light scrollspy" id="contact">
        <div class="container bg-white p-5">

            <div class="block">
                <div class="row justify-content-center">


                    <div class="col-md-12 col-lg-12 pb-4" data-aos="fade-up" data-aos-delay="200">


                        <div class="row">
                            <div class="col-lg-4">
                                <div class="service-2 no-shadow link horizontal d-flex active" data-aos="fade-left"
                                    data-aos-delay="0">
                                    <div class="service-icon color-1 mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                        </svg>
                                    </div> <!-- /.icon -->
                                    <div class="service-contents">
                                        <p>Jl. Inajadulu, Jakarta Timur, DKI Jakarta</p>
                                    </div> <!-- /.service-contents-->
                                </div> <!-- /.service -->
                            </div>

                            <div class="col-lg-4">
                                <div class="service-2 no-shadow link horizontal d-flex active" data-aos="fade-left"
                                    data-aos-delay="0">
                                    <div class="service-icon color-1 mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                                        </svg>
                                    </div> <!-- /.icon -->
                                    <div class="service-contents">
                                        <p>rafflyrabbany@gmail.com</p>
                                    </div> <!-- /.service-contents-->
                                </div> <!-- /.service -->
                            </div>

                            <div class="col-lg-4">
                                <div class="service-2 no-shadow link horizontal d-flex active" data-aos="fade-left"
                                    data-aos-delay="0">
                                    <div class="service-icon color-1 mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                        </svg>
                                    </div> <!-- /.icon -->
                                    <div class="service-contents">
                                        <p>+62 815 1798 3828</p>
                                    </div> <!-- /.service-contents-->
                                </div> <!-- /.service -->
                            </div>
                        </div>

                        <form>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-black" for="fname">First name</label>
                                        <input type="text" class="form-control" id="fname">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-black" for="lname">Last name</label>
                                        <input type="text" class="form-control" id="lname">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="email">Email address</label>
                                <input type="email" class="form-control" id="email">
                            </div>

                            <div class="form-group">
                                <label class="text-black" for="message">Message</label>
                                <textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary-hover-outline">Send Message</button>
                        </form>

                    </div>

                </div>

            </div>

        </div>


    </div>


    <div class="site-section overlay site-cover-2" style="background-image: url('images/hand-sword.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    @if (Auth::check())
                        <h2 class="text-white mb-4">"Bagai kucing yang kalem, tapi selalu memikat hati kalian semua"
                        </h2>
                    @else
                        <h2 class="text-white mb-4">Login banh :)</h2>
                        <p class="mb-0"><a href="{{ route('login') }}" rel="noopener"
                                class="btn btn-primary">Login</a>
                    @endif
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-footer">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>About</h3>
                        <p>At WeeBoo, we're your portal to the enchanting realm of anime. Far from the ordinary, we're a
                            community of avid anime fans. Our site, a hub for all things anime, brings enthusiasts
                            together
                            for spirited discussions and immersive experiences in this captivating world.</p>
                    </div>
                    <div class="widget">
                        <h3>Connect with us</h3>
                        <ul class="social list-unstyled">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="https://twitter.com/rabbzp_"><span class="icon-twitter"></span></a>
                            </li>
                            <li><a href="https://instagram.com/rabbzp_"><span class="icon-instagram"></span></a></li>
                            <li><a href="https://github.com/raflyrzp"><span class="icon-github"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="widget">
                                <h3>Navigations</h3>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4">
                            <div class="widget">
                                <ul class="links list-unstyled">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Work</a></li>
                                    <li><a href="#">Process</a></li>
                                    <li><a href="#">About Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4">
                            <div class="widget">
                                <ul class="links list-unstyled">
                                    <li><a href="#">Press</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4">
                            <div class="widget">
                                <ul class="links list-unstyled">
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Process</a></li>
                                    <li><a href="#">About Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center text-center copyright">
                <div class="col-md-8">
                    <p>Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>. All Rights Reserved. &mdash; Created by <a
                            href="https://instagram.com/rabbzp_" target="_blank">Rafly Rabbany Zalfa Pateda</a>
                        <!-- License information: https://untree.co/license/ -->
                        </br>
                    <p> Template from <a href="https://untree.co">Untree.co</a> </p>
                </div>
            </div>
        </div>
    </div>


    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/imagesloaded.pkgd.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/custom.js"></script>

    <script>
        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
            scrollOffset: 50
        });
    </script>

</body>

</html>
