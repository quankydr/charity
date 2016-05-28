<?php 
    $totalPrice = 0;
    $size = 0;
    if($this->cart ){
        if($this->cart->total_items() == 0){
            $isEmpty = true;    
        } else{
            foreach ($this->cart->contents() as $item){
                $totalPrice += $item['subtotal'];
            }
            $size = $this->cart->total_items();
            $isEmpty = false;    
        }
    } else{
        $isEmpty = true;
    }
?>

<div class="cart">
    <p class="items">CART <span class="dark-clr">(<?=$size?>)</span></p>
    <p class="dark-clr hidden-tablet">$<?=$totalPrice?></p>
    <a href="<?php echo site_url('basket');?>" class="btn btn-danger">
        <!-- <span class="icon icons-cart"></span> -->
        <i class="icon-shopping-cart"></i>
    </a>
</div>

<?php if(!$isEmpty) : ?>
<div class="open-panel">
    <?php 
    $i = 0;
    foreach ($this->cart->contents() as $item) : 
    	if ($i == 5){
    		break;
    	}
    	$i ++;
    	$prod = $this->productmodel->getProductByID($item['id']);
    ?>
    <div class="item-in-cart clearfix">
        <div class="image">
            <img src="<?php echo base_url();?>assets/product_images/<?=$prod->Pro_Image?>" width="30" height="30" alt="cart item" />
        </div>
        <div class="desc">
            <strong><a href="<?php echo site_url('product/view/' . $prod->Pro_ID);?>"><?=$prod->Pro_Name?></a></strong>
            <span class="light-clr qty">
                Quantity: <?=$item['qty']?>
                &nbsp;
                <a href="<?php echo site_url('basket/remove/' . $item['id'])?>" class="icon-remove-sign removeSmallCart" title="Remove Item"></a>
            </span>
        </div>
        <div class="price">
        	<?php $offValue = 0;
                                foreach ($this->offermodel->getAllAvailableEventsByProductID($prod->Pro_ID) as $offer) {
                                    $offValue += $offer->Offer_Value;
                                }
                                if ($offValue > 0) : 
                                        $realPrice = $prod->Pro_Price - $offValue*$prod->Pro_Price/100;
                                    $data = array(
                                       'rowid' => $item['rowid'],
                                       'price'   => $realPrice
                                    );
                                $this->cart->update($data); 
                                ?>

            <strong class="tag striked">$<?php echo $prod->Pro_Price;?></strong>
			<strong class="tag red-clr">$<?php echo $realPrice;?></strong>
            <?php else : ?>
            <strong>$<?php echo $prod->Pro_Price;?></strong>
            <?php endif; ?>
        </div>
    </div>
    <?php endforeach; 
    	if($size > 5) : 
    ?>
    
    <div class="summary">
        <div class="line">
            <div class="row-fluid">
                <div class="span6"></div>
                <div class="span6 align-right size-16"><a href="<?php echo site_url('basket');?>">View all </a></div>
            </div>
        </div>
    </div>
    
	<?php endif; ?>

    <div class="proceed">
        (You have to login before checkout)
        <?php if (!$this->session->userdata('username') || $this->session->userdata('username') == '')  : ?>
        <a href="" class="btn btn-danger pull-right bold higher" onclick="return false" >CHECKOUT <i class="icon-shopping-cart"></i></a>
            <?php else : ?>
        <a href="<?php echo site_url('basket');?>" class="btn btn-danger pull-right bold higher">CHECKOUT <i class="icon-shopping-cart"></i></a>
            <?php endif; ?>

    </div>
</div>
<?php else : ?>
<div class="open-panel">
    <div class="item-in-cart clearfix">
        <!--<div class="image">
            <img src="images/dummy/cart-items/cart-item-2.jpg" width="124" height="124" alt="cart item" />
        </div>-->
        <div class="desc">
            <strong><a href="<?php echo site_url('category');?>">No products</a></strong>

        </div>
    </div>
</div>
<?php endif; ?>
