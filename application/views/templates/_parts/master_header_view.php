<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!doctype html>
<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Supermarket Online System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="ProteusThemes">

        <!--  Google Fonts  -->
        <!-- <link href='http://fonts.googleapis.com/css?family=Pacifico|Open+Sans:400,700,400italic,700italic&amp;subset=latin,latin-ext,greek' rel='stylesheet' type='text/css'> -->

        <!-- Twitter Bootstrap -->
        <link href="<?php echo base_url()?>assets/stylesheets/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/stylesheets/responsive.css" rel="stylesheet">
        <!-- Slider Revolution -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/rs-plugin/css/settings.css" type="text/css"/>
        <!-- jQuery UI -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css" type="text/css"/>
        <!-- PrettyPhoto -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/prettyphoto/css/prettyPhoto.css" type="text/css"/>
        <!-- main styles -->

        <link href="<?php echo base_url()?>assets/stylesheets/main.css" rel="stylesheet">

        <link href="<?php echo base_url()?>assets/js/rate/jRating.jquery.css" rel="stylesheet">


        <script>
        var SITE_URL = "<?php echo site_url();?>";
        </script>
        <!-- Modernizr -->
        <script src="<?php echo base_url()?>assets/js/modernizr.custom.56918.js"></script>    

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>assets/images/apple-touch/144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>assets/images/apple-touch/114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>assets/images/apple-touch/72.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>assets/images/apple-touch/57.png">
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/apple-touch/57.png">
    </head>


    <body class="">

        <div class="master-wrapper">

            <!--  ==========  -->
            <!--  = Header =  -->
            <!--  ==========  -->
            <header id="header">
                <div class="container">
                    <div class="row">

                        <!--  ==========  -->
                        <!--  = Logo =  -->
                        <!--  ==========  -->
                        <div class="span7">
                            <a class="brand" href="<?php echo site_url();?>">
                                <img src="<?php echo base_url()?>assets/images/logo.png" alt="Webmarket Logo" width="48" height="48" /> 
                                <span class="pacifico">Supermarket</span> 
                                <span class="tagline">Really Cool SuperMarket</span> 
                            </a>
                        </div>

                        <!--  ==========  -->
                        <!--  = Social Icons =  -->
                        <!--  ==========  -->
                        <div class="span5">
                            <div class="topmost-line">

                            </div>
                            <div class="top-right" id="loginSection">
                                <?php require_once('application/views/ajax/getLogin.php'); ?>
                            </div>
                        </div> <!-- /social icons -->
                    </div>
                </div>
            </header>

            <!--  ==========  -->
            <!--  = Main Menu / navbar =  -->
            <!--  ==========  -->
            <div class="navbar navbar-static-top" id="stickyNavbar">
                <div class="navbar-inner">
                    <div class="container">
                        <div class="row">
                            <div class="span9">
                                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <!--  ==========  -->
                                <!--  = Menu =  -->
                                <!--  ==========  -->
                                <div class="nav-collapse collapse">
                                    <ul class="nav" id="mainNavigation">
                                        <li class="active home-navigation"><a href="<?php echo site_url();?>">Home</a></li>
                                        <li class="dropdown category-navigation">
                                            <a href="#" class="dropdown-toggle">Categories <b class="caret"></b> </a>
                                            <ul class="dropdown-menu">
                                            <?php foreach ($this->categorymodel->getAllAvailableCategory() as $row) : ?>
                                                <li class="dropdown">
                                                    <a href="<?php echo site_url('category/view/' . $row->Cat_ID);?>" class="dropdown-toggle"><i class="icon-caret-right pull-right visible-desktop"></i> <?php echo $row->Cat_Name;?></a>
                                                    <ul class="dropdown-menu">
                                                        <?php foreach ($this->categorymodel->getAllAvailableGroupInCategory($row->Cat_ID) as $group) : ?>
                                                        <li><a href="<?php echo site_url('category/view/' . $row->Cat_ID);?>"><?php echo $group->Gr_Name; ?></a></li>
                                                        <?php endforeach;?>
                                                    </ul>
                                                </li>

                                                <?php endforeach;?>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo site_url('about');?>">About Us</a></li>
                                        <li><a href="<?php echo site_url('contact');?>">Contact</a></li>
                                    </ul>

                                    <!--  ==========  -->
                                    <!--  = Search form =  -->
                                    <!--  ==========  -->
                                    <form class="navbar-form pull-right" action="#" method="post">
                                        <button type="submit"><span class="icon-search"></span></button>
                                        <input type="text" class="span1" name="search" id="navSearchInput">
                                    </form>
                                </div><!-- /.nav-collapse -->
                            </div>

                            <!--  ==========  -->
                            <!--  = Cart =  -->
                            <!--  ==========  -->
                            <div class="span3">
                                <div class="cart-container" id="cartContainer">
                                    <?php require_once('application/views/ajax/getBasket.php'); ?>
                                </div>
                            </div> <!-- /cart -->
                        </div>
                    </div>
                </div>
            </div> <!-- /main menu -->
