

<!--  ==========  -->
<!--  = Breadcrumbs =  -->
<!--  ==========  -->
<div class="darker-stripe">
    <div class="container">
        <div class="row">
            <div class="span12">
                <ul class="breadcrumb">
                    <li>
                        <a href="<?php echo site_url();?>">Webmarket</a>
                    </li>
                    <li><span class="icon-chevron-right"></span></li>
                    <li>
                        <a href="#">Brands</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="push-up blocks-spacer">
        <div class="row">
            <section class="span12">

                <!--  ==========  -->
                <!--  = Title =  -->
                <!--  ==========  -->
                <div class="underlined push-down-20">
                    <div class="row">
                        <div class="span6">
                            <h3><span class="light">All products in </span> <?=$provider->P_Name?></h3>
                        </div>
                        <div class="span6">
                            <div class="form-inline sorting-by">
                                <label for="isotopeSorting" class="black-clr">Sort:</label>
                                <select id="isotopeSorting" class="span3">
                                    <option value='{"sortBy":"price", "sortAscending":"true"}'>By Price (Low to High) &uarr;</option>
                                    <option value='{"sortBy":"price", "sortAscending":"false"}'>By Price (High to Low) &darr;</option>
                                    <option value='{"sortBy":"name", "sortAscending":"true"}'>By Name (Low to High) &uarr;</option>
                                    <option value='{"sortBy":"name", "sortAscending":"false"}'>By Name (High to Low) &darr;</option>
                                    <option value='{"sortBy":"popularity", "sortAscending":"true"}'>By Popularity (Low to High) &uarr;</option>
                                    <option value='{"sortBy":"popularity", "sortAscending":"false"}'>By Popularity (High to Low) &darr;</option>
                                </select>

                                <label for="numberShown" class="black-clr">Show:</label>
                                <select id="numberShown" class="span1">
                                    <option value="9">9</option>
                                    <option value="15">15</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                        </div> <!-- /sorting and number shown -->
                    </div>
                </div> <!-- /title -->

                <!--  ==========  -->
                <!--  = Products =  -->
                <!--  ==========  -->
                <div class="row popup-products">
                    <div id="isotopeContainer" class="isotope-container">

                        <?php foreach ($listProducts as $product) : ?>
                        <!--  ==========  -->
                        <!--  = Single Product =  -->
                        <!--  ==========  -->
                        <div class="span3 filter--<?=$product->Gr_ID?>" data-price="<?=$product->Pro_Price?>" data-popularity="<?=$product->Pro_Popularity?>" data-size="xs|s|m|xl" data-color="pink" data-brand="brand-<?=$product->P_ID?>">
                            <div class="product">
                                <?php $offValue = 0;
                                foreach ($this->offermodel->getAllAvailableEventsByProductID($product->Pro_ID) as $offer) {
                                    $offValue += $offer->Offer_Value;
                                }
                                ?>
                                <?php if ($offValue > 0) : ?>
                                    <div class="stamp green"></div>
                                <?php endif; ?>
                                <!--<div class="stamp red">Sold</div>-->

                                <div class="product-img">
                                    <div class="picture">
                                        <img width="270" height="350" alt="" src="<?php echo base_url();?>assets/product_images/<?=$product->Pro_Image?>"  />
                                        <div class="img-overlay">
                                            <a class="btn more btn-primary" href="<?php echo site_url('product/view/' . $product->P_ID)?>">More</a>
                                            <a class="btn buy btn-danger" href="#" id="product_<?=$product->P_ID?>">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-titles no-margin">
                                    <?php if ($offValue > 0) : 
                                        $realPrice = $product->Pro_Price - $offValue*$product->Pro_Price/100;
                                        ?>
                                        <h4 class="title striked">$<?php echo $product->Pro_Price;?></h4>
                                        <h4 class="title red-clr">$<?php echo $realPrice;?></h4>
                                    <?php else : ?>
                                        <h4 class="title">$<?php echo $product->Pro_Price;?></h4>
                                    <?php endif; ?>
                                    <h5 class="no-margin isotope--title"><?$product->Pro_Name ?></h5>
                                </div>
                                <p class="center-align stars">
                                    <?php 
                                    for ($i = 1; $i <= 5; $i++) {
                                        if ($i < $product->Pro_Rate){
                                            echo("<span class='icon-star stars-clr'></span>");
                                        } else{
                                            echo("<span class='icon-star'></span>");
                                        }
                                    }
                                    ?>
                                </p>
                            </div>
                        </div> <!-- /single product -->
                        <?php endforeach; ?>


                    </div> <!-- /isotope-container -->
                </div> <!-- /popup-products -->
                <hr />

                <!--  ==========  -->
                <!--  = Pagination =  -->
                <!--  ==========  -->
                <!-- <div class="pagination pagination-centered">
                    <ul>
                        <li><a href="#" class="btn btn-primary"><span class="icon-chevron-left"></span></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#" class="btn btn-primary"><span class="icon-chevron-right"></span></a></li>
                    </ul>
                </div>  -->
                <!-- /pagination --> 
            </section> <!-- /span12 -->
        </div>
    </div>
</div> <!-- /container -->

