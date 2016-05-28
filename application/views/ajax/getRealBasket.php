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
                        <h1><span class="light">Review</span> Shopping Cart</h1>
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
                <div class="step active">
                    <div class="step-badge">1</div>
                    Shopping Cart
                </div>
                <div class="step">
                    <div class="step-badge">2</div>
                    Shipping Address
                </div>
                <div class="step">
                    <div class="step-badge">3</div>
                    Payment Method
                </div>
                <div class="step">
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
                <tr>
                    <td class="image"><img src="<?php echo base_url();?>assets//product_images/<?=$prod->Pro_Image?>" alt="" width="124" height="124" /></td>
                    <td class="desc"><?=$prod->Pro_Name?> &nbsp; <a title="Remove Item" class="icon-remove-sign removeRealCart" href="<?php echo site_url('basket/remove/' . $item['id'])?>"></a></td>
                    <td class="qty">
                        <input type="text" class="span1 cartQty" id="<?php echo site_url('basket/saveQuantity/' . $item['id'])?>" value="<?php echo $item['qty'];?>" />
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


        <hr />

        <p class="right-align">
            In the next step you will choose your shipping address &nbsp; &nbsp;
            <a href="<?php echo site_url('basket/ship');?>" class="btn btn-primary higher bold">CONTINUE</a>
        </p>
        <?php else : ?>
        <p class="right-align">
            Your shopping cart is empty &nbsp; &nbsp;
            <a href="<?php echo site_url('category');?>" class="btn btn-primary higher bold">SHOP NOW</a>
        </p>
        <?php endif; ?>
    </div>
</div>