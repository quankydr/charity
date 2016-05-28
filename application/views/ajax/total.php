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

        <?php if(!$isEmpty) : ?>
        
                <?php 
                
                foreach ($this->cart->contents() as $item) : 
                    $prod = $this->productmodel->getProductByID($item['id']);
                ?>
                
                        <?php $offValue = 0;
                            foreach ($this->offermodel->getAllAvailableEventsByProductID($prod->Pro_ID) as $offer) {
                                $offValue += $offer->Offer_Value;
                            }
                            if ($offValue > 0) : 
                                    $realPrice = $prod->Pro_Price - $offValue*$prod->Pro_Price/100;
                                $totalPrice +=  $realPrice*$item['qty'];
                        ?>
                        
                        <?php else : 
                            $totalPrice +=  $prod->Pro_Price*$item['qty'];
                        ?>
                        
                        <?php endif; ?>
                    </td>
                </tr>

                <?php endforeach; ?>
                <div id="totalPrice">$<?php echo $totalPrice;?></div>

        <?php endif; ?>
    