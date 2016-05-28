<!--  ==========  -->
<!--  = Footer =  -->
<!--  ==========  -->
<footer>

    <!--  ==========  -->
    <!--  = Upper footer =  -->
    <!--  ==========  -->
    <div class="foot-light">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h2 class="pacifico">Supermarket &nbsp; <img src="<?php echo base_url();?>assets/images/webmarket.png" alt="Webmarket Cart" class="align-baseline" /></h2>
                    <p>We offer big name brands that you already buy for your home. You can expect to find everything at SO from packaged foods, household essentials and personal hygiene. Everything that can't be broken, go sour or turn stinky during its journey on the courier from our place to yours.</p>
                </div>
                
            </div>
        </div>
    </div> <!-- /upper footer -->

    <!--  ==========  -->
    <!--  = Middle footer =  -->
    <!--  ==========  -->
    <div class="foot-dark">
        <div class="container">
            <div class="row">

                <!--  ==========  -->
                <!--  = Menu 1 =  -->
                <!--  ==========  -->
                <div class="span3">
                    <div class="main-titles lined">
                        <h3 class="title"><span class="light">Main</span> Navigation</h3>
                    </div>
                    <ul class="nav bold">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li><a href="<?php echo base_url('about');?>">About Us</a></li>
                        <li><a href="<?php echo base_url('contact');?>">Contact Us</a></li>
                    </ul>
                </div>

                <!--  ==========  -->
                <!--  = Menu 2 =  -->
                <!--  ==========  -->
                <div class="span3">
                    <div class="main-titles lined">
                        <h3 class="title"><span class="light">Explore</span> Category</h3>
                    </div>
                    <ul class="nav">
                        <?php foreach ($this->categorymodel->getAllAvailableCategory() as $category) : ?>
                        <li><a href="<?php echo base_url('category/view/' .$category->Cat_ID);?>"><?=$category->Cat_Name?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!--  ==========  -->
                <!--  = Menu 3 =  -->
                <!--  ==========  -->
                <div class="span3">
                    <div class="main-titles lined">
                        <h3 class="title"><span class="light">Account</span> Information</h3>
                    </div>
                    <ul class="nav">
                        <li><a href="<?php echo base_url('profile');?>">Profile</a></li>
                        
                    </ul>
                </div>

                <!--  ==========  -->
                <!--  = Menu 4 =  -->
                <!--  ==========  -->
                <div class="span3">
                    <div class="main-titles lined">
                        <h3 class="title"><span class="light">Linked</span> Websites</h3>
                    </div>
                    <ul class="nav">
                        <li><a href="<?php echo base_url();?>">Supermarket Online</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- /middle footer -->

    <!--  ==========  -->
    <!--  = Bottom Footer =  -->
    <!--  ==========  -->
    <div class="foot-last">
        <a href="#" id="toTheTop">
            <span class="icon-chevron-up"></span>
        </a>
        <div class="container">
            <div class="row">
                <div class="span6">
                    &copy; Copyright 2014. Hanoi-aptech 
                </div>
                
            </div>
        </div>
    </div> <!-- /bottom footer -->
</footer> <!-- /footer -->


<!--  ==========  -->
<!--  = Modal Windows =  -->
<!--  ==========  -->

<!--  = Login =  -->
<div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close loginClose" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="loginModalLabel"><span class="light">Login</span> To Supermarket System</h3>
    </div>
    <div class="modal-body">
        <form method="post" action="<?php echo base_url('user/login');?>" id="loginForm">
            <div class="control-group">
                <label class="cont  rol-label hidden shown-ie8" for="inputEmail">Username</label>
                <div class="controls">
                    <input type="text" class="input-block-level loginUser" name="inputEmail" id="inputEmail" placeholder="Username">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputPassword">Password</label>
                <div class="controls">
                    <input type="password" class="input-block-level loginPassword" name="inputPassword" id="inputPassword" placeholder="Password">
                </div>
            </div>
            <div class="alert alert-danger in fade" id="login-error" style="display: none">
                <button type="button" class="close" data-dismiss="alert">×</button>
                Processing..
            </div>
            <button type="submit" class="btn btn-primary input-block-level bold higher loginSubmit">
                SIGN IN
            </button>
        </form>
        <p class="center-align push-down-0">
            Please contact us if you forgot your username or password!
        </p>
    </div>
</div>

<!--  = Register =  -->
<div id="registerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="registerModalLabel"><span class="light">Register</span> To Supermarket</h3>
    </div>
    <div class="modal-body">
        <form method="post" action="<?php echo base_url('user/signup');?>" id="registerForm">
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputUsernameRegister">Username</label>
                <div class="controls">
                    <input type="text" class="input-block-level" id="inputUsernameRegister" name="inputUsernameRegister" placeholder="Username">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputFirstNameRegister">Phone</label>
                <div class="controls">
                    <input type="text" class="input-block-level" id="inputFirstNameRegister" name="inputFirstNameRegister" placeholder="First name">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputPasswordRegister">Password</label>
                <div class="controls">
                    <input type="password" class="input-block-level" id="inputPasswordRegister" name="inputPasswordRegister" placeholder="Password">
                </div>
            </div>
            <div class="alert alert-danger in fade" id="register-error" style="display: none">
                <button type="button" class="close" data-dismiss="alert">×</button>
                Processing..
            </div>
            <button type="submit" class="btn btn-danger input-block-level bold higher registerSubmit">
                REGISTER
            </button>
        </form>
        <p class="center-align push-down-0">
            <a data-toggle="modal" role="button" href="#loginModal" data-dismiss="modal">Already Registered?</a>
        </p>

    </div>
</div>

</div> <!-- end of master-wrapper -->


<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<!--  = _ =  -->
<script src="<?php echo base_url()?>assets/js/underscore/underscore-min.js" type="text/javascript"></script>

<!--  = Bootstrap =  -->
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  = Slider Revolution =  -->
<script src="<?php echo base_url()?>assets/js/rs-plugin/pluginsources/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>

<!--  = CarouFredSel =  -->
<script src="<?php echo base_url()?>assets/js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>

<!--  = jQuery UI =  -->
<script src="<?php echo base_url()?>assets/js/jquery-ui-1.10.3/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/jquery-ui-1.10.3/touch-fix.min.js" type="text/javascript"></script>

<!--  = Isotope =  -->
<script src="<?php echo base_url()?>assets/js/isotope/jquery.isotope.min.js" type="text/javascript"></script>

<!--  = Tour =  -->
<script src="<?php echo base_url()?>assets/js/bootstrap-tour/build/js/bootstrap-tour.min.js" type="text/javascript"></script>

<!--  = PrettyPhoto =  -->
<script src="<?php echo base_url()?>assets/js/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript"></script>

<!--  = Custom JS =  -->

<script src="<?php echo base_url()?>assets/js/pages/login.js" type="text/javascript" ></script>
<!-- jQuery validate -->
<script src="<?php echo base_url()?>assets/js/jquery.validate.min.js"></script>
<!-- rate -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/rate/jRating.jquery.js"></script>

<?php if (isset($page_js) && $page_js != '') : ?>
    <script src="<?php echo base_url();?>assets/js/pages/<?php echo $page_js;?>.js"></script>
<?php endif; ?>