
<?php if (!$this->session->userdata('username') || $this->session->userdata('username') == '')  : ?>
<div class="register">
<a href="#loginModal" role="button" data-toggle="modal">Login</a> or 
<a href="#registerModal" role="button" data-toggle="modal">Register</a>                                    
                                </div>
<?php else : ?>

        Welcome back, <a href="<?php echo site_url('profile');;?>"><?php echo $this->session->userdata('username');?></a> 
<div class="register">
<a href="#" role="button" data-toggle="modal" id="logOutAnchor">Sign out</a>    
</div>


<?php endif; ?>