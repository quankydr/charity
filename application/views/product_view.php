


<!--  ==========  -->
<!--  = Breadcrumbs =  -->
<!--  ==========  -->
<div class="darker-stripe">
    <div class="container">
        <div class="row">
            <div class="span12">
                <ul class="breadcrumb">
                    <li>
                        <a href="<?php echo site_url('');?>">Supermarket</a>
                    </li>
                    <li><span class="icon-chevron-right"></span></li>
                    <li>
                        <a href="<?php echo site_url('category');?>">Shop</a>
                    </li>
                    <li><span class="icon-chevron-right"></span></li>
                    <li>
                        <a href="<?php echo site_url('brand/view/' . $product->P_ID);?>"><?=$product->P_Name?></a>
                    </li>
                    <li><span class="icon-chevron-right"></span></li>
                    <li>
                        <a href="#"><?php echo $product->Pro_Name;?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--  ==========  -->
<!--  = Main container =  -->
<!--  ==========  -->
<div class="container">
    <div class="push-up top-equal blocks-spacer">

        <!--  ==========  -->
        <!--  = Product =  -->
        <!--  ==========  -->
        <div class="row blocks-spacer">

            <!--  ==========  -->
            <!--  = Preview Images =  -->
            <!--  ==========  -->
            <div class="span5">
                <div class="product-preview">
                    <div class="picture">
                        <img src="<?php echo base_url();?>assets/product_images/<?=$product->Pro_Image?>" alt="" width="200" height="500" id="mainPreviewImg" />
                    </div>
                    <!--  <div class="thumbs clearfix">
                          <div class="thumb active">
                              <a href="#mainPreviewImg"><img src="images/dummy/products/shirt-1.jpg" alt="" width="940" height="940" /></a>
                          </div>
                          <div class="thumb">
                              <a href="#mainPreviewImg"><img src="images/dummy/products/shirt-2.jpg" alt="" width="940" height="940" /></a>
                          </div>
                          <div class="thumb">
                              <a href="#mainPreviewImg"><img src="images/dummy/products/shirt-3.jpg" alt="" width="940" height="940" /></a>
                          </div>
                      </div> -->
                </div>
            </div>

            <!--  ==========  -->
            <!--  = Title and short desc =  -->
            <!--  ==========  -->
            <div class="span7">
                <div class="product-title">
                    <h1 class="name"><span class="light"><?=$product->P_Name?></span> <?=$product->Pro_Name?></h1>
                    <div class="meta">
                        <?php $offValue = 0;
                                foreach ($this->offermodel->getAllAvailableEventsByProductID($product->Pro_ID) as $offer) {
                                    $offValue += $offer->Offer_Value;
                                }
                                if ($offValue > 0) : 
                                        $realPrice = $product->Pro_Price - $offValue*$product->Pro_Price/100;
                                ?>
                        <span class="tag striked">$<?php echo $product->Pro_Price;?></span>
                        <span class="tag red-clr">$<?php echo $realPrice;?></span>
                        <?php else: ?>
                        <span class="tag">$<?php echo $product->Pro_Price;?></span>
                        <?php endif; ?>
                        <span class="stock">
                            <?php $qty = $product->Pro_Quantity;
                            if ($qty == 0) : ?>
                            <span class="btn btn-danger">Out of Stock</span>
                            <?php else :
                             if ($qty > 0) : ?>
                            <span class="btn btn-success">In Stock</span> 
                            <?php else : ?>
                            <span class="btn btn-warning">Ask for availability</span>
                            <?php endif; endif; ?>
                        </span>
                    </div>
                </div>
                <div class="product-description">
                    <span><?=$product->Pro_Popularity?> people bought this product!</span>
                    <br/>

                    <br/>
                    Description
                    <hr/>
                    <p style="font-size: 15px"><?=$product->Pro_Description?></p>
                    <?php 
                    if(!$this->session->userdata('username') || $this->session->userdata('username')==''){
                        $isRated = true;
                    } else{
                        $isRated = $this->productmodel->isRated(2, $product->Pro_ID);
                    }
                    if ($isRated) :?>

                    <p>
                    <div class="ratingdisable" data-average="<?=$product->Pro_Rate?>" data-id="<?=$product->Pro_ID?> title="Test""></div>
                    </p>
                    <?php else : ?>
                    <p>
                    <div class="rating" data-average="<?=$product->Pro_Rate?>" data-id="<?=$product->Pro_ID?>" ></div>
                    </p>
                    <?php endif; ?>

                    <hr />

                    <!--  ==========  -->
                    <!--  = Add to cart form =  -->
                    <!--  ==========  -->
                    <form action="#" class="form form-inline clearfix">

                        &nbsp;
                        <!--
                        <select name="color" class="span2">
                            <option value="-1">Select Color</option>
                            <option value="blue">Blue</option>
                            <option value="orange">Orange</option>
                            <option value="black">Black</option>
                        </select>
                        &nbsp;
                        <select name="size" class="span2">
                            <option value="-1">Select Size</option>
                            <option value="XS">Extra Small</option>
                            <option value="S">Small</option>
                            <option value="M">Medium</option>
                            <option value="L">Large</option>
                            <option value="XL">Extra Large</option>
                            <option value="XXL">Huge</option>
                        </select>
                        -->
                        <button class="btn productViewAddToCart btn-danger pull-right" id="product_<?=$product->Pro_ID?>" ><i class="icon-shopping-cart"></i> &nbsp; Add To Cart</button>
                    </form>

                    <hr />



                </div>
            </div>
        </div>

        <!--  ==========  -->
        <!--  = Tabs with more info =  -->
        <!--  ==========  -->
        <div class="row">
            <div class="span12">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab-1" data-toggle="tab">Details</a>
                    </li>
                    
                    <li>
                        <a href="#tab-2" data-toggle="tab">COMMENTS</a>
                    </li>

                </ul>
                <div class="tab-content">
                    <div class="fade in tab-pane active" id="tab-1">
                        <h3>Product Description</h3>
                        <p><?=$product->Pro_Description?></p>

                    </div>
                    
                    <div class="fade tab-pane" id="tab-2">
                        <p>
                        <section id="comments" class="comments-container">
                            
                            
                            <div class="row" id="loadComments">

                                <?php 

                                $viewData['productID'] = $product->Pro_ID;
                                $this->load->view('ajax/getComment', $viewData); ?>
                            
                            </div>
                            <hr>

                            <h3 class="push-down-25"><span class="light">Leave</span> a Comment</h3>

                            <form id="commentform" method="post" action="<?php echo site_url('product/addComment/' . $product->Pro_ID);?>" class="form form-inline form-comments">
                                <p class="push-down-20">
                                    <input type="email" aria-required="true" tabindex="2" size="30" value="" id="email" name="email" required="">
                                    <label for="email">Mail<span class="red-clr bold">*</span></label>
                                </p>

                                <p class="push-down-20">
                                    <textarea class="input-block-level" tabindex="4" rows="7" cols="70" id="comment" name="comment" placeholder="Your comment goes here ..." required=""></textarea>
                                </p>
                                <p>
                                    <button class="btn btn-primary bold" type="submit" tabindex="5" id="submit">SUBMIT A COMMENT</button>
                                </p>
                                
                            </form>


                            <div class="alert alert-danger in fade notification not-err" style="display:none">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <span class="msgerror"></span>
                            </div>

                            <div class="alert alert-success in fade notification not-scc" style="display:none">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <span class="msgsuccess"></span>
                            </div>
                        </section>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> <!-- /container -->

<!--  ==========  -->
<!--  = Related Products =  -->
<!--  ==========  -->
<div class="boxed-area no-bottom">
    <div class="container">

        <!--  ==========  -->
        <!--  = Title =  -->
        <!--  ==========  -->
        <div class="row">
            <div class="span12">
                <div class="main-titles lined">
                    <h2 class="title"><span class="light">Related</span> Products</h2>
                </div>
            </div>
        </div>

        <!--  ==========  -->
        <!--  = Related products =  -->
        <!--  ==========  -->
        <div class="row popup-products">
            <?php foreach ($relatedProducts as $relatedProduct) : ?>
            <!--  ==========  -->
            <!--  = Products =  -->
            <!--  ==========  -->
            <div class="span3">
                <div class="product">
                    <?php $offValue = 0;
                        foreach ($this->offermodel->getAllAvailableEventsByProductID($relatedProduct->Pro_ID) as $offer) {
                            $offValue += $offer->Offer_Value;
                        }
                        ?>
                        <?php if ($offValue > 0) : ?>
                            <div class="stamp green"></div>
                        <?php endif; ?>
                    <div class="product-img">
                        <div class="picture" id="productImageWrapID_<?=$relatedProduct->P_ID?>">
                            <img width="270" height="350" alt="" src="<?php echo base_url();?>assets/product_images/<?=$relatedProduct->Pro_Image?>"  />
                            <div class="img-overlay">
                                <a class="btn more btn-primary" href="<?php echo site_url('product/view/' . $relatedProduct->P_ID)?>">More</a>
                                <a class="btn buy btn-danger" href="#" id="product_<?=$relatedProduct->P_ID?>">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="main-titles no-margin">
                        <?php if ($offValue > 0) : 
                            $realPrice = $relatedProduct->Pro_Price - $offValue*$relatedProduct->Pro_Price/100;
                            ?>
                            <h4 class="title striked">$<?php echo $relatedProduct->Pro_Price;?></h4>
                            <h4 class="title red-clr">$<?php echo $realPrice;?></h4>
                        <?php else : ?>
                            <h4 class="title">$<?php echo $relatedProduct->Pro_Price;?></h4>
                        <?php endif; ?>
                        <h5 class="no-margin isotope--title"><?$relatedProduct->Pro_Name ?></h5>
                    </div>
                    <p class="center-align stars">
                        <?php 
                        for ($i = 1; $i <= 5; $i++) {
                            if ($i < $relatedProduct->Pro_Rate){
                                echo("<span class='icon-star stars-clr'></span>");
                            } else{
                                echo("<span class='icon-star'></span>");
                            }
                        }
                        ?>
                    </p>
                </div>
            </div> <!-- /product -->
            <?php endforeach;?>
        </div>
    </div>
</div>




