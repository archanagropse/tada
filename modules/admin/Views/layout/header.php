<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/logo/favicon.png">

        <title>Admin Panel Tada</title>

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ionicons.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/simple-line-icons.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.mCustomScrollbar.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap4.min.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fullcalendar.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/responsive.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css"> 

    </head>

    <div class="wrapper">

        <header class="main-header">

            <div class="container_header">

                <div class="logo">

                    <a href="#">
                        <strong class="logo_icon">
                            <img src="<?php echo base_url(); ?>assets/images/logo/logo.png" alt="">
                        </strong>
                        <span class="logo-default">
                            <img src="<?php echo base_url(); ?>assets/images/logo/logo_white.png" alt="">
                        </span>
                    </a>

                </div>

                <div class="right_detail">

                    <div class="row row d-flex align-items-center min-h pos-md-r">

                        <div class="col-xl-5 col-3 search_col ">

                            <div class="top_function d-md-flex align-items-md-center">

                                <div class="icon_menu">

                                    <a href="#" class="menu-toggler sidebar-toggler">

                                        <i class="fa fa-bars"></i>

                                    </a>

                                </div>

                                <div class="search">

                                    <a id="toggle_res_search" data-toggle="collapse" data-target="#search_form" class="res-only-view collapsed" href="javascript:void(0);"

                                       aria-expanded="false">

                                        <i class="fa fa-search"></i>

                                    </a>

                                </div>

                            </div>

                        </div>

                        <div class="col-xl-7 col-9 d-flex justify-content-end">

                            <div class="right_bar_top d-flex align-items-center">

                                <div class="fullscreen-btn">

                                    <a href="javascript:;">

                                        <i class="fa fa-arrows"></i>

                                    </a>

                                </div>

                                <div class="dropdown dropdown-user">

                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true">

                                        <img class="img-circle pro_pic" src="<?= base_url() . 'assets/images/admin/' . $admin_info['image']; ?> " alt="">

                                        <span class="username"><?= $admin_info['username']; ?> </span>

                                        <i class="fa fa-angle-down"></i>

                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-default">

                                        <li>

                                            <a href="<?php echo base_url('dashboard'); ?>">

                                                <i class="fa fa-home"></i> Dashboard </a>

                                        </li>

                                        <li>

                                            <a href="<?php echo base_url('Admin/logout'); ?>">

                                                <i class="fa fa-sign-out"></i> Log Out </a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </header>