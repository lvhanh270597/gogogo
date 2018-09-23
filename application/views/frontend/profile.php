
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edit profile</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/beauty/profile/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="assets/beauty/profile/css/mdb.min.css">

    <!-- Your custom styles (optional) -->
    <style>
        .card.card-cascade .view.gradient-card-header {
            padding: 1.1rem 1rem;
        }

        .card.card-cascade .view {
            box-shadow: 0 5px 12px 0 rgba(0, 0, 0, 0.2), 0 2px 8px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>

<body class="fixed-sn white-skin">

    <!--Main Navigation-->
    <header>       
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar white">
            <div class="container">
                <!-- SideNav slide-out button -->
                <div class="float-left mr-2">
                    <a href="#" data-activates="slide-out" class="button-collapse">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <a class="navbar-brand font-weight-bold" href="<?= base_url();?>">
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
                            <?php                            
                            if ($this->session->userdata('user_logged')){
                                echo '<a class="dropdown-item waves-effect waves-light" href="'.base_url('edit_profile').'">My account</a>
                                <a class="dropdown-item waves-effect waves-light" href="'.base_url('logout').'">Log out</a>
                            </div>';
                            }       
                            else{
                                echo '<a class="dropdown-item waves-effect waves-light" href="'.base_url('login').'">Login</a>
                                <a class="dropdown-item waves-effect waves-light" href="'.base_url('register').'">Register</a>
                                </div>';
                            }                                                     
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /.Navbar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main>
        <div class="container-fluid">

            <!-- Section: Edit Account -->
            <section class="section">
                <!-- First row -->
                <div class="row">
                    <!-- First column -->
                    <div class="col-lg-4 mb-4">

                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Card image-->
                            <div class="view gradient-card-header mdb-color lighten-3">
                                <h5 class="mb-0 font-weight-bold">Edit Photo</h5>
                            </div>
                            <!--/Card image-->

                            <!-- Card content -->
                            <div class="card-body text-center">
                                <img src="https://scontent.fsgn5-7.fna.fbcdn.net/v/t39.1997-6/s168x128/851582_488524031261042_690174590_n.png?_nc_cat=1&oh=e0db0fafa1fd62d1f358046ad1a77d0e&oe=5C1A14E9" alt="User Photo" class="z-depth-1 mb-3 mx-auto" />

                                <p class="text-muted"><small>Profile photo will be changed automatically</small></p>
                                <div class="row flex-center">
                                    <button class="btn btn-info btn-rounded btn-sm">Upload New Photo</button><br>
                                    <button class="btn btn-danger btn-rounded btn-sm">Delete</button>
                                </div>
                            </div>
                            <!-- /.Card content -->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!-- /.First column -->
                    <!-- Second column -->
                    <div class="col-lg-8 mb-4">

                        <!--Card-->
                        <div class="card card-cascade narrower">

                            <!--Card image-->
                            <div class="view gradient-card-header mdb-color lighten-3">
                                <h5 class="mb-0 font-weight-bold">Edit Account</h5>
                            </div>
                            <!--/Card image-->

                            <!-- Card content -->
                            <div class="card-body text-center">
                                <!-- Edit Form -->
                                <form method="post">
                                    <!--First row-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert alert-primary"> 
                                                <strong>                                        
                                                    <?php echo $message; ?>
                                                </strong>
                                            </div>  
                                        </div>
                                    </div>                    
                                    <div class="row">
                                        <!--First column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="form1" class="form-control validate" value="Company, inc" disabled>
                                                <label for="form1" data-error="wrong" data-success="right">Company</label>
                                            </div>
                                        </div>
                                        <!--Second column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="form1" class="form-control validate" value="<?php echo $this->session->userdata('username'); ?>" disabled>
                                                <label for="form2" data-error="wrong" data-success="right">Username</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.First row-->
                                    <!--First row-->
                                    <div class="row">
                                        <!--First column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="form81" class="form-control validate" value="<?php echo $full_name; ?>">
                                                <label for="form81" data-error="wrong" data-success="right">Full name</label>
                                            </div>
                                        </div>
                                        <!--Second column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="form1" class="form-control validate" value="<?php echo $balance; ?>" disabled>
                                                <label for="form2" data-error="wrong" data-success="right">Balance</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.First row-->
                                    <!--Second row-->
                                    <div class="row">
                                        <!--First column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="form76" class="form-control validate" value="<?php echo $phone_num; ?>" name="phone_num">
                                                <label for="form76">Phone number</label>
                                            </div>
                                        </div>
                                        <!--Second column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="form77" class="form-control validate" value="<?php echo $facebook; ?>" name="facebook">
                                                <label for="form77" data-error="wrong" data-success="right">Facebook Address</label>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <!--/.Second row-->
                                    <!--/.Third row-->
                                    <!-- Fourth row -->
                                    <div class="row">
                                        <div class="col-md-12 text-center my-4">                        
                                            <input type="text" name="username" value="<?php echo $username; ?>" hidden>                    
                                            <input type="submit" value="Update Account" class="btn btn-info btn-rounded">
                                        </div>
                                    </div>
                                    <!-- /.Fourth row -->
                                </form>
                                <!-- Edit Form -->
                            </div>
                            <!-- /.Card content -->

                        </div>
                        <!--/.Card-->
                    </div>
                    <!-- /.Second column -->
                </div>
                <!-- /.First row -->
            </section>
            <!-- /.Section: Edit Account -->

        </div>
    </main>
    <!--Main layout-->


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="assets/beauty/profile/js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="assets/beauty/profile/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="assets/beauty/profile/js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="assets/beauty/profile/js/mdb.min.js"></script>
    <!--Custom scripts-->
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();

        var container = document.querySelector('.custom-scrollbar');
        Ps.initialize(container, {
            wheelSpeed: 2,
            wheelPropagation: true,
            minScrollbarLength: 20
        });
    </script>
</body>

</html>