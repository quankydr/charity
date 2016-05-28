<section class="content-header">
    <h1>
        <?=$item->Cus_FirstName?>
        <small>Edit Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url('admin/customer');?>"> Customer</a></li>
        <li class="active">Edit Customer's profile</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="col-md-8 col-md-push-2">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title"> <?=$item->Cus_FirstName?>'s profile</h3>
            </div><!-- /.box-header -->
            <!-- form start -->

            <form role="form" id="editForm" action="<?php echo site_url('admin/customer/doEdit/' . $item->Cus_ID);?>">
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">First Name</label>
                        <input type="text" class="form-control" name="firstName" id="firstName" value="<?=$item->Cus_FirstName?>" placeholder="Enter frst name">
                    </div>

                    <div class="form-group">
                        <label for="middleName">Middle name</label>
                        <input type="text" class="form-control" name="middleName" id="middleName" value="<?=$item->Cus_MiddleName?>" placeholder="Enter middle name">
                    </div>

                    <div class="form-group">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" name="lastName" id="lastName" value="<?=$item->Cus_LastName?>" placeholder="Enter last name">
                    </div>

                    <div class="form-group">
                        <label for="houseNo">House No</label>
                        <input type="text" class="form-control" name="houseNo" id="houseNo" value="<?=$item->Cus_HouseNo?>" placeholder="Enter house no">
                    </div>

                    <div class="form-group">
                        <label for="street">Street</label>
                        <input type="text" class="form-control" name="street" id="street" value="<?=$item->Cus_Street?>" placeholder="Enter street">
                    </div>

                    <div class="form-group">
                        <label for="city">City </label>
                        <input type="text" class="form-control" name="city" id="city" value="<?=$item->Cus_City?>" placeholder="Enter city">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone </label>
                        <input type="text" class="form-control" name="phone" id="phone" value="<?=$item->Cus_Phone?>" placeholder="Enter phone">
                    </div>

                    <label for="cardNum1">Card Number </label>
                    <div class="form-group">
                        <?php 
                        if ($item->Cus_CCNumber != "") :
                            $listNums = explode(" ", $item->Cus_CCNumber); 
                        ?>
                        <div class="controls col-xs-3">
                            <input type="text" name="cardNum1" id="cardNum1" class="form-control card-num-input center-align" maxlength="4" value="<?php echo $listNums[0];?>">
                        </div>
                        <div class="controls col-xs-3">
                            <input type="text" name="cardNum2" id="cardNum2" class="form-control  card-num-input center-align" maxlength="4" value="<?php echo $listNums[1];?>">
                        </div>
                        <div class="controls col-xs-3">
                            <input type="text" name="cardNum3" id="cardNum3" class="form-control  card-num-input center-align" maxlength="4" value="<?php echo $listNums[2];?>">
                        </div>
                        <div class="controls col-xs-3">
                            <input type="text" name="cardNum4" id="cardNum4" class="form-control  card-num-input center-align" maxlength="4" value="<?php echo $listNums[3];?>">
                        </div>
                    <?php else : ?>
                        <div class="controls col-xs-3">
                            <input type="text" name="cardNum1" id="cardNum1" class="form-control card-num-input center-align" maxlength="4">
                        </div>
                        <div class="controls col-xs-3">
                            <input type="text" name="cardNum2" id="cardNum2" class="form-control  card-num-input center-align" maxlength="4">
                        </div>
                        <div class="controls col-xs-3">
                            <input type="text" name="cardNum3" id="cardNum3" class="form-control  card-num-input center-align" maxlength="4">
                        </div>
                        <div class="controls col-xs-3">
                            <input type="text" name="cardNum4" id="cardNum4" class="form-control  card-num-input center-align" maxlength="4">
                        </div>
                    <?php endif; ?>

                </div>
                <br/>

                <div class="form-group">
                    <label for="cvc">Month </label>
                    <select name="month" class="form-control">
                        <option value="-1">Month</option>
                        <option value="1" <?php if($item->Cus_CCValidMonth == 1) echo ("selected='selected'");?> >01</option>     
                        <option value="2" <?php if($item->Cus_CCValidMonth == 2) echo ("selected='selected'");?> >02</option>     
                        <option value="3" <?php if($item->Cus_CCValidMonth == 3) echo ("selected='selected'");?> >03</option>     
                        <option value="4" <?php if($item->Cus_CCValidMonth == 4) echo ("selected='selected'");?> >04</option>     
                        <option value="5" <?php if($item->Cus_CCValidMonth == 5) echo ("selected='selected'");?> >05</option>     
                        <option value="6" <?php if($item->Cus_CCValidMonth == 6) echo ("selected='selected'");?> >06</option>     
                        <option value="7" <?php if($item->Cus_CCValidMonth == 7) echo ("selected='selected'");?> >07</option>     
                        <option value="8" <?php if($item->Cus_CCValidMonth == 8) echo ("selected='selected'");?> >08</option>     
                        <option value="9" <?php if($item->Cus_CCValidMonth == 9) echo ("selected='selected'");?> >09</option>     
                        <option value="10" <?php if($item->Cus_CCValidMonth == 10) echo ("selected='selected'");?> >10</option>     
                        <option value="11" <?php if($item->Cus_CCValidMonth == 11) echo ("selected='selected'");?> >11</option>     
                        <option value="12" <?php if($item->Cus_CCValidMonth == 12) echo ("selected='selected'");?> >12</option>    
                    </select>
                </div>

                <div class="form-group">
                    <label for="cvc">Year </label>
                    <select name="year" class="form-control">
                        <option value="-1">Year</option>
                        <option value="2013" <?php if($item->Cus_CCValidYear == 2013) echo ("selected='selected'");?> >2013</option>
                        <option value="2014" <?php if($item->Cus_CCValidYear == 2014) echo ("selected='selected'");?> >2014</option>
                        <option value="2015" <?php if($item->Cus_CCValidYear == 2015) echo ("selected='selected'");?> >2015</option>
                        <option value="2016" <?php if($item->Cus_CCValidYear == 2016) echo ("selected='selected'");?> >2016</option>
                        <option value="2017" <?php if($item->Cus_CCValidYear == 2017) echo ("selected='selected'");?> >2017</option>
                        <option value="2018" <?php if($item->Cus_CCValidYear == 2018) echo ("selected='selected'");?> >2018</option>
                        <option value="2019" <?php if($item->Cus_CCValidYear == 2019) echo ("selected='selected'");?> >2019</option>
                        <option value="2020" <?php if($item->Cus_CCValidYear == 2020) echo ("selected='selected'");?> >2020</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="cvc">CVC or CVS </label>

                    <input type="text" name="cvc" id="cvc" class="form-control  card-num-input center-align" maxlength="3" value="<?=$item->Cus_CCCVS?>" >

                </div>

                <div class="form-group">
                    <label for="status">Status</label>

                    <select class="form-control" id="status"  name ="status">
                        <?php if ($item->Cus_Status == 1): ?>
                                    <option value="1" selected="selected"><?php echo statusInString('1');?></option>
                                    <option value="0"><?php echo statusInString('0');?></option>
                                    <?php else : ?>
                                    <option value="1" ><?php echo statusInString('1');?></option>
                                    <option value="0" selected="selected"><?php echo statusInString('0');?></option>
                                    <?php endif; ?>
                    </select>
                </div>
                <input type="hidden" name="itemID" value="<?=$item->Cus_ID?>" >
            </div><!-- /.box-body -->

            <br/>
            <div class="alert alert-success alert-dismissable notification" style="display: none">
                <i class="fa fa-check"></i>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <b>Notice!</b> <span class="msgsuccess">Successfully edited item!</span>
                <br> Click <a href="<?php echo site_url('admin/customer');?>">here</a> to view customer list
            </div>
            <div class="alert alert-danger alert-dismissable notification" style="display: none">
                <i class="fa fa-ban"></i>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <b>Error!</b> <span class="msgsuccess">Please try again</span>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>


    </div><!-- /.box -->
</div><!--/.col (right) -->

        </section><!-- /.content -->