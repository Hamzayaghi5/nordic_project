<!--
    Author: W3layouts
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>

        <script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135194491-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-135194491-1');
</script>
    <title>Nordic Carpentary</title>

    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="google-site-verification" content="KSudqFZMmIsi7pi69zySEMhMMuNyETO2luQQ42Hblfo" />
    <meta name="keywords" content=" Inwardly
 Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--// Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style6.css') }}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.css') }}">



    <link href="{{ asset('css/blog.css') }}" rel='stylesheet' type='text/css' />


    <link href="{{ asset('css/main.css') }}" rel='stylesheet' type='text/css' />
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!--web font-->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i" rel="stylesheet">
    <!--//web font-->

</head>

<body>
    <!-- banner -->
    <section class="banner-inner" id="home">
        <!-- header -->
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html">
                <img id="logo_image" src="{{ asset('/images/NRDIC-4-1-1.gif') }} ">
                </a>
                    <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       
                        <ul id="main_nav" class="navbar-nav ml-lg-auto text-center">
                            <li class="nav-item cool">
                                <a class="nav-link" href="/">Home
                            <span class="sr-only">(current)</span>
                        </a>
                            </li>
                            <li class="nav-item cool">
                                <a class="nav-link" href="/about">About</a>
                            </li>
                            <li class="nav-item cool">
                                <a class="nav-link" href="/services">Services</a>
                            </li>

                              <li class="nav-item cool">
                                <a class="nav-link" href="/galleries">Galleries</a>
                            </li>
{{--                             <li class="nav-item cool">
                                <a class="nav-link" href="/gallery">Gallery</a>
                            </li> --}}
{{--                             <li class="nav-item dropdown cool">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Blog
                        </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="blog.html">Blog Page</a>
                                    <a class="dropdown-item" href="single.html">Single page</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="404.html">404</a>
                                </div>
                            </li> --}}

                            <li class="nav-item cool">
                                <a id="contact" class="nav-link" href="/contact">Contact</a>
                            </li>

                              <li class="nav-item cool">
                                <a class="nav-link" href="/commercial">Commercial/Industrial</a>
                            </li>
                               <!-- /search -->
                                <li class="search">
                                    <div class="cd-main-header">
                                        <ul class="cd-header">
                                            <li>
                                                <a class="cd-search-trigger" href="#">
                                                    <span></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="cd-search" class="cd-search">
                                        <form action="#" method="post">
                                            <input name="Search" type="search" placeholder="Click enter after typing...">
                                        </form>
                                    </div>
                                </li>

                        <!-- /search -->

                        </ul>
                      

                    </div>
                </nav>
            </div>
        </header>
        <!-- //header -->
        <!-- banner -->
        <div class="bs-slider-overlay-inner">
        </div>
    </section>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li style="text-transform: capitalize;" class="breadcrumb-item active">{{Request::segment(1)}}</li>
    </ol>

<div class="content">
    @yield('content')
</div>


     <footer class="footer-main-w3layouts py-md-5 py-4">
        <div class="container-fluid px-lg-5 px-3">
            <div class="row">
                <div class="col-lg-5 footer-grid-w3ls">
                    <h3 class="mb-4">About Us</h3>
                    <p>Lorem ipsum dolor sit amet, Cras blandit nibh ut pretium elementum. Duis bibendum convallis nunc a dictum. Quisque ac ipsum porta, ultrices metus sit amet, cursus nisl. Duis aliquet varius sem sit amet tempus. Curabitur vitae dui bibendum. </p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h3 class="text-capitalize mb-3">Connect With Social</h3>
                            <p id="twitter1"><span class="fab fa-twitter"></span> twitter/@my_website</p>
                            <p id="instagram"><span class="fab fa-instagram"></span> instagram/@my_website</p>
                            <p id="youtube"><span class="fab fa-youtube mb-5"></span> youtube/@my_website</p>
                            <a id="facebook" href="#" class="facebook-footer mr-2"><span class="fab mr-1 fa-facebook-f"></span> Facebook</a>
                            <a id="twitter"  href="#" class="twitter-footer"><span style="width: 4%" class="fab mr-1 fa-twitter"></span> Twitter</a>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mb-4">Address</h3>
                            <address class="mb-0">
                            <p id="address" class="mb-2"><i class="fas fa-map-marker-alt"></i> 8088H 5th Street Parking, King <br>Block, New York City.</p>
                            <p id="phone"><i class="fas mr-1 fa-phone"></i> +12 445 8453 8088</p>
                            <p><i class="fas mr-1 fa-fax"></i> +11 997 2040 9436 </p>
                            <p id="email"><i class="far mr-1 fa-envelope-open"></i> <a href="mailto:info@example.com">info@example.com</a></p>
                        </address>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 footer-grid-w3ls">
                    <h3 class="mb-4">Instagram</h3>
                    <div class="blog-grids row mb-3">
                        <div class="col-md-4 blog-grid-left">
                            <a href="single.html">
                            <img src="{{ asset('images/banner1.jpg') }} " class="img-fluid" alt="">
                        </a>
                        </div>
                        <div class="col-md-8 blog-grid-right">
                            <h5>
                                <a href="single.html">Lorem ipsum dolor sit amet . Maecenas male non felis convallis nunc </a>
                            </h5>
                            <div class="sub-meta">
                                <span>
                                <i class="far fa-clock"></i> 10 June, 2018</span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-grids row mb-3">
                        <div class="col-md-4 blog-grid-left">
                            <a href="single.html">
                            <img src="{{ asset('images/banner2.jpg') }}" class="img-fluid" alt="">
                        </a>
                        </div>
                        <div class="col-md-8 blog-grid-right">
                            <h5>
                                <a href="single.html">Lorem ipsum dolor sit amet . Maecenas male non felis convallis nunc </a>
                            </h5>
                            <div class="sub-meta">
                                <span>
                                <i class="far fa-clock"></i> 22 June, 2018</span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-grids row mb-3">
                        <div class="col-md-4 blog-grid-left">
                            <a href="single.html">
                            <img src="{{ asset('images/banner3.jpg') }}" class="img-fluid" alt="">
                        </a>
                        </div>
                        <div class="col-md-8 blog-grid-right">
                            <h5>
                                <a href="single.html">Lorem ipsum dolor sit amet . Maecenas male non felis convallis nunc </a>
                            </h5>
                            <div class="sub-meta">
                                <span>
                                <i class="far fa-clock"></i> 23 June, 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 footer-grid-w3ls">
                    <h3 class="mb-4">We Offer</h3>
                    <ul>
                        <li><i class="fas mr-1 fa-long-arrow-alt-right"></i> Blandit nibh ut pretium elementum.</li>
                        <li><i class="fas mr-1 fa-long-arrow-alt-right"></i> Convallis nunc a dictum ipsum.</li>
                        <li><i class="fas mr-1 fa-long-arrow-alt-right"></i> Ultrices metus sit amet, cursus.</li>
                    </ul>
                    <h3 class="mt-4 mb-4">Newsletter</h3>
                    <p class="mb-3">Subscribe to Our Newsletter to get News, Amazing Offers &amp; More</p>
                    <form action="#" method="post">
                        <input type="email" name="Email" placeholder="Enter your email..." required="">
                        <button class="btn1"><i class="far fa-paper-plane"></i></button>
                        <div class="clearfix"> </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright-w3layouts mt-md-5 mt-4 text-center">
            <p>© 2018 Inwardly . All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p>
        </div>
    </footer>
    <!-- //footer -->

    <!--model-forms-->
    <!--/Login-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-left mb-4">Login Now</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label class="mb-2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                            <p class="text-left pb-4">
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter2"> Don't have an account?</a>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Login-->
    <!--/Register-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-left mb-4">Register Now</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label>First name</label>

                                <input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control" id="validationDefault02" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="password1" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" id="password2" placeholder="" required="">
                            </div>

                            <button type="submit" class="btn btn-primary submit mb-4">Register</button>
                            <p class="text-left pb-4">
                                <a href="#">By clicking Register, I agree to your terms</a>
                            </p>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Register-->

    <!--//model-form-->
    <!-- js -->

    <script src="{{ asset('js/search.js') }}"></script>
    <!-- /dropdown nav -->
    <script>
        $(document).ready(function() {
            // $(".dropdown").hover(
            //     function() {
            //         $('.dropdown-menu', this).stop(true, true).slideDown("fast");
            //         $(this).toggleClass('open');
            //     },
            //     function() {
            //         $('.dropdown-menu', this).stop(true, true).slideUp("fast");
            //         $(this).toggleClass('open');
            //     }
            // );

                                  social();

                    var href = window.location.href;
                    $('nav a').each(function ($this, i) {
                        console.log(href.indexOf($(this).attr('href')))
                        if (href.indexOf($(this).attr('href')) >5) {
                            $(this).addClass('active');
                        } else {
                            $(this).removeClass('active');
                        }
                    });
                });

    </script>
    <!-- //dropdown nav -->
    <!-- Banner Responsiveslides -->
    <script src="{{ asset('js/responsiveslides.min.js') }}"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function() {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- // Banner Responsiveslides -->
    <!-- stats -->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countup.js') }}"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->
    <!-- carousel -->
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    900: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 4,
                        nav: true,
                        loop: false,
                        margin: 0
                    }
                }
            })
        })
    </script>



    <!-- //carousel -->
    <!-- Smooth-Scrolling-JavaScript -->
    <script src="{{ asset('js/easing.js') }}"></script>
    <script src="{{ asset('js/move-top.js') }}"></script>
{{--     <script>
        jQuery(document).ready(function($) {
            $(".scroll, .navbar li a, .footer li a").click(function(event) {
                if ($(".scroll, .navbar li a, .footer li a").length) {
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            }
            });
        });
    </script>
    <!-- //Smooth --}}-Scrolling-JavaScript -->


    <!-- //Smooth-Scrolling-JavaScript -->

    <!-- /js -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>




<script type="text/javascript" src="{{ asset('js/contact.js') }}"></script>

    <!-- //js -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js.map"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js.map"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->

</body>

</html>