<?php 
    if($this->session->userdata('username') == null || $this->session->userdata('username') == ""){
        redirect(site_url('home'));
    } else{
        if($this->session->userdata('userstatus') != null && !$this->session->userdata('userstatus') == 2){
            redirect(site_url('profile'));
        }
    }
?>


<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    
    <head>
        <meta charset="utf-8">
        <title>Supermarket - Checkout</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="ProteusThemes">

        <!--  Google Fonts  -->
        <link href='http://fonts.googleapis.com/css?family=Pacifico|Open+Sans:400,700,400italic,700italic&amp;subset=latin,latin-ext,greek' rel='stylesheet' type='text/css'>

        <!-- Twitter Bootstrap -->
        <link href="<?php echo base_url();?>assets/stylesheets/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/stylesheets/responsive.css" rel="stylesheet">
        <!-- Slider Revolution -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/js/rs-plugin/css/settings.css" type="text/css"/>
        <!-- jQuery UI -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css" type="text/css"/>
        <!-- PrettyPhoto -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/js/prettyphoto/css/prettyPhoto.css" type="text/css"/>
        <!-- main styles -->

        <link href="<?php echo base_url();?>assets/stylesheets/main.css" rel="stylesheet">



        <!-- Modernizr -->
        <script src="<?php echo base_url();?>assets/js/modernizr.custom.56918.js"></script>    

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/images/apple-touch/144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/images/apple-touch/114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/images/apple-touch/72.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/images/apple-touch/57.png">
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/apple-touch/57.png">
        <script>
        var SITE_URL = "<?php echo site_url();?>";
        </script>
    </head>


    <body class=" checkout-page">

        <div class="master-wrapper">