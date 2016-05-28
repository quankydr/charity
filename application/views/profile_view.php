<!--  ==========  -->
<!--  = Breadcrumbs =  -->
<!--  ==========  -->
<div class="darker-stripe">
    <div class="container">
        <div class="row">
            <div class="span12">
                <ul class="breadcrumb">
                    <li>
                        <a href="<?php echo site_url();?>">Supermarket</a>
                    </li>
                    <li><span class="icon-chevron-right"></span></li>
                    <li>
                        <a href="$">My profile</a>
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
                        <h3><span class="light"></span> Menu</h3>
                    </div>

                    <!--  ==========  -->
                    <!--  = Menu (affix) =  -->
                    <!--  ==========  -->
                    <div class="row">
                        <div class="span3" id="spyMenu">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="active"><a href="#accountInfo">Account information <i class="icon-caret-right pull-right"></i></a></li>
                                <li><a href="#orderHistory">Order History <i class="icon-caret-right pull-right"></i></a></li>
                                <li><a href="#changePassword">Change password <i class="icon-caret-right pull-right"></i></a></li>
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
                    <h3><span class="light">Account</span> Informations</h3>
                </div> <!-- /title -->

                <!--  ==========  -->
                <!--  = Account Information =  -->
                <!--  ==========  -->
                <section id="accountInfo">
                    <h3 class="push-down-20"><span class="light">Important!</span> You have to provide all of following informations in order to shopping with us</h3>
                    <form id="changeInfoForm" action="<?php echo site_url('profile/update');?>" method="post" class="form-horizontal form-checkout">

                        <div class="control-group">
                            <label class="control-label" for="account">Account<span class="red-clr bold"></span></label>
                            <div class="controls">
                                <input type="text" id="account" name="account" class="span3 card-num-input left-align" maxlength="4" value="<?=$customer->Cus_Account?>" disabled="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="password">Password<span class="red-clr bold"></span></label>
                            <div class="controls">
                                <input type="text" id="password" name="password" class="span3 card-num-input left-align" maxlength="4" value="************" disabled="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="firstName">First Name<span class="red-clr bold"></span></label>
                            <div class="controls">
                                <input type="text" id="firstName" name="firstName"   class="span3 left-align"  value="<?php formatNullString($customer->Cus_FirstName);?>">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="middleName">Middle Name<span class="red-clr bold"></span></label>
                            <div class="controls">
                                <input type="text" id="middleName" name="middleName"   class="span3 left-align"  value="<?php formatNullString($customer->Cus_MiddleName);?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="lastName">Last Name<span class="red-clr bold">*</span></label>
                            <div class="controls">
                                <input type="text" id="lastName" name="lastName" required class="span3 left-align"  value="<?php formatNullString($customer->Cus_LastName);?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="houseNo">House No<span class="red-clr bold">*</span></label>
                            <div class="controls">
                                <input type="text" id="houseNo" name="houseNo" required class="span3 left-align"  value="<?php formatNullString($customer->Cus_HouseNo);?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="street">Street<span class="red-clr bold">*</span></label>
                            <div class="controls">
                                <input type="text" id="street" name="street" required class="span3 left-align"  value="<?php formatNullString($customer->Cus_Street);?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="city">City<span class="red-clr bold">*</span></label>
                            <div class="controls">
                                <input type="text" id="city" name="city" required class="span3 left-align"  value="<?php formatNullString($customer->Cus_City);?>">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="phone">Phone<span class="red-clr bold">*</span></label>
                            <div class="controls">
                                <input type="text" id="phone" name="phone" required class="span3 left-align"  value="<?php formatNullString($customer->Cus_Phone);?>">
                            </div>
                        </div> 
                        
                        <?php $ccnumber = $customer->Cus_CCNumber; 
                            if($ccnumber) : 
                                $listCC = explode(" ", $ccnumber) ;
                        ?>
                        <div class="control-group">
                            <label class="control-label" for="cardNum">Card Number<span class="red-clr bold">*</span></label>
                            <div class="controls">
                                <input type="text" name="cardNum1" id="cardNum1" class="span1 card-num-input center-align" maxlength="4" value="<?=$listCC[0]?>">
                                <input type="text" name="cardNum2" id="cardNum2" class="span1 card-num-input center-align" maxlength="4" value="<?=$listCC[1]?>">
                                <input type="text" name="cardNum3" id="cardNum3" class="span1 card-num-input center-align" maxlength="4" value="<?=$listCC[2]?>">
                                <input type="text" name="cardNum4" id="cardNum4" class="span1 card-num-input center-align add-tooltip" maxlength="4" data-title="The 16 digits on the front of the card" data-original-title="" title="" value="<?=$listCC[3]?>">

                            </div>
                        </div>
                        <?php else: ?>
                        <div class="control-group">
                            <label class="control-label" for="cardNum">Card Number<span class="red-clr bold">*</span></label>
                            <div class="controls">
                                <input type="text" name="cardNum1" id="cardNum1" class="span1 card-num-input center-align" maxlength="4">
                                <input type="text" name="cardNum2" id="cardNum2" class="span1 card-num-input center-align" maxlength="4">
                                <input type="text" name="cardNum3" id="cardNum3" class="span1 card-num-input center-align" maxlength="4">
                                <input type="text" name="cardNum4" id="cardNum4" class="span1 card-num-input center-align add-tooltip" maxlength="4" data-title="The 16 digits on the front of the card" data-original-title="" title="">

                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="control-group">
                            <label class="control-label" for="exp">Expiration Date<span class="red-clr bold">*</span></label>
                            <div class="controls">
                                <select id="exp" name="month" class="input-small month-push-right">
                                    <option value="-1">Month</option>
                                    <option value="1" <?php if($customer->Cus_CCValidMonth == 1) echo ("selected='selected'");?> >01</option>     
                                    <option value="2" <?php if($customer->Cus_CCValidMonth == 2) echo ("selected='selected'");?> >02</option>     
                                    <option value="3" <?php if($customer->Cus_CCValidMonth == 3) echo ("selected='selected'");?> >03</option>     
                                    <option value="4" <?php if($customer->Cus_CCValidMonth == 4) echo ("selected='selected'");?> >04</option>     
                                    <option value="5" <?php if($customer->Cus_CCValidMonth == 5) echo ("selected='selected'");?> >05</option>     
                                    <option value="6" <?php if($customer->Cus_CCValidMonth == 6) echo ("selected='selected'");?> >06</option>     
                                    <option value="7" <?php if($customer->Cus_CCValidMonth == 7) echo ("selected='selected'");?> >07</option>     
                                    <option value="8" <?php if($customer->Cus_CCValidMonth == 8) echo ("selected='selected'");?> >08</option>     
                                    <option value="9" <?php if($customer->Cus_CCValidMonth == 9) echo ("selected='selected'");?> >09</option>     
                                    <option value="10" <?php if($customer->Cus_CCValidMonth == 10) echo ("selected='selected'");?> >10</option>     
                                    <option value="11" <?php if($customer->Cus_CCValidMonth == 11) echo ("selected='selected'");?> >11</option>     
                                    <option value="12" <?php if($customer->Cus_CCValidMonth == 12) echo ("selected='selected'");?> >12</option>       

                                </select>
                                <select id="exp" name="year" class="input-small">
                                    <option value="-1">Year</option>
                                    <option value="2013" <?php if($customer->Cus_CCValidYear == 2013) echo ("selected='selected'");?> >2013</option>
                                    <option value="2014" <?php if($customer->Cus_CCValidYear == 2014) echo ("selected='selected'");?> >2014</option>
                                    <option value="2015" <?php if($customer->Cus_CCValidYear == 2015) echo ("selected='selected'");?> >2015</option>
                                    <option value="2016" <?php if($customer->Cus_CCValidYear == 2016) echo ("selected='selected'");?> >2016</option>
                                    <option value="2017" <?php if($customer->Cus_CCValidYear == 2017) echo ("selected='selected'");?> >2017</option>
                                    <option value="2018" <?php if($customer->Cus_CCValidYear == 2018) echo ("selected='selected'");?> >2018</option>
                                    <option value="2019" <?php if($customer->Cus_CCValidYear == 2019) echo ("selected='selected'");?> >2019</option>
                                    <option value="2020" <?php if($customer->Cus_CCValidYear == 2020) echo ("selected='selected'");?> >2020</option>  

                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="cvc">CVC or CVS<span class="red-clr bold">*</span></label>
                            <div class="controls">
                                <input id="cvc" name="cvc" type="text" class="span1 center-align add-tooltip" maxlength="3" data-title="Last 3 digits on back of card" required  value="<?=$customer->Cus_CCCVS?>">
                            </div>
                        </div>
                        <input type="hidden" name="customerID" value="<%=customer->Cus_ID()%>" />
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn btn-primary higher bold">Update</button>

                            </div>
                        </div>
                        <div class="alert alert-danger in fade notification error-change" style="display:none">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            Please try again
                        </div>
                        <div class="alert alert-success in fade notification success-change" style="display:none">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            You have successfully updated your information
                        </div>
                    </form>
                    <hr />

                </section>

                <!--  ==========  -->
                <!--  = Order History =  -->
                <!--  ==========  -->
                <section id="orderHistory">
                    <h3 class="push-down-20"><span class="light">Order</span> History</h3>
            
                    <?php if(count($listOrders) > 0 ) : ?>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Total Amount</th>
                                <th>Submit date</th>
                                <th>Status</th>
                                <th>View detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listOrders as $bill) : ?>
                            <tr>
                                <td><?=$bill->Bill_ID?></td>
                                <td><?=$bill->Bill_Amount?></td>
                                <td><?=$bill->Bill_SubmitDate?></td>
                                <td><?=orderUserStatusInString($bill->Bill_Status);?></td>
                                <td><a href="<?php echo site_url('order/view/' . $bill->Bill_ID);?>">View detail</a></td>
                            </tr>
                            <?php endforeach; ?>


                        </tbody>
                    </table>
                    <?php else : ?>
                    <h1>No record found</h1>
                    <?php endif; ?>
                </section>

                <hr />

                <!--  ==========  -->
                <!--  = Change password =  -->
                <!--  ==========  -->
                <section id="changePassword">
                    <h3 class="push-down-20"><span class="light">Change</span> Password</h3>

                    <form id="changePasswordform" action="<?php echo site_url('profile/updatePassword/' .$customer->Cus_ID);?>" method="post" class="form-horizontal form-checkout">


                        <div class="control-group">
                            <label class="control-label" for="oldpassword">Old Password<span class="red-clr bold"></span></label>
                            <div class="controls">
                                <input type="password" id="oldpassword" name="oldpassword" class="span3 card-num-input left-align"  maxlength="12">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="newpassword">New Password<span class="red-clr bold"></span></label>
                            <div class="controls">
                                <input type="password" id="newpassword" name="newpassword" class="span3 card-num-input left-align"  maxlength="12">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="confirmpassword">Confirm Password<span class="red-clr bold"></span></label>
                            <div class="controls">
                                <input type="password" id="confirmpassword" name="confirmpassword" class="span3 card-num-input left-align"  maxlength="12">
                            </div>
                        </div>



                        <input type="hidden" name="customerID" value="<?=$customer->Cus_ID?>" />
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn btn-primary higher bold">Change</button>

                            </div>
                        </div>
                        <div class="alert alert-danger in fade notification error-changepw" style="display:none">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <span class="change-msg-err">Please try again</span>
                        </div>
                        <div class="alert alert-success in fade notification success-changepw" style="display:none">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            You have successfully changed your password
                        </div>
                    </form>

                </section>

                <hr />





            </section> <!-- /main content -->
        </div>
    </div>
</div> <!-- /container -->
