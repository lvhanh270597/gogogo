<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>E-Commerce - MDBootstrap</title>

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


<body class="product-v2 hidden-sn white-skin animated">

    <!--Navigation-->
    <header>
        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav custom-scrollbar" style="transform: translateX(-100%);">
            <!-- Logo -->
            <li>
                <div class="logo-wrapper waves-light waves-effect waves-light">
                    <a href="#">
                        <img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" class="img-fluid flex-center">
                    </a>
                </div>
            </li>
            <!--/. Logo -->
            <!--Social-->
            <li>
                <ul class="social">
                    <li>
                        <a class="fb-ic">
                            <i class="fa fa-facebook"> </i>
                        </a>
                    </li>
                    <li>
                        <a class="pin-ic">
                            <i class="fa fa-pinterest"> </i>
                        </a>
                    </li>
                    <li>
                        <a class="gplus-ic">
                            <i class="fa fa-google-plus"> </i>
                        </a>
                    </li>
                    <li>
                        <a class="tw-ic">
                            <i class="fa fa-twitter"> </i>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/Social-->
            <!--Search Form-->
            <li>
                <form class="search-form" role="search">
                    <div class="form-group md-form mt-0 pt-1 waves-light waves-effect waves-light">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
            </li>
            <!--/.Search Form-->
            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="fa fa-shopping-cart"></i> Cart page
                            <i class="fa fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a href="../cart/cart-v1.html" class="waves-effect">Cart V.1</a>
                                </li>
                                <li>
                                    <a href="../cart/cart-v2.html" class="waves-effect">Cart V.2</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="fa fa-hand-pointer-o"></i> Category page
                            <i class="fa fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a href="../category/category-v1.html" class="waves-effect">Category V.1</a>
                                </li>
                                <li>
                                    <a href="../category/category-v2.html" class="waves-effect">Category V.2</a>
                                </li>
                                <li>
                                    <a href="../category/category-v3.html" class="waves-effect">Category V.3</a>
                                </li>
                                <li>
                                    <a href="../category/category-v4.html" class="waves-effect">Category V.4</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="fa fa-bookmark-o"></i> Homepage
                            <i class="fa fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a href="../homepage/homepage-v1.html" class="waves-effect">Homepage V.1</a>
                                </li>
                                <li>
                                    <a href="../homepage/homepage-v2.html" class="waves-effect">Homepage V.2</a>
                                </li>
                                <li>
                                    <a href="../homepage/homepage-v3.html" class="waves-effect">Homepage V.3</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="fa fa-camera-retro"></i> Product page
                            <i class="fa fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a href="../product/product-v1.html" class="waves-effect">Product V.1</a>
                                </li>
                                <li>
                                    <a href="../product/product-v2.html" class="waves-effect">Product V.2</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="../contact/contact.html" class="collapsible-header waves-effect">
                            <i class="fa fa-envelope"></i> Contact</a>
                    </li>

                </ul>
            </li>
            <!--/. Side navigation links -->
            <div class="sidenav-bg mask-strong"></div>
        </ul>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar white">
            <div class="container">
                <!-- SideNav slide-out button -->
                <div class="float-left mr-2">
                    <a href="#" data-activates="slide-out" class="button-collapse">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <a class="navbar-brand font-weight-bold" href="#">
                    <strong>SHOP</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link dark-grey-text font-weight-bold waves-effect waves-light" href="#" data-toggle="modal" data-target="#cart-modal-ex">
                                <span class="badge danger-color">4</span>
                                <i class="fa fa-shopping-cart blue-text" aria-hidden="true"></i>
                                <span class="clearfix d-none d-sm-inline-block">Cart</span>
                            </a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="#">
                                <i class="fa fa-gear blue-text"></i> Settings</a>
                        </li>
                        <li class="nav-item dropdown ml-3">
                            <a class="nav-link dropdown-toggle waves-effect waves-light dark-grey-text font-weight-bold" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user blue-text"></i> Profile </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                                <a class="dropdown-item waves-effect waves-light" href="#">My account</a>
                                <a class="dropdown-item waves-effect waves-light" href="#">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /.Navbar -->

    </header>
    <!-- /.Navigation -->

    <!-- Main Container -->
    <div class="container mt-5 pt-3">

        <!-- Section: product details -->
        <section id="productDetails" class="pb-5">

            <!--News card-->
            <div class="card mt-5 hoverable">
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="row mx-2">
                            <!--Carousel Wrapper-->
                            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails mb-5 pb-4" data-ride="carousel">

                                <!--Slides-->
                                <div class="carousel-inner text-center text-md-left" role="listbox">
                                    <div class="carousel-item carousel-item-next carousel-item-left">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" alt="First slide" class="img-fluid">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg" alt="Second slide" class="img-fluid">
                                    </div>
                                    <div class="carousel-item active carousel-item-left">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/20.jpg" alt="Third slide" class="img-fluid">
                                    </div>
                                </div>
                                <!--/.Slides-->

                                <!--Thumbnails-->
                                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <!--/.Thumbnails-->

                            </div>
                            <!--/.Carousel Wrapper-->
                        </div>

                        <!--Grid row-->
                        <div class="row mb-4">

                            <div class="col-md-12">

                                <div id="mdb-lightbox-ui"><!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true" style="">

    <!-- Background of PhotoSwipe. 
             It's a separate element, as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container" style="transform: translate3d(0px, 0px, 0px);">
            <div class="pswp__item" style="display: block; transform: translate3d(-1193px, 0px, 0px);"><div class="pswp__zoom-wrap" style="transform: translate3d(92px, 44px, 0px) scale(1);"><img class="pswp__img" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" style="opacity: 1; width: 880px; height: 587px;"></div></div>
            <div class="pswp__item" style="transform: translate3d(0px, 0px, 0px);"><div class="pswp__zoom-wrap" style="transform: translate3d(217.484px, 256.328px, 0px) scale(0.170393);"><img class="pswp__img pswp__img--placeholder" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg" style="width: 880px; height: 587px; display: none;"><img class="pswp__img" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg" style="display: block; width: 880px; height: 587px;"></div></div>
            <div class="pswp__item" style="display: block; transform: translate3d(1193px, 0px, 0px);"><div class="pswp__zoom-wrap" style="transform: translate3d(92px, 44px, 0px) scale(1);"><img class="pswp__img" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/20.jpg" style="opacity: 1; width: 880px; height: 587px;"></div></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--fit pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter">2 / 3</div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <!--<button class="pswp__button pswp__button--share" title="Share"></button>-->

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div> 
                </div>
              -->

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div></div>

                                <div class="mdb-lightbox no-margin" data-pswp-uid="1">

                                    <!--Grid column-->
                                    <figure class="col-md-4">
                                        <!--Large image-->
                                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" data-size="1600x1067">
                                            <!-- Thumbnail-->
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" class="img-fluid">
                                        </a>
                                    </figure>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <figure class="col-md-4">
                                        <!--Large image-->
                                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg" data-size="1600x1067">
                                            <!-- Thumbnail-->
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg" class="img-fluid">
                                        </a>
                                    </figure>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <figure class="col-md-4">
                                        <!--Large image-->
                                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/20.jpg" data-size="1600x1067">
                                            <!-- Thumbnail-->
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/20.jpg" class="img-fluid">
                                        </a>
                                    </figure>
                                    <!--Grid column-->
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->
                    </div>
                    <div class="col-lg-5 mr-3 text-center text-md-left">
                        <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
                            <strong>iPad PRO </strong>
                        </h2>
                        <span class="badge badge-danger product mb-4 ml-xl-0 ml-4">bestseller</span>
                        
                        
                        <span class="badge badge-success product mb-4 ml-2">SALE</span>
                        <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
                            <span class="red-text font-weight-bold">
                                <strong>$1449</strong>
                            </span>
                            <span class="grey-text">
                                <small>
                                    <s>$1789</s>
                                </small>
                            </span>
                        </h3>

                        <p class="ml-xl-0 ml-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nesciunt atque nemo neque ut officiis
                            nostrum incidunt maiores, magni optio et sunt suscipit iusto nisi totam quis, nobis mollitia
                            necessitatibus.
                        </p>
                        <p class="ml-xl-0 ml-4">
                            <strong>Storage: </strong>64GB</p>
                        <p class="ml-xl-0 ml-4">
                            <strong>Size: </strong>9.6-inch</p>
                        <p class="ml-xl-0 ml-4">
                            <strong>Resolution: </strong>2048 x 1536</p>
                        <p class="ml-xl-0 ml-4">
                            <strong>Availability: </strong>In stock</p>

                        <!-- Add to Cart -->
                        <section class="color">
                            <div class="mt-5">
                                <p class="grey-text">Choose your color</p>
                                <div class="row text-center text-md-left">

                                    <div class="col-md-4 col-12 ">
                                        <!--Radio group-->
                                        <div class="form-group">
                                            <input name="group100" type="radio" id="radio100" checked="checked">
                                            <label for="radio100" class="dark-grey-text">White</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <!--Radio group-->
                                        <div class="form-group">
                                            <input name="group100" type="radio" id="radio101">
                                            <label for="radio101" class="dark-grey-text">Silver</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <!--Radio group-->
                                        <div class="form-group">
                                            <input name="group100" type="radio" id="radio102">
                                            <label for="radio102" class="dark-grey-text">Gold</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 mb-4">
                                    <div class="col-md-12 text-center text-md-left text-md-right">
                                        <button class="btn btn-primary btn-rounded waves-effect waves-light">
                                            <i class="fa fa-cart-plus mr-2" aria-hidden="true"></i> Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- /.Add to Cart -->
                    </div>
                </div>
            </div>
            <!--News card-->

        </section>
        <!-- Section: product details -->

        <h4 class="h4-responsive dark-grey-text font-weight-bold mb-5 text-center">
            <strong>Compare iPad models</strong>
        </h4>

        <!--Table-->
        <div class="card mb-5">
            <div class="card-body">

                <table class="table table-responsive-md">
                    <thead>
                        <tr>
                            <th>
                                <strong>Feature</strong>
                            </th>
                            <th>
                                <strong>12.9-inch iPad Pro</strong>
                            </th>
                            <th>
                                <strong>10.5-inch iPad Pro</strong>
                            </th>
                            <th>
                                <strong>iPad mini 4</strong>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Storage</th>
                            <td>64GB</td>
                            <td>64GB</td>
                            <td>32GB</td>
                        </tr>
                        <tr>
                            <th scope="row">Weight</th>
                            <td>1.49 pounds (677 grams)</td>
                            <td>1.03 pounds (469 grams)</td>
                            <td>0.65 pound (298.8 grams)</td>
                        </tr>
                        <tr>
                            <th scope="row">Width</th>
                            <td>8.68 inches (220.6 mm)</td>
                            <td>6.8 inches (174.1 mm)</td>
                            <td>5.3 inches (134.8 mm)</td>
                        </tr>
                        <tr>
                            <th scope="row">Depth</th>
                            <td>0.27 inch (6.9 mm)</td>
                            <td>0.24 inch (6.1 mm)</td>
                            <td>0.24 inch (6.1 mm)</td>
                        </tr>
                        <tr>
                            <th scope="row">Camera</th>
                            <td>12-megapixel</td>
                            <td>12-megapixel</td>
                            <td>8-megapixel</td>
                        </tr>
                        <tr>
                            <th scope="row">Video</th>
                            <td>4K HD video recording </td>
                            <td>4K HD video recording </td>
                            <td>1080p HD video recording</td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
        <!--Table-->

        <!-- Product Reviews -->
        <section id="reviews" class="pb-5 mt-4">

            <hr>
            <h4 class="h4-responsive dark-grey-text font-weight-bold my-5 text-center">
                <strong>Product Reviews</strong>
            </h4>
            <hr class="mb-5">

            <!--Main wrapper-->
            <div class="comments-list text-center text-md-left">

                <!--First row-->
                <div class="row mb-5">
                    <!--Image column-->
                    <div class="col-sm-2 col-12 mb-3">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img (8).jpg" alt="sample image" class="avatar rounded-circle z-depth-1-half">
                    </div>
                    <!--/.Image column-->

                    <!--Content column-->
                    <div class="col-sm-10 col-12">
                        <a>
                            <h5 class="user-name font-weight-bold">John Doe</h5>
                        </a>
                        <!-- Rating -->
                        <ul class="rating">
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                        </ul>
                        <div class="card-data">
                            <ul class="list-unstyled mb-1">
                                <li class="comment-date font-small grey-text">
                                    <i class="fa fa-clock-o"></i> 05/10/2015</li>
                            </ul>
                        </div>
                        <p class="dark-grey-text article">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    </div>
                    <!--/.Content column-->
                </div>
                <!--/.First row-->

                <!--Second row-->
                <div class="row mb-5">
                    <!--Image column-->
                    <div class="col-sm-2 col-12 mb-3">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg" alt="sample image" class="avatar rounded-circle z-depth-1-half">
                    </div>
                    <!--/.Image column-->

                    <!--Content column-->
                    <div class="col-sm-10 col-12">
                        <a>
                            <h5 class="user-name font-weight-bold">Lily Brown</h5>
                        </a>
                        <!-- Rating -->
                        <ul class="rating">
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                        </ul>
                        <div class="card-data">
                            <ul class="list-unstyled mb-1">
                                <li class="comment-date font-small grey-text">
                                    <i class="fa fa-clock-o"></i> 05/10/2015</li>
                            </ul>
                        </div>
                        <p class="dark-grey-text article">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    </div>
                    <!--/.Content column-->
                </div>
                <!--/.Second row-->

                <!--Third row-->
                <div class="row mb-5">
                    <!--Image column-->
                    <div class="col-sm-2 col-12 mb-3">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img (28).jpg" alt="sample image" class="avatar rounded-circle z-depth-1-half">
                    </div>
                    <!--/.Image column-->
                    <!--Content column-->
                    <div class="col-sm-10 col-12">
                        <a>
                            <h5 class="user-name font-weight-bold">Martha Smith</h5>
                        </a>
                        <!-- Rating -->
                        <ul class="rating">
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                            <li>
                                <i class="fa fa-star blue-text"></i>
                            </li>
                        </ul>
                        <div class="card-data">
                            <ul class="list-unstyled mb-1">
                                <li class="comment-date font-small grey-text">
                                    <i class="fa fa-clock-o"></i> 05/10/2015</li>
                            </ul>
                        </div>
                        <p class="dark-grey-text article">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    </div>
                    <!--/.Content column-->
                </div>
                <!--/.Third row-->
            </div>
            <!--/.Main wrapper-->
        </section>
        <!-- /.Product Reviews -->

        <!--Section: Products v.5-->
        <section id="products" class="pb-5 mt-4">

            <hr>
            <h4 class="h4-responsive dark-grey-text font-weight-bold my-5 text-center">
                <strong>Related Products</strong>
            </h4>
            <hr class="mb-5">

            <p class="text-center w-responsive mx-auto mb-5 dark-grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate
                esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

            <!--Carousel Wrapper-->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                <!--Controls-->
                <div class="controls-top">
                    <a class="btn-floating primary-color waves-effect waves-light" href="#multi-item-example" data-slide="prev">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                    <a class="btn-floating primary-color waves-effect waves-light" href="#multi-item-example" data-slide="next">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
                <!--Controls-->

                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li class="primary-color" data-target="#multi-item-example" data-slide-to="0"></li>
                    <li class="primary-color active" data-target="#multi-item-example" data-slide-to="1"></li>
                    <li class="primary-color" data-target="#multi-item-example" data-slide-to="2"></li>
                </ol>
                <!--Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    <div class="carousel-item active carousel-item-left">

                        <div class="col-md-4 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/14.jpg" class="img-fluid" alt="">
                                    <a>
                                        <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="" class="dark-grey-text">Sony TV-675i</a>
                                        </strong>
                                    </h5>
                                    <span class="badge badge-danger mb-2">bestseller</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star grey-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                            <span class="float-right">

                                                <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">
                                    <a>
                                        <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="" class="dark-grey-text">Samsung 786i</a>
                                        </strong>
                                    </h5>
                                    <span class="badge badge-info mb-2">new</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star grey-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                            <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg" class="img-fluid" alt="">
                                    <a>
                                        <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="" class="dark-grey-text">Canon 675-D</a>
                                        </strong>
                                    </h5>
                                    <span class="badge badge-danger mb-2">bestseller</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                            <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>

                    </div>
                    <!--First slide-->

                    <!--Second slide-->
                    <div class="carousel-item carousel-item-next carousel-item-left">

                        <div class="col-md-4 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/8.jpg" class="img-fluid" alt="">
                                    <a>
                                        <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="" class="dark-grey-text">Samsung V54</a>
                                        </strong>
                                    </h5>
                                    <span class="badge grey mb-2">best rated</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                            <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/5.jpg" class="img-fluid" alt="">
                                    <a>
                                        <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="" class="dark-grey-text">Dell V-964i</a>
                                        </strong>
                                    </h5>
                                    <span class="badge badge-info mb-2">new</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                            <span class="float-right">

                                                <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" class="img-fluid" alt="">
                                    <a>
                                        <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="" class="dark-grey-text">iPad PRO</a>
                                        </strong>
                                    </h5>
                                    <span class="badge badge-danger mb-2">bestseller</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star grey-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                            <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>

                    </div>
                    <!--Second slide-->

                    <!--Third slide-->
                    <div class="carousel-item">

                        <div class="col-md-4 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid" alt="">
                                    <a>
                                        <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="" class="dark-grey-text">Asus CT-567</a>
                                        </strong>
                                    </h5>
                                    <span class="badge grey mb-2">best rated</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                            <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/7.jpg" class="img-fluid" alt="">
                                    <a>
                                        <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="" class="dark-grey-text">Dell 786i</a>
                                        </strong>
                                    </h5>
                                    <span class="badge badge-info mb-2">new</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star grey-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                            <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/10.jpg" class="img-fluid" alt="">
                                    <a>
                                        <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="" class="dark-grey-text">Headphones</a>
                                        </strong>
                                    </h5>
                                    <span class="badge badge-info mb-2">new</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                            <span class="float-right">

                                                <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>

                    </div>
                    <!--Third slide-->

                </div>
                <!--Slides-->

            </div>
            <!--Carousel Wrapper-->

        </section>
        <!--Section: Products v.5-->
    
    </div>
    <!-- /.Main Container -->
    

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
                        <a class="fb-ic ml-0 px-2">
                            <i class="fa fa-facebook white-text"> </i>
                        </a>
                        <!--Twitter-->
                        <a class="tw-ic px-2">
                            <i class="fa fa-twitter white-text"> </i>
                        </a>
                        <!--Google +-->
                        <a class="gplus-ic px-2">
                            <i class="fa fa-google-plus white-text"> </i>
                        </a>
                        <!--Linkedin-->
                        <a class="li-ic px-2">
                            <i class="fa fa-linkedin white-text"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic px-2">
                            <i class="fa fa-instagram white-text"> </i>
                        </a>
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
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Company name</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit.</p>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Products</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">MDBootstrap</a>
                    </p>
                    <p>
                        <a href="#!">MDWordPress</a>
                    </p>
                    <p>
                        <a href="#!">BrandFlow</a>
                    </p>
                    <p>
                        <a href="#!">Bootstrap Angular</a>
                    </p>
                </div>
                <!--/.Second column-->

                <!--Third column-->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Useful links</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Your Account</a>
                    </p>
                    <p>
                        <a href="#!">Become an Affiliate</a>
                    </p>
                    <p>
                        <a href="#!">Shipping Rates</a>
                    </p>
                    <p>
                        <a href="#!">Help</a>
                    </p>
                </div>
                <!--/.Third column-->

                <!--Fourth column-->
                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Contact</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i> info@example.com</p>
                    <p>
                        <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                        <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
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


    <!-- Cart Modal -->
    <div class="modal fade cart-modal" id="cart-modal-ex" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">

                    <h4 class="modal-title font-weight-bold dark-grey-text" id="myModalLabel">Your cart</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product name</th>
                                <th>Price</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Product 1</td>
                                <td>100$</td>
                                <td>
                                    <a>
                                        <i class="fa fa-remove"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Product 2</td>
                                <td>100$</td>
                                <td>
                                    <a>
                                        <i class="fa fa-remove"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Product 3</td>
                                <td>100$</td>
                                <td>
                                    <a>
                                        <i class="fa fa-remove"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Product 4</td>
                                <td>100$</td>
                                <td>
                                    <a>
                                        <i class="fa fa-remove"></i>
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <button class="btn btn-primary btn-rounded btn-sm waves-effect waves-light">Checkout</button>

                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-grey btn-rounded btn-sm waves-effect waves-light" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

    <!-- /.Cart Modal -->


    <!-- SCRIPTS -->

<?php 
    $fat = "";
    $n = substr_count($this->uri->uri_string(), '/'); 
    for ($i=1; $i<=$n; $i++){
        $fat .= "../";
    }
?>


    <!-- JQuery -->
    <script type="text/javascript" src=<?php echo '"'.$fat.'assets/beauty/type2/js/jquery-3.3.1.min.js"'; ?>></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src=<?php echo '"'.$fat.'assets/beauty/type2/js/popper.min.js"'; ?>></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src=<?php echo '"'.$fat.'assets/beauty/type2/js/bootstrap.min.js"'; ?>></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src=<?php echo '"'.$fat.'assets/beauty/type2/js/mdb.min.js"'; ?>></script>

    <script type="text/javascript">
        /* WOW.js init */
        new WOW().init();

        // Tooltips Initialization
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <script>
        // Material Select Initialization
        $(document).ready(function () {
            $('.mdb-select').material_select();
        });
    </script>
    <script>
        // MDB Lightbox Init
        $(function () {
            $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
        });
    </script>
    <script>
            // SideNav Initialization
            $(".button-collapse").sideNav();
    </script><div class="drag-target" style="left: 0px; touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>


</body></html>