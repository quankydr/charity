<?php require_once('application/views/cart/cart_header_view.php'); ?>

<?php 
    $cart = $this->cart;
    $status = false;
    if($cart->total_items() == 0){
        $status = false;
    } else{
        if($this->session->userdata('username') == null || $this->session->userdata('username') == ""){
            $status = false;
        } else{
            $cusid = $this->session->userdata('userid');
            $amount = $cart->total();
            $status = $this->billmodel->addBill($cusid, $amount, $cart);
        }
    }

    if($status) : 
        $this->cart->destroy();
?>

<div class="container">
    <div class="row">

        <!--  ==========  -->
        <!--  = Main content =  -->
        <!--  ==========  -->
        <section class="span12">

            <div class="checkout-container">
                <div class="row">
                    <div class="span10 offset1">

                        <!--  ==========  -->
                        <!--  = Header =  -->
                        <!--  ==========  -->
                        <header>
                            <div class="row">
                                <div class="span2">
                                    <a href="<?php echo site_url();?>"><img src="<?php echo base_url();?>assets/images/logo-bw.png" alt="Webmarket Logo" width="48" height="48" /></a>
                                </div>
                                <div class="span6">
                                    <div class="center-align">
                                        <h1> Your order has been recorded</h1>
                                    </div>
                                </div>
                                <div class="span2">
                                    <div class="right-align">
                                        <img src="<?php echo base_url();?>assets/images/buttons/security.jpg" alt="Security Sign" width="92" height="65" />
                                    </div>
                                </div>
                            </div>
                        </header>


                        <hr />

                        <p class="center-align">

                            <a href="<?php echo site_url();?>" class="btn btn-primary higher bold">BACK TO HOME</a>
                        </p>

                        <hr />
                    </div>
                </div>
            </div>


        </section> <!-- /main content -->

    </div>
</div> <!-- /container -->
<?php else : ?>
<div class="container">
    <div class="row">

        <!--  ==========  -->
        <!--  = Main content =  -->
        <!--  ==========  -->
        <section class="span12">

            <div class="checkout-container">
                <div class="row">
                    <div class="span10 offset1">

                        <!--  ==========  -->
                        <!--  = Header =  -->
                        <!--  ==========  -->
                        <header>
                            <div class="row">
                                <div class="span2">
                                    <a href="<?php echo site_url();?>"><img src="<?php echo base_url();?>assets/images/logo-bw.png" alt="Webmarket Logo" width="48" height="48" /></a>
                                </div>
                                <div class="span6">
                                    <div class="center-align">
                                        <h1> Unknown error! Please try again</h1>
                                    </div>
                                </div>
                                <div class="span2">
                                    <div class="right-align">
                                        <img src="<?php echo base_url();?>assets/images/buttons/security.jpg" alt="Security Sign" width="92" height="65" />
                                    </div>
                                </div>
                            </div>
                        </header>


                        <hr />

                        <p class="center-align">

                            <a href="<?php echo site_url('basket');?>" class="btn btn-primary higher bold">BACK TO CART</a>
                        </p>

                        <hr />
                    </div>
                </div>
            </div>


        </section> <!-- /main content -->

    </div>
</div> <!-- /container -->
<?php endif; ?>



</div> <!-- end of master-wrapper -->



<!--  ==========  -->
<!--  = JavaScript =  -->
<!--  ==========  -->

<!--  = FB =  -->





<!--  = jQuery - CDN with local fallback =  -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    if (typeof jQuery == 'undefined') {
        document.write('<script src="<?php echo base_url();?>assets/js/jquery.min.js"><\/script>');
    }
</script>

<!--  = _ =  -->
<script src="<?php echo base_url();?>assets/js/underscore/underscore-min.js" type="text/javascript"></script>

<!--  = Bootstrap =  -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  = Slider Revolution =  -->
<script src="<?php echo base_url();?>assets/js/rs-plugin/pluginsources/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>

<!--  = CarouFredSel =  -->
<script src="<?php echo base_url();?>assets/js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>

<!--  = jQuery UI =  -->
<script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.3/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.3/touch-fix.min.js" type="text/javascript"></script>

<!--  = Isotope =  -->
<script src="<?php echo base_url();?>assets/js/isotope/jquery.isotope.min.js" type="text/javascript"></script>

<!--  = Tour =  -->
<script src="<?php echo base_url();?>assets/js/bootstrap-tour/build/js/bootstrap-tour.min.js" type="text/javascript"></script>

<!--  = PrettyPhoto =  -->
<script src="<?php echo base_url();?>assets/js/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript"></script>

<!--  = Google Maps API =  -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/goMap/js/jquery.gomap-1.3.2.min.js"></script>

<!--  = Custom JS =  -->
<script src="<?php echo base_url();?>assets/js/custom.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/pages/cart.js" type="text/javascript"></script>

</body>
</html>
