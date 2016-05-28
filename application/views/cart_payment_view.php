<?php require_once('application/views/cart/cart_header_view.php'); ?>
<?php $customerID = $this->session->userdata('userid') ;
    $customer = $this->customermodel->getCustomerByID($customerID);  ?>
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
                                        <h1><span class="light">Choose</span> Payment Method</h1>
                                    </div>
                                </div>
                                <div class="span2">
                                    <div class="right-align">
                                        <img src="<?php echo base_url();?>assets/images/buttons/security.jpg" alt="Security Sign" width="92" height="65" />
                                    </div>
                                </div>
                            </div>
                        </header>

                        <!--  ==========  -->
                        <!--  = Steps =  -->
                        <!--  ==========  -->
                        <div class="checkout-steps">
                            <div class="clearfix">
                                <div class="step done">
                                    <div class="step-badge"><i class="icon-ok"></i></div>
                                    <a href="<?php echo site_url('basket');?>">Shopping Cart</a>
                                </div>
                                <div class="step done">
                                    <div class="step-badge"><i class="icon-ok"></i></div>
                                    <a href="<?php echo site_url('basket/ship');?>">Shipping Address</a>
                                </div>
                                <div class="step active">
                                    <div class="step-badge">3</div>
                                    Payment Method
                                </div>
                                <div class="step">
                                    <div class="step-badge">4</div>
                                    Confirm &amp; Pay
                                </div>
                            </div>
                        </div> <!-- /steps -->

                        <!--  ==========  -->
                        <!--  = Payment =  -->
                        <!--  ==========  -->
                        <span class="btn btn-danger circle pull-left"><i class="icon-chevron-down"></i></span>
                        <div class="shifted-left-45 clearfix">
                            <h3 class="no-margin"><span class="light">Credit</span> Card</h3>
                            <p class="push-down-30">
                                We accept MasterCard, Visa and American Express
                                <br/>

                            </p>
                            <form action="#" method="post" class="form-horizontal form-checkout">
                                
                                <div class="control-group">
                                    <label class="control-label" for="cardNum">Card Number<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <?php $ccnumber = $customer->Cus_CCNumber;
                                            $listNumber = explode(" ", $ccnumber); ?>
                                        <input type="text" id="cardNum" class="span1 card-num-input center-align" maxlength="4" value="<?=$listNumber[0] ?>" disabled="">
                                        <input type="text" class="span1 card-num-input center-align" maxlength="4" value="<?=$listNumber[1] ?>" disabled="">
                                        <input type="text" class="span1 card-num-input center-align" maxlength="4" value="<?=$listNumber[2] ?>" disabled="">
                                        <input type="text" class="span1 card-num-input center-align add-tooltip" maxlength="4" value="<?=$listNumber[3] ?>" disabled="" data-title="The 16 digits on the front of the card">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="cvc">CVC or CVS<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input id="cvc" type="text" class="span1 center-align add-tooltip" maxlength="3" data-title="Last 3 digits on back of card" required disabled="" value="<?=$customer->Cus_CCCVS?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="exp">Expiration Date<span class="red-clr bold">*</span></label>
                                    <div class="controls">
                                        <input id="cvc" type="text" class="span1 center-align add-tooltip" maxlength="3" data-title="Last 3 digits on back of card" required disabled="" value="<?=$customer->Cus_CCValidMonth?>/<?=$customer->Cus_CCValidYear?> ">
                                    </div>
                                </div>
                                <p class="right-align">
                                    In the next step you will be able to review and confirm the order &nbsp; &nbsp;
                                    <a href="<?php echo site_url('basket/confirm');?>" class="btn btn-primary higher bold">CONTINUE</a>
                                </p>

                            </form>
                        </div>

                        <hr />



                    </div>
                </div>
            </div>


        </section> <!-- /main content -->

    </div>
</div> <!-- /container -->




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


