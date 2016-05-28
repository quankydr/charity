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
                            <a href="<?php echo site_url('about');?>">About Us</a>
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
                <aside class="span3">
                    <div class="sidebar-item">

                        <!--  ==========  -->
                        <!--  = Sidebar Title =  -->
                        <!--  ==========  -->
                        <div class="underlined">
                            <h3><span class="light">Our</span> Team</h3>
                        </div>

                        <!--  ==========  -->
                        <!--  = Menu (affix) =  -->
                        <!--  ==========  -->
                        <div class="row">
                            <div class="span3" id="spyMenu">
                                <ul class="nav nav-pills nav-stacked">
                                <?php foreach ($getAllAdmins as $admin) : ?>
                                <li><a href="#<?php echo $admin->Ad_Account;?>"> <?php echo $admin->Ad_Fullname;?> <i class="icon-caret-right pull-right"></i></a></li>
                                 <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

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
                    <h3><span class="light">A</span> Little Something About Us</h3>
                </div> <!-- /title -->

                <!--  ==========  -->
                <!--  = Description=  -->
                <!--  ==========  -->
                <section class="blocks-spacer">
                    <p>Hello, I'm Quang Pham Ngoc from Hanoi-Apech A1103M.</p>
                    <p>We were considered 'pioneers' in online retailing because if you can think back to 2008 no one really shopped online or liked the idea of putting their credit card online. If you want to stretch your memory back to 2007, we were one of the first internet companies who processed credit cards live and securely in Vietnam alone. VCB were the only bank to provide this service and we were their second customer!</p>

                    <h5><span class="light">Why</span> Supermarket Online?</h5>
                    <p>It's 'So Much Easier'.</p>
                    <p>We always had the philosophy to sell the brands you know and trust. </p>
                    <p>We contacted the biggest manufacturers of the brands we respect and got them on-board with us.</p>

                    <h5><span class="light">And</span> Why non-perishable goods?!</h5>
                    <p>We offer big name brands that you already buy for your home. You can expect to find everything at SO from packaged foods, household essentials and personal hygiene. Everything that can't be broken, go sour or turn stinky during its journey on the courier from our place to yours.</p>
                    <p>For items like milk, fruit and veg, meat and eggs, we'd encourage you to support your local butcher and green grocer in your community. Like us, these guys also compete with the big supermarket duopoly. Also, it's nice to choose your own fruit and veg and meat yourself. I don't trust other people choosing these items for me but I'm not so worried about someone picking and packing my bathroom cleaner.</p>
                </section>

                <!--  ==========  -->
                <!--  = Team Members =  -->
                <!--  ==========  -->
                <!--
                <section>

                   
                    <div class="underlined push-down-20">
                        <h3><span class="light">Faces</span> Behind The Webmarket</h3>
                    </div> 
                    
                    
                    <div class="row-fluid push-down-20" id="jaka">
                        <div class="span4">
                            <a href="#"><img src="images/dummy/about-us/profile-1.jpg" alt="person" width="550" height="660" /></a>
                        </div>
                        <div class="span4">
                            <h4><span class="light">Jaka</span> ?mid</h4>
                            <h6 class="move-title-up">Senior Designer</h6>
                            <p>Lorem ipsum dolor sit amet, coetur adipiscing elit. Ut feugiat mauris et magna egestas porta. Curabiturittis sagittis neque rutrum congue. Dec lobortis dui sagittis, ultrices nuncre, ultricies elit. Curabitur tristique felis pulvinar nibh porta, sit amet inteum ligula placerat. Maecenas auctor, sem nec eleifend blandit. Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="span4">
                            <blockquote>
                                <i class="icon-quote-left icon-5x"></i>
                                <p>Lorem ipsum dolor sit amet, coetur adipiscing elit. Ut feugiat mauris et magna egestas porta. Curabiturittis sagittis neque rutrum congue. Dec lobortis dui sagittis, ultrices nuncre. Dec lobortis dui sagittis, ultrices nuncre. Lorem ipsum dolor sit amet, coetur adipiscing elit.</p>
                            </blockquote>
                        </div>
                    </div>

                    
                    <div class="row-fluid push-down-20" id="primoz">
                        <div class="span4">
                            <blockquote>
                                <i class="icon-quote-left icon-5x"></i>
                                <p>Lorem ipsum dolor sit amet, coetur adipiscing elit. Ut feugiat mauris et magna egestas porta. Curabiturittis sagittis neque rutrum congue. Dec lobortis dui sagittis, ultrices nuncre. Dec lobortis dui sagittis, ultrices nuncre. Lorem ipsum dolor sit amet, coetur adipiscing elit.</p>
                            </blockquote>
                        </div>
                        <div class="span4">
                            <h4><span class="light">Primo?</span> Cigler</h4>
                            <h6 class="move-title-up">Code Ninja</h6>
                            <p>Lorem ipsum dolor sit amet, coetur adipiscing elit. Ut feugiat mauris et magna egestas porta. Curabiturittis sagittis neque rutrum congue. Dec lobortis dui sagittis, ultrices nuncre, ultricies elit. Curabitur tristique felis pulvinar nibh porta, sit amet inteum ligula placerat. Maecenas auctor, sem nec eleifend blandit. Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="span4">
                            <a href="#"><img src="images/dummy/about-us/profile-2.jpg" alt="person" width="550" height="660" /></a>
                        </div>
                    </div>

                    
                    <div class="row-fluid push-down-20" id="ana">
                        <div class="span4">
                            <a href="#"><img src="images/dummy/about-us/profile-4.jpg" alt="person" width="550" height="660" /></a>
                        </div>
                        <div class="span4">
                            <h4><span class="light">Ana</span> Karenina</h4>
                            <h6 class="move-title-up">Customer Relationship</h6>
                            <p>Lorem ipsum dolor sit amet, coetur adipiscing elit. Ut feugiat mauris et magna egestas porta. Curabiturittis sagittis neque rutrum congue. Dec lobortis dui sagittis, ultrices nuncre, ultricies elit. Curabitur tristique felis pulvinar nibh porta, sit amet inteum ligula placerat. Maecenas auctor, sem nec eleifend blandit. Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="span4">
                            <blockquote>
                                <i class="icon-quote-left icon-5x"></i>
                                <p>Lorem ipsum dolor sit amet, coetur adipiscing elit. Ut feugiat mauris et magna egestas porta. Curabiturittis sagittis neque rutrum congue. Dec lobortis dui sagittis, ultrices nuncre. Dec lobortis dui sagittis, ultrices nuncre. Lorem ipsum dolor sit amet, coetur adipiscing elit.</p>
                            </blockquote>
                        </div>
                    </div>

                    
                    <div class="row-fluid push-down-20" id="andre">
                        <div class="span4">
                            <blockquote>
                                <i class="icon-quote-left icon-5x"></i>
                                <p>Lorem ipsum dolor sit amet, coetur adipiscing elit. Ut feugiat mauris et magna egestas porta. Curabiturittis sagittis neque rutrum congue. Dec lobortis dui sagittis, ultrices nuncre. Dec lobortis dui sagittis, ultrices nuncre. Lorem ipsum dolor sit amet, coetur adipiscing elit.</p>
                            </blockquote>
                        </div>
                        <div class="span4">
                            <h4><span class="light">Andre</span> Agassi</h4>
                            <h6 class="move-title-up">Customer Relationship</h6>
                            <p>Lorem ipsum dolor sit amet, coetur adipiscing elit. Ut feugiat mauris et magna egestas porta. Curabiturittis sagittis neque rutrum congue. Dec lobortis dui sagittis, ultrices nuncre, ultricies elit. Curabitur tristique felis pulvinar nibh porta, sit amet inteum ligula placerat. Maecenas auctor, sem nec eleifend blandit. Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="span4">
                            <a href="#"><img src="images/dummy/about-us/profile-3.jpg" alt="person" width="550" height="660" /></a>
                        </div>
                    </div>

                </section>
                -->


                <hr />

            </section> <!-- /main content -->
        </div>
    </div>
</div> <!-- /container -->