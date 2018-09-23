<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register</title>
    <!-- Font Awesome -->

<?php 
    $fat = "";
    $n = substr_count($this->uri->uri_string(), '/'); 
    for ($i=1; $i<=$n; $i++){
        $fat .= "../";
    }
?>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Bootstrap core CSS -->
<link href=<?php echo '"'.$fat.'assets/beauty/type2/css/bootstrap.min.css"'; ?> rel="stylesheet">

<!-- Material Design Bootstrap -->
<link href=<?php echo '"'.$fat.'assets/beauty/type2/css/mdb.min.css"'?> rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $fat.'assets/images/icon/icon.jpg'; ?>" />

    <style>
        .intro-2 {
            background: url("https://mdbootstrap.com/img/Photos/Others/img%20(42).jpg")no-repeat center center;
            background-size: cover;
        }

        .top-nav-collapse {
            background-color: #9da4b1 !important;
        }

        .navbar:not(.top-nav-collapse) {
            background: transparent !important;
        }

        @media (max-width: 768px) {
            .navbar:not(.top-nav-collapse) {
                background: #9da4b1 !important;
            }
        }

        .rgba-gradient {
            background: -webkit-linear-gradient(45deg, rgba(83, 125, 210, 0.4), rgba(178, 30, 123, 0.4) 100%);
            background: -webkit-gradient(linear, 45deg, from(rgba(29, 236, 197, 0.4)), to(rgba(96, 0, 136, 0.4)));
            background: linear-gradient(to 45deg, rgba(29, 236, 197, 0.4), rgba(96, 0, 136, 0.4) 100%);
        }

        .card {
            background-color: rgba(229, 228, 255, 0.2);
        }

        body {
            background-color: #fff;
        }

        h6 {
            line-height: 1.7;
        }

        html,
        body,
        header,
        .view {
          height: 100%;
        }

        @media (max-width: 740px) {
          html,
          body,
          header,
          .view {
            height: 1040px;
          }
        }
        @media (min-width: 800px) and (max-width: 850px) {
          html,
          body,
          header,
          .view {
            height: 600px;
          }
        }

        footer.page-footer {
            background-color: #9da4b1;
        }
    </style>
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>

<body>

    <!-- Main Navigation -->
    <header>

        <!--Navbar-->
         <nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar white">
            <div class="container">
                <!-- SideNav slide-out button -->
                <div class="float-left mr-2">
                    <a href="#" data-activates="slide-out" class="button-collapse">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <a class="navbar-brand font-weight-bold" href="<?= base_url(); ?>">
                    <strong>EZHERE</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto">                                  
                        <li class="nav-item dropdown ml-3">
                            <a class="nav-link dropdown-toggle waves-effect waves-light dark-grey-text font-weight-bold" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <i class="fa fa-user blue-text"></i> Profile </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">                                
                                <a class="dropdown-item waves-effect waves-light" href="<?= base_url('login'); ?>">
                                    Login
                                </a>
                                <a class="dropdown-item waves-effect waves-light" href="<?= base_url('register');?>">
                                    Register
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Intro Section -->
        <section class="view intro-2">
            <div class="mask rgba-gradient">
                <div class="container h-100 d-flex justify-content-center align-items-center">
                    <div class="d-flex align-items-center content-height">
                        <div class="row flex-center pt-5 mt-3">
                            <div class="col-md-6 text-center text-md-left mb-5">
                                <div class="white-text">
                                    <h1 class="h1-responsive font-weight-bold wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInLeft; animation-delay: 0.3s;">Sign up right now! </h1>
                                    <hr class="hr-light wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInLeft; animation-delay: 0.3s;">
                                    <h6 class="wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInLeft; animation-delay: 0.3s;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga
                                        nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea
                                        dolor molestiae, quisquam iste, maiores. Nulla.</h6>
                                    <br>
                                    <a class="btn btn-outline-white btn-rounded wow fadeInLeft waves-effect waves-light animated" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInLeft; animation-delay: 0.3s;">Learn more</a>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-5 offset-xl-1">
                                <!-- Form -->
                                <div class="card wow fadeInRight animated" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInRight; animation-delay: 0.3s;">
                                    <div class="card-body">
                                        <!-- Header -->
                                        <div class="text-center">
                                            <h3 class="white-text"><i class="fa fa-user white-text"></i> Register:</h3>
                                            <hr class="hr-light">
                                        </div>

                                        <!-- Body -->
                                        <form method="post" id="form_register" >                                              
                                            <div class="md-form">
                                                <i class="fa fa-user prefix white-text"></i>
                                                <input id="form3" class="form-control" type="text" name="full_name">
                                                <label for="form3" class="white-text">Full name</label>
                                            </div>
                                            <div class="md-form">
                                                <i class="fa fa-user prefix white-text"></i>
                                                <input id="form3" class="form-control" type="text" name="phone_num">
                                                <label for="form3" class="white-text">Phone number</label>
                                            </div>
                                            <div class="md-form">
                                                <i class="fa fa-facebook prefix white-text"></i>
                                                <input id="form3" class="form-control" type="text" name="facebook">
                                                <label for="form3" class="white-text">Facebook</label>
                                            </div>
                                            <div class="md-form">
                                                <i class="fa fa-user prefix white-text"></i>
                                                <input id="form3" class="form-control" type="text" name="username">
                                                <label for="form3" class="white-text">Username</label>
                                            </div>

                                            <div class="md-form">
                                                <i class="fa fa-lock prefix white-text"></i>
                                                <input id="form4" class="form-control" type="password" name="password">
                                                <label for="form4" class="white-text">Password</label>
                                            </div>
               

                                        </form>

                                        <div class="text-center mt-4">
                                            <?php echo $error; ?>
                                            <button class="btn btn-light-blue btn-rounded waves-effect waves-light" type="submit" form="form_register">Sign up</button>
                                            <hr class="hr-light mb-3 mt-4">

                                            <div class="inline-ul text-center d-flex justify-content-center">
                                                <a class="p-2 m-2 fa-lg tw-ic"><i class="fa fa-twitter white-text"></i></a>
                                                <a class="p-2 m-2 fa-lg li-ic"><i class="fa fa-linkedin white-text"> </i></a>
                                                <a class="p-2 m-2 fa-lg ins-ic"><i class="fa fa-instagram white-text"> </i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </header>
    <!-- Main Navigation -->

<!--Footer-->
    <footer class="page-footer text-center text-md-left stylish-color-dark pt-0">

        <div style="background-color: #4285f4;">
            <div class="container">
                <!--Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!--Facebook-->
                        <a class="fb-ic ml-0 px-2"><i class="fa fa-facebook white-text"> </i></a>
                        <!--Twitter-->
                        <a class="tw-ic px-2"><i class="fa fa-twitter white-text"> </i></a>
                        <!--Google +-->
                        <a class="gplus-ic px-2"><i class="fa fa-google-plus white-text"> </i></a>
                        <!--Linkedin-->
                        <a class="li-ic px-2"><i class="fa fa-linkedin white-text"> </i></a>
                        <!--Instagram-->
                        <a class="ins-ic px-2"><i class="fa fa-instagram white-text"> </i></a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </div>
        </div>

        <!--Footer Links-->
        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row mt-3">

                <!--First column-->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <h6 class="text-uppercase font-weight-bold"><strong>Company name</strong></h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit.</p>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold"><strong>Products</strong></h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><a href="#!">MDBootstrap</a></p>
                    <p><a href="#!">MDWordPress</a></p>
                    <p><a href="#!">BrandFlow</a></p>
                    <p><a href="#!">Bootstrap Angular</a></p>
                </div>
                <!--/.Second column-->

                <!--Third column-->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold"><strong>Useful links</strong></h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><a href="#!">Your Account</a></p>
                    <p><a href="#!">Become an Affiliate</a></p>
                    <p><a href="#!">Shipping Rates</a></p>
                    <p><a href="#!">Help</a></p>
                </div>
                <!--/.Third column-->

                <!--Fourth column-->
                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h6 class="text-uppercase font-weight-bold"><strong>Contact</strong></h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p><i class="fa fa-envelope mr-3"></i> info@example.com</p>
                    <p><i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p><i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!-- Copyright-->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                © 2018 Copyright: <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> MDBootstrap.com </a>
            </div>
        </div>
        <!--/.Copyright -->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <?php 
        $fat = "";
        $n = substr_count($this->uri->uri_string(), '/'); 
        for ($i=1; $i<=$n; $i++){
            $fat .= "../";
        }
    ?>
    <script type="text/javascript" src=<?php echo '"'.$fat.'assets/beauty/type2/js/jquery-3.3.1.min.js"'; ?>></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src=<?php echo '"'.$fat.'assets/beauty/type2/js/popper.min.js"'; ?>></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src=<?php echo '"'.$fat.'assets/beauty/type2/js/bootstrap.min.js"';?>></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src=<?php echo '"'.$fat.'assets/beauty/type2/js/mdb.min.js"'; ?>></script>
    