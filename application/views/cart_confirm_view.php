<?php require_once('application/views/cart/cart_header_view.php'); ?>
<?php 
    $totalPrice = 0;
    $size = 0;
    if($this->cart ){
        if($this->cart->total_items() == 0){
            $isEmpty = true;    
        } else{
            foreach ($this->cart->contents() as $item){
                // $totalPrice += $item['subtotal'];
            }
            $size = $this->cart->total_items();
            $isEmpty = false;    
        }
    } else{
        $isEmpty = true;
    }
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
                                        <h1><span class="light">Confirm</span> &amp; Pay</h1>
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
                                <div class="step done">
                                    <div class="step-badge"><i class="icon-ok"></i></div>
                                    <a href="<?php echo site_url('basket/payment');?>">Payment Method</a>
                                </div>
                                <div class="step active">
                                    <div class="step-badge">4</div>
                                    Confirm &amp; Pay
                                </div>
                            </div>
                        </div> <!-- /steps -->
                        <?php if(!$isEmpty) : ?>
                        <!--  ==========  -->
                        <!--  = Selected Items =  -->
                        <!--  ==========  -->
                        <table class="table table-items">
                            <thead>
                                <tr>
                                    <th colspan="2">Item</th>
                                    <th><div class="align-center">Quantity</div></th>
                            <th><div class="align-right">Price</div></th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php 
                                
                                foreach ($this->cart->contents() as $item) : 
                                    $prod = $this->productmodel->getProductByID($item['id']);
                                ?>
                                <<tr>
                                    <td class="image"><img src="<?php echo base_url();?>assets//product_images/<?=$prod->Pro_Image?>" alt="" width="124" height="124" /></td>
                                    <td class="desc"><?=$prod->Pro_Name?> &nbsp; <a title="Remove Item" class="icon-remove-sign removeRealCart" href="ajax/removeProductFromCart.jsp?id=<%=prod.getPro_ID()%>"></a></td>
                                    <td class="qty">
                                        <input type="text" disabled="disabled" class="span1 cartQty" id="ajax/saveProductQuantity.jsp?id=<%=prod.getPro_ID()%>" value="<?php echo $item['qty'];?>" />
                                    </td>
                                    <td class="price">
                                        <?php $offValue = 0;
                                            foreach ($this->offermodel->getAllAvailableEventsByProductID($prod->Pro_ID) as $offer) {
                                                $offValue += $offer->Offer_Value;
                                            }
                                            if ($offValue > 0) : 
                                                    $realPrice = $prod->Pro_Price - $offValue*$prod->Pro_Price/100;
                                                $totalPrice +=  $realPrice*$item['qty'];
                                        ?>
                                        <span class="tag striked">$<%=utils.AppUtil.formatMoneyNumber(prod.getPrice())%></span>
                                        <span class="tag red-clr">$<%=utils.AppUtil.formatMoneyNumber(realPrice)%></span>
                                        <?php else : 
                                            $totalPrice +=  $prod->Pro_Price*$item['qty'];
                                        ?>
                                        <span class="tag">$ <?=$prod->Pro_Price?></span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                <tr>
                                    <td colspan="2" rowspan="2">

                                    </td>
                                    <td class="stronger">Subtotal:</td>
                                    <td class="stronger"><div class="size-16 align-right"></div></td>
                                </tr>

                                <tr >

                                    <td class="stronger"></td>
                                    <td class="stronger">
                                        <div id="subTotalPrice" class="size-16 align-right">
                                            <div id="totalPrice">$<?php echo $totalPrice;?></div>
                                            
                                        </div>
                                    </td>

                                </tr>
                            </tbody>
                        </table>

                        <p class="right-align">
                            <a href="<?php echo site_url('basket/notice');?>" class="btn btn-primary higher bold">CONFIRM &amp; PAY</a>
                        </p>
                        <?php else : ?>
                        <p class="right-align">
                            Your shopping cart is empty &nbsp; &nbsp;
                            <a href="<?php echo site_url('category');?>" class="btn btn-primary higher bold">SHOP NOW</a>
                        </p>
                        <?php endif; ?>
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

