<section class="content-header">
                <h1>
                    Customer
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Customer</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">


                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">List Customer</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body table-responsive">
                                <table id="dataTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($all_customer as $item) : ?>
                                    
                                    <tr>
                                        <td><?=$item->Cus_ID?></td>
                                        <td><?=$item->Cus_FirstName?> <?=$item->Cus_LastName?> <?=$item->Cus_MiddleName?></td>
                                        <td><?=$item->Cus_HouseNo?> <?=$item->Cus_Street?>, <?=$item->Cus_City?></td>
                                        <td><?=$item->Cus_Phone?></td>
                                        <td><?php echo statusInString($item->Cus_Status); ?></td>
                                        <td><a href="<?php echo site_url('admin/customer/edit/' . $item->Cus_ID);?>">Edit</a>  </td>
                                    </tr>
                                    <?php endforeach; ?>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>

            <div class="row">
                <!-- left column -->

                <!-- right column -->



                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Add new item</h3>
                        </div><!-- /.box-header -->
                        <br/>
                        <div class="alert alert-success alert-dismissable notification msg-success" style="display: none">
                            <i class="fa fa-check"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <b>Notice!</b> <span class="msgsuccess">Successfully added new item</span>
                        </div>
                        <div class="alert alert-danger alert-dismissable notification msg-error" style="display: none">
                            <i class="fa fa-ban"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <b>Error!</b> <span class="msgerror">Successfully added new item</span>
                        </div>
                        <!-- form start -->
                        <form role="form" id="form" method="post" action="<?php echo site_url('admin/customer/doAdd');?>">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">First Name</label>
                                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Enter frst name">
                                </div>

                                <div class="form-group">
                                    <label for="middleName">Middle name</label>
                                    <input type="text" class="form-control" name="middleName" id="middleName" placeholder="Enter middle name">
                                </div>

                                <div class="form-group">
                                    <label for="lastName">Last name</label>
                                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Enter last name">
                                </div>

                                <div class="form-group">
                                    <label for="houseNo">House No</label>
                                    <input type="text" class="form-control" name="houseNo" id="houseNo" placeholder="Enter house no">
                                </div>

                                <div class="form-group">
                                    <label for="street">Street</label>
                                    <input type="text" class="form-control" name="street" id="street" placeholder="Enter street">
                                </div>

                                <div class="form-group">
                                    <label for="city">City </label>
                                    <input type="text" class="form-control" name="city" id="city" placeholder="Enter city">
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone </label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone">
                                </div>
                                <label for="cardNum1">Card Number </label>
                                <div class="form-group">

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

                                </div>
                                <br/>

                                <div class="form-group">
                                    <label for="cvc">Month </label>
                                    <select name="month" class="form-control">
                                        <option value="-1">Month</option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                        <option value="5">05</option>
                                        <option value="6">06</option>
                                        <option value="7">07</option>
                                        <option value="8">08</option>
                                        <option value="9">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                                
                                 <div class="form-group">
                                    <label for="cvc">Year </label>
                                    <select name="month" class="form-control">
                                        <option value="-1">Year</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="cvc">CVC or CVS </label>

                                    <input type="text" name="cvc" id="cvc" class="form-control  card-num-input center-align" maxlength="4">

                                </div>



                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div><!-- /.box -->




                </div><!--/.col (right) -->
            </div>   <!-- /.row -->                
        </section><!-- /.content -->