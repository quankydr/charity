
<!--  ==========  -->
<!--  = Breadcrumbs =  -->
<!--  ==========  -->
<div class="darker-stripe">
    <div class="container">
        <div class="row">
            <div class="span12">
                <ul class="breadcrumb">
                    <li>
                        <a href="<?php echo site_url('');?>">Webmarket</a>
                    </li>
                    <li><span class="icon-chevron-right"></span></li>
                    <li>
                        <a href="<?php echo site_url('caregory');?>">Shop</a>
                    </li>
                    <li><span class="icon-chevron-right"></span></li>
                    <li>
                            <a href="#">Search Results for "<?=$search?>"</a>
                        </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="push-up blocks-spacer">
        <div class="row">

            <!--  ==========  -->
            <!--  = Sidebar =  -->
            <!--  ==========  -->
            <aside class="span3 left-sidebar" id="tourStep1">
                <div class="sidebar-item sidebar-filters" id="sidebarFilters">

                    <!--  ==========  -->
                    <!--  = Sidebar Title =  -->
                    <!--  ==========  -->
                    <div class="underlined">
                        <h3><span class="light">Shop</span> Filters</h3>
                    </div>

                    <!--  ==========  -->
                    <!--  = Categories =  -->
                    <!--  ==========  -->
                    <div class="accordion-group" id="tourStep2">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" href="#filterOne">Categories <b class="caret"></b></a>
                        </div>
                        <div id="filterOne" class="accordion-body collapse in">
                            <div class="accordion-inner">
                                <?php foreach ($allCategory as $categoryItem) : ?>
                                <a href="#" data-target=".filter--<?=$categoryItem->Cat_ID?>" class="selectable"><i class="box"></i> <?=$categoryItem->Cat_Name;?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div> <!-- /categories -->

                    <!--  ==========  -->
                    <!--  = Prices slider =  -->
                    <!--  ==========  -->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" href="#filterPrices">Price <b class="caret"></b></a>
                        </div>
                        <div id="filterPrices" class="accordion-body in collapse">
                            <div class="accordion-inner with-slider">
                                <div class="jqueryui-slider-container">
                                    <div id="pricesRange"></div>
                                </div>
                                <input type="text" data-initial="<%=max_price %>" class="max-val pull-right" disabled />
                                <input type="text" data-initial="0" class="min-val" disabled />
                            </div>
                        </div>
                    </div> <!-- /prices slider -->

                    <!--  ==========  -->
                    <!--  = Size filter =  -->
                    <!--  ==========  -->
                    <!--
                    <div class="accordion-group" id="tourStep3">
                        <div class="accordion-heading">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" href="#filterTwo">Size <b class="caret"></b></a>
                        </div>
                        <div id="filterTwo" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <a href="#" data-target="xs" data-type="size" class="selectable detailed"><i class="box"></i> XS</a>
                                <a href="#" data-target="s" data-type="size" class="selectable detailed"><i class="box"></i> S</a>
                                <a href="#" data-target="m" data-type="size" class="selectable detailed"><i class="box"></i> M</a>
                                <a href="#" data-target="l" data-type="size" class="selectable detailed"><i class="box"></i> L</a>
                                <a href="#" data-target="xl" data-type="size" class="selectable detailed"><i class="box"></i> XL</a>
                                <a href="#" data-target="xxl" data-type="size" class="selectable detailed"><i class="box"></i> XXL</a>

                            </div>
                        </div>
                    </div>  -->
                    <!-- /size filter -->

                    <!--  ==========  -->
                    <!--  = Color filter =  -->
                    <!--  ==========  -->
                    <!--
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" href="#filterThree">Color <b class="caret"></b></a>
                        </div>
                        <div id="filterThree" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <a href="#" data-target="red" data-type="color" class="selectable detailed"><i class="box"></i> Red</a>
                                <a href="#" data-target="green" data-type="color" class="selectable detailed"><i class="box"></i> Green</a>
                                <a href="#" data-target="blue" data-type="color" class="selectable detailed"><i class="box"></i> Blue</a>
                                <a href="#" data-target="pink" data-type="color" class="selectable detailed"><i class="box"></i> Pink</a>
                                <a href="#" data-target="purple" data-type="color" class="selectable detailed"><i class="box"></i> Purple</a>
                                <a href="#" data-target="orange" data-type="color" class="selectable detailed"><i class="box"></i> Orange</a>

                            </div>
                        </div>
                    </div>  -->
                    <!-- /color filter -->

                    <!--  ==========  -->
                    <!--  = Brand filter =  -->
                    <!--  ==========  -->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" href="#filterFour">Brand <b class="caret"></b></a>
                        </div>
                        <div id="filterFour" class="accordion-body collapse">
                            <div class="accordion-inner">
                                
                                <?php foreach ($listProviders as $provider) : ?>
                                <a href="#" data-target="brand-<%=provider.getP_ID()%>" data-type="brand" class="selectable detailed"><i class="box"></i> <?=$provider->P_Name?></a>
                                <?php endforeach; ?>
                                <a href="#" data-target="s-oliver" data-type="brand" class="selectable detailed"><i class="box"></i> S. Oliver</a>
                                <a href="#" data-target="nike" data-type="brand" class="selectable detailed"><i class="box"></i> Nike</a>
                                <a href="#" data-target="naish" data-type="brand" class="selectable detailed"><i class="box"></i> Naish</a>
                                <a href="#" data-target="adidas" data-type="brand" class="selectable detailed"><i class="box"></i> Adidas</a>
                                <a href="#" data-target="puma" data-type="brand" class="selectable detailed"><i class="box"></i> Puma</a>
                                <a href="#" data-target="shred" data-type="brand" class="selectable detailed"><i class="box"></i> Shred</a>

                            </div>
                        </div>
                    </div> <!-- /brand filter -->

                    <a href="#" class="remove-filter" id="removeFilters"><span class="icon-ban-circle"></span> Remove All Filters</a>

                </div>
            </aside> <!-- /sidebar -->

            <!--  ==========  -->
            <!--  = Main content =  -->
            <!--  ==========  -->
            <section class="span9">
                
                
                <!--  ==========  -->
                <!--  = Title =  -->
                <!--  ==========  -->
                <div class="underlined push-down-20">
                    <div class="row">
                        <div class="span5">
                            <h3><span class="light">Search:</span> "<?=$search?>"</h3>
                        </div>
                        <div class="span4">
                            <div class="form-inline sorting-by" id="tourStep4">
                                <label for="isotopeSorting" class="black-clr">Sort:</label>
                                <select id="isotopeSorting" class="span3">
                                    <option value='{"sortBy":"price", "sortAscending":"true"}'>By Price (Low to High) &uarr;</option>
                                    <option value='{"sortBy":"price", "sortAscending":"false"}'>By Price (High to Low) &darr;</option>
                                    <option value='{"sortBy":"name", "sortAscending":"true"}'>By Name (Low to High) &uarr;</option>
                                    <option value='{"sortBy":"name", "sortAscending":"false"}'>By Name (High to Low) &darr;</option>
                                    <option value='{"sortBy":"popularity", "sortAscending":"true"}'>By Popularity (Low to High) &uarr;</option>
                                    <option value='{"sortBy":"popularity", "sortAscending":"false"}'>By Popularity (High to Low) &darr;</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div> <!-- /title -->

                <!--  ==========  -->
                <!--  = Products =  -->
                <!--  ==========  -->
                <div class="row popup-products">
                    <div id="isotopeContainer" class="isotope-container">

                        
                        <?php if (count($listProducts) > 0 ) : 
                            foreach ($listProducts as $product) : 
                        ?>
                        <!--  ==========  -->
                        <!--  = Single Product =  -->
                        <!--  ==========  -->
                        <div class="span3 filter--<%=product.getCat_ID()%>" data-price="<%=product.getPrice() %>" data-popularity="<%=product.getPro_Popularity() %>" data-size="xs|s|m|xl" data-color="pink" data-brand="brand-<%=product.getP_ID()%>">
                            <div class="product">

                                <!--<div class="stamp red">Sold</div>-->

                                <div class="product-img">
                                    <div class="picture" id="productImageWrapID_<?=$product->Pro_ID?>">
                                        <img width="270" height="350" alt="" src="<?php echo base_url();?>assets/product_images/<?=$product->Pro_Image?>"  />
                                        <div class="img-overlay">
                                            <a class="btn more btn-primary" href="<?php echo site_url('product/view/' . $product->Pro_ID)?>">More</a>
                                            <a class="btn buy btn-danger" href="#" id="product_<?=$product->Pro_ID?>">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-titles no-margin">
                                    <h4 class="title">$<?=$product->Pro_Price?></h4>
                                    <h5 class="no-margin isotope--title"><?=$product->Pro_Name?></h5>
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
                        <?php endforeach; endif; ?>

                        
                       

                    </div>
                </div>
                <hr />
            </section> <!-- /main content -->
        </div>
    </div>
</div> <!-- /container -->

