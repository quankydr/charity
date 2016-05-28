<section class="content-header">
                <h1>
                    Orders
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Orders</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Order List</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body table-responsive">
                                <table id="dataTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Cus_Name</th>
                                            <th>Total Amount</th>
                                            <th>Status</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($all_order as $item) : 
                                        if($item->Bill_Status == 0) : 
                                    ?>
                                        <tr style="color:#428bca; font-weight: bold">
                                    <?php else : if ($item->Bill_Status == 1) : ?>
                                        <tr style="font-weight: bold">
                                    <?php else : ?>
                                        <tr>
                                    <?php endif; endif; ?>
                                        <td><?=$item->Bill_ID?></td>
                                        <td><?=$item->Cus_FirstName?> <?=$item->Cus_LastName?></td>
                                        <td><?=$item->Bill_Amount?></td>
                                        <td><?php echo orderAdminStatusInString($item->Bill_Status); ?></td>
                                        <td><a href="<?php echo site_url('admin/order/view/' . $item->Bill_ID);?>">View detail</a>  </td>
                                    </tr>
                                    <?php endforeach; ?>


                                </tbody>
                                <tfoot>
                                    <tr>
                                    <tr>
                                    <tr>
                                        <th>ID</th>
                                        <th>Cus_Name</th>
                                        <th>Total Amount</th>
                                        <th>Status</th>
                                        <th>View</th>
                                    </tr>
                                    </tr>
                                    </tr>
                                </tfoot>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>


        </section><!-- /.content -->