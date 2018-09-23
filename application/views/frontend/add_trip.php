
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tạo chuyến đi</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/beauty/profile/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="assets/beauty/profile/css/mdb.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo 'assets/images/icon/icon.jpg'; ?>" />
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

        <!-- Sidebar navigation -->
      
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
                                echo '
                                <a class="dropdown-item waves-effect waves-light" href="'.base_url('edit_trip').'"><i class="fa fa-automobile" aria-hidden="true"></i><strong class="px-2">Your trip</strong></a>
                                <a class="dropdown-item waves-effect waves-light" href="'.base_url('edit_profile').'"><i class="fa fa-user-circle-o" aria-hidden="true"></i><strong class="px-2">My account</strong></a>
                                <a class="dropdown-item waves-effect waves-light" href="'.base_url('logout').'"><i class="fa fa-window-close" aria-hidden="true"></i><strong class="px-2">Log out </strong></a>         
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
                                <h5 class="mb-0 font-weight-bold">Easy Here</h5>
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
                                <h5 class="mb-0 font-weight-bold">Tạo chuyến đi mới</h5>
                            </div>
                            <!--/Card image-->

                            <!-- Card content -->
                            <div class="card-body text-center">
                                <!-- Edit Form -->
                                <form method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?php echo $success; ?>
                                        </div>
                                    </div>
                                    <!--First row-->
                                    <div class="row">
                                        <!--First column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                              <select class="browser-default custom-select mb-4" name="_from">
                                                <option value="" disabled selected>Bạn đi từ đâu?</option>
                                                <option value="ĐH Nông Lâm">ĐH Nông Lâm</option>
                                                <option value="ĐH Công Nghệ Thông Tin">ĐH Công Nghệ Thông Tin</option>
                                                <option value="ĐH Quốc Tế" >ĐH Quốc Tế</option>
                                                <option value="ĐH Khoa Học Tự Nhiên">ĐH Khoa Học Tự Nhiên</option>
                                                <option value="ĐH Bách Khoa">ĐH Bách Khoa</option>
                                                <option value="ĐH Kinh Tế - Luật">ĐH Kinh Tế - Luật</option>
                                                <option value="ĐH Nhân Văn">ĐH Nhân Văn</option>
                                                <option value="KTX A">KTX A</option>
                                                <option value="KTX B">KTX B</option>
                                              </select>
                                            </div>
                                        </div>
                                        <!--Second column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                              <select class="browser-default custom-select mb-4" name="_to">
                                                <option value="" disabled selected>Bạn đến đâu?</option>
                                                <option value="ĐH Nông Lâm">ĐH Nông Lâm</option>
                                                <option value="ĐH Công Nghệ Thông Tin">ĐH Công Nghệ Thông Tin</option>
                                                <option value="ĐH Quốc Tế" >ĐH Quốc Tế</option>
                                                <option value="ĐH Khoa Học Tự Nhiên">ĐH Khoa Học Tự Nhiên</option>
                                                <option value="ĐH Bách Khoa">ĐH Bách Khoa</option>
                                                <option value="ĐH Kinh Tế - Luật">ĐH Kinh Tế - Luật</option>
                                                <option value="ĐH Nhân Văn">ĐH Nhân Văn</option>
                                                <option value="KTX A">KTX A</option>
                                                <option value="KTX B">KTX B</option>
                                              </select>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <!--/.First row-->
                                    <!--First row-->
                                    <div class="row">
                                        <!--First column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="form1" class="form-control validate" value="<?php echo $this->session->userdata('username'); ?>" name="id_boss" disabled>
                                                <label for="form2" data-error="wrong" data-success="right">Bạn là</label>
                                            </div>
                                        </div>
                                        <!--Second row-->                                    
                                        <!--First column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="form76" class="form-control validate" name="timestart">
                                                <label for="form76">Đi lúc mấy giờ?</label>
                                            </div>
                                        </div>    
                                    </div>                                                                                                           
                                    <!--Third row-->
                                    <div class="row">
                                        <!--First column-->
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <textarea type="text" id="form78" class="md-textarea form-control" rows="3" name="note">
                                                </textarea>
                                                <label for="form78">Ghi chú (Nói rằng bạn sẽ đợi 5-10 phút chẳng hạn)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.Third row-->
                                    <!-- Fourth row -->
                                    <div class="row">
                                        <div class="col-md-12 text-center my-4">
                                            <input type="submit" value="Tạo Mới" class="btn btn-info btn-rounded">
                                        </div>
                                    </div>                                    
                                    <!-- /.Fourth row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                                <?php echo $error; ?>
                                            </div>                                            
                                        </div>
                                    </div>
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