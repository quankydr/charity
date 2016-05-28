<section class="content-header">
                <h1>
                    Statistic
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Statistic</li>
                </ol>
            </section>


            <div class="col-md-8 col-md-push-2">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom ">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Product</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Group</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Category</a></li>
                        <li><a href="#tab_4" data-toggle="tab">Brand</a></li>
                        <li><a href="#tab_5" data-toggle="tab">Overall</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <div class="row">
                                <!-- left column -->

                                <!-- right column -->
                                <br/>
                                <div class="col-md-8 col-md-push-2 ">
                                    <!-- general form elements -->
                                    <div class="box box-primary">
                                        <div class="box-header">
                                            <h3 class="box-title">View Product statistic</h3>
                                        </div><!-- /.box-header -->
                                        <br/>
                                        <!-- form start -->
                                        <form role="formProduct" id="formProduct" method="post" action="<?php echo site_url('admin/report');?>">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="name">Product name</label>

                                                <select name="itemid">
                                                    <?php foreach ($all_product as $product) : ?>
                                                    <option value="<?=$product->Pro_ID?>"><?=$product->Pro_Name?></option>

                                                    <?php endforeach; ?>
                                                </select>

                                            </div>

                                            <div class="form-group">
                                                <label for="startdate">Start Time </label>
                                                <input type="text" class="form-control" name="startdate" id="startdate" placeholder="Enter Start Date" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask="">
                                            </div>
                                            <div class="form-group">
                                                <label for="enddate">End Time </label>
                                                <input type="text" class="form-control" name="enddate" id="enddate" placeholder="Enter End Date" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask="">
                                            </div>
                                            <div class="form-group">
                                                <label for="enddate">Group by </label>
                                                <select class="form-control" name="groupby" id="groupby">
                                                    <option value="NO">No time group</option>
                                                    <option value="DAY">Day</option>
                                                    <option value="MONTH">Month</option>
                                                    <option value="YEAR">Year</option>
                                                </select>
                                            </div>


                                        </div><!-- /.box-body -->

                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">View</button>

                                        </div>
                                    </form>

                                </div><!-- /.box -->




                            </div><!--/.col (right) -->
                        </div>   <!-- /.row -->   
                    </div><!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                        <div class="row">
                            <!-- left column -->

                            <!-- right column -->
                            <br/>
                            <div class="col-md-8 col-md-push-2 ">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title">View Group statistic</h3>
                                    </div><!-- /.box-header -->
                                    <br/>
                                    <!-- form start -->
                                    <form role="formGroup" id="form" method="post" action="<?php echo site_url('admin/report');?>">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="name">Group name</label>
                                                
                                                <select name="itemid">
                                                    <?php foreach ($all_group as $group) : ?>
                                                    <option value="<?=$group->Gr_ID?>"><?=$group->Gr_Name?></option>

                                                    <?php endforeach ; ?>
                                                </select>

                                            </div>
                                            <input type="hidden" name="type" value="group" />
                                            <div class="form-group">
                                                <label for="startdate">Start Time </label>
                                                <input type="text" class="form-control" name="startdate" id="startdate" placeholder="Enter Start Date" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask="">
                                            </div>
                                            <div class="form-group">
                                                <label for="enddate">End Time </label>
                                                <input type="text" class="form-control" name="enddate" id="enddate" placeholder="Enter End Date" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask="">
                                            </div>
                                            <div class="form-group">
                                                <label for="enddate">Group by </label>
                                                <select class="form-control" name="groupby" id="groupby">
                                                    <option value="NO">No time group</option>
                                                    <option value="DAY">Day</option>
                                                    <option value="MONTH">Month</option>
                                                    <option value="YEAR">Year</option>
                                                </select>
                                            </div>





                                        </div><!-- /.box-body -->

                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">View</button>

                                        </div>
                                    </form>

                                </div><!-- /.box -->




                            </div><!--/.col (right) -->
                        </div>   <!-- /.row -->   
                    </div><!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3">
                        <div class="row">
                            <!-- left column -->

                            <!-- right column -->
                            <br/>
                            <div class="col-md-8 col-md-push-2 ">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title">View Category statistic</h3>
                                    </div><!-- /.box-header -->
                                    <br/>
                                    <!-- form start -->
                                    <form role="form" id="formCategory" method="post" action="<?php echo site_url('admin/report');?>">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="name">Category name</label>
                                                
                                                <select name="itemid">
                                                    <?php foreach ($all_category as $item) : ?>
                                                    <option value="<?=$item->Cat_ID?>"><?=$item->Cat_Name?></option>

                                                    <?php endforeach ; ?>
                                                </select>

                                            </div>
                                            <input type="hidden" name="type" value="category" />
                                            <div class="form-group">
                                                <label for="startdate">Start Time </label>
                                                <input type="text" class="form-control" name="startdate" id="startdate" placeholder="Enter Start Date" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask="">
                                            </div>
                                            <div class="form-group">
                                                <label for="enddate">End Time </label>
                                                <input type="text" class="form-control" name="enddate" id="enddate" placeholder="Enter End Date" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask="">
                                            </div>
                                            <div class="form-group">
                                                <label for="enddate">Group by </label>
                                                <select class="form-control" name="groupby" id="groupby">
                                                    <option value="NO">No time group</option>
                                                    <option value="DAY">Day</option>
                                                    <option value="MONTH">Month</option>
                                                    <option value="YEAR">Year</option>
                                                </select>
                                            </div>





                                        </div><!-- /.box-body -->

                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">View</button>

                                        </div>
                                    </form>

                                </div><!-- /.box -->




                            </div><!--/.col (right) -->
                        </div>   <!-- /.row -->   
                    </div><!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_4">
                        <div class="row">
                            <!-- left column -->

                            <!-- right column -->
                            <br/>
                            <div class="col-md-8 col-md-push-2 ">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title">View Brand statistic</h3>
                                    </div><!-- /.box-header -->
                                    <br/>
                                    <!-- form start -->
                                    <form role="form" id="formBrand" method="post" action="<?php echo site_url('admin/report');?>">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="name">Category name</label>
                                                
                                                <select name="itemid">
                                                    <?php foreach ($all_brand as $item) : ?>
                                                    <option value="<?=$item->P_ID?>"><?=$item->P_Name?></option>

                                                    <?php endforeach ; ?>
                                                </select>

                                            </div>
                                            <input type="hidden" name="type" value="brand" />
                                            <div class="form-group">
                                                <label for="startdate">Start Time </label>
                                                <input type="text" class="form-control" name="startdate" id="startdate" placeholder="Enter Start Date" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask="">
                                            </div>
                                            <div class="form-group">
                                                <label for="enddate">End Time </label>
                                                <input type="text" class="form-control" name="enddate" id="enddate" placeholder="Enter End Date" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask="">
                                            </div>
                                            <div class="form-group">
                                                <label for="enddate">Group by </label>
                                                <select class="form-control" name="groupby" id="groupby">
                                                    <option value="DAY">Day</option>
                                                    <option value="MONTH">Month</option>
                                                    <option value="YEAR">Year</option>
                                                </select>
                                            </div>




                                        </div><!-- /.box-body -->

                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">View</button>

                                        </div>
                                    </form>

                                </div><!-- /.box -->




                            </div><!--/.col (right) -->
                        </div>   <!-- /.row -->   
                    </div><!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_5">
                        <div class="row">
                            <!-- left column -->

                            <!-- right column -->
                            <br/>
                            <div class="col-md-8 col-md-push-2 ">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title">View Overall statistic</h3>
                                    </div><!-- /.box-header -->
                                    <br/>
                                    <!-- form start -->

                                    <form role="form" id="formBrand" method="post" action="<?php echo site_url('admin/report');?>">
                                        <div class="box-body">
                                            <input type="hidden" name="type" value="all" />
                                            <div class="form-group">
                                                <label for="startdate">Start Time </label>
                                                <input type="text" class="form-control" name="startdate" id="startdate" placeholder="Enter Start Date" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask="">
                                            </div>
                                            <div class="form-group">
                                                <label for="enddate">End Time </label>
                                                <input type="text" class="form-control" name="enddate" id="enddate" placeholder="Enter End Date" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask="">
                                            </div>
                                            <div class="form-group">
                                                <label for="enddate">Group by </label>
                                                <select class="form-control" name="groupby" id="groupby">
                                                    <option value="DAY">Day</option>
                                                    <option value="MONTH">Month</option>
                                                    <option value="YEAR">Year</option>
                                                </select>
                                            </div>




                                        </div><!-- /.box-body -->

                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">View</button>

                                        </div>
                                    </form>


                                </div><!-- /.box -->




                            </div><!--/.col (right) -->
                        </div>   <!-- /.row -->   
                    </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
            </div><!-- nav-tabs-custom -->
        </div>