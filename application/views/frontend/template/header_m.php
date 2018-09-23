<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
</style>

</head>

<body class="cart-v1 hidden-sn white-skin animated">

    <!--Navigation-->
    <header>        
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
                                echo '<a class="dropdown-item waves-effect waves-light" href="'.base_url('edit_trip').'"><i class="fa fa-automobile" aria-hidden="true"></i><strong class="px-2">Your trip</strong></a>
                                <a class="dropdown-item waves-effect waves-light" href="'.base_url('edit_profile').'"><i class="fa fa-user-circle-o" aria-hidden="true"></i><strong class="px-2">My account</strong></a>
                                <a class="dropdown-item waves-effect waves-light" href="'.base_url('logout').'"><i class="fa fa-window-close" aria-hidden="true"></i><strong class="px-2">Log out </strong></a>                                
                            </div>';
                            }       
                            else{
                                echo '<a class="dropdown-item waves-effect waves-light" href="'.base_url('login').'"><i class="fa fa-upload" aria-hidden="true"></i><strong class="px-2">Login</strong></a>
                                <a class="dropdown-item waves-effect waves-light" href="'.base_url('register').'"><i class="fa fa-registered" aria-hidden="true"></i><strong class="px-2">Register</strong></a>
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
    <!-- /.Navigation -->
