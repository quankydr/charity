<section class="content-header">
                <h1>
                    Invoice
                    <small>#007612</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="<?php echo site_url('admin/order');?>">Order</a></li>
                    <li class="active">Order detail</li>
                </ol>
            </section>

            <div class="pad margin no-print">
                <div class="alert alert-info" style="margin-bottom: 0!important;">
                    <i class="fa fa-info"></i>
                    <b>Note:</b> This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
                </div>
            </div>

            <!-- Main content -->
            <section class="content invoice">
                <!-- title row -->
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="page-header">
                            <i class="fa fa-globe"></i> Supermarket Online System
                            <small class="pull-right">Order Date: <?=$order->Bill_SubmitDate?></small>
                    </h2>
                </div><!-- /.col -->
            </div>
            <!-- info row -->
            
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    From
                    <address>
                        <strong>Supermarket System.</strong><br>
                        19 Nguyen Trai<br>
                        Hanoi, Vietnam<br>
                        Phone: (04) 3563 7511<br>
                        Email: : aptech@indochinapro.com
                    </address>
                </div><!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    To
                    <address>
                        <strong><?=$customer->Cus_FirstName?> <?=$customer->Cus_LastName?></strong><br>
                        <?=$customer->Cus_HouseNo?> <?=$customer->Cus_Street?><br>
                        <?=$customer->Cus_City?><br>
                        <?=$customer->Cus_Phone?><br>
                    </address>
                </div><!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    <b>Order no #<?=$order->Bill_ID?></b><br>
                    <b>Account:</b> <?=$customer->Cus_Account?>
                </div><!-- /.col -->
            </div><!-- /.row -->


            
            <?php if ($order->Bill_Status == 2) : ?>
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    <img src="<?php echo base_url();?>assets/app_images/paid.jpeg" alt="paid"/>
                </div><!-- /.col -->

            </div><!-- /.row -->
            <?php else : if ($order->Bill_Status == -1) : ?>
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    <img src="<?php echo base_url();?>assets/app_images/cancel.jpg" alt="Cancelled"/>
                </div><!-- /.col -->

            </div><!-- /.row -->
            <?php endif; endif;?> 

            <!-- Table row -->
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Quantity</th>
                                <th>Product Name</th>
                                <th>Product ID </th>
                                <th>Price</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listDetails as $detail) : ?>
                            <tr>
                                <td><?=$detail->Quantity?></td>
                                <td><?=$detail->Pro_Name?></td>
                                <td><?=$detail->Pro_ID?></td>
                                <td>$<?php formatMoney($detail->Price);?></td>
                                <td>$<?php formatMoney($detail->SubTotal);?></td>
                            </tr>
                            <?php endforeach ;?>
                        </tbody>
                    </table>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <div class="row">

                <div class="col-xs-6 pull-right">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Total:</th>
                                    <td>$<?php formatMoney($order->Bill_Amount);?></td>
                                </tr>
                            </tbody></table>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-xs-12">
                    <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                    <?php if ($order->Bill_Status == 0) : 
                    
                            //Unconfirm order
                    ?>
                    <button class="btn btn-success pull-right doConfirm" data-href="<?php echo site_url('admin/order/doConfirm/' . $order->Bill_ID);?>"><i class="fa fa-check-circle"></i> Confirm order</button>
                    <?php else : if ($order->Bill_Status == 1) : ?>
                    <button class="btn btn-success pull-right doApprove" data-href="<?php echo site_url('admin/order/doApprove/' . $order->Bill_ID);?>" > <i class="fa fa-credit-card"></i> Approve order</button>
                    <button class="btn btn-primary pull-right doUnconfirm" data-href="<?php echo site_url('admin/order/doUnconfirm/' . $order->Bill_ID);?>" style="margin-right: 5px;" ><i class="fa fa-undo"></i> Disconfirm order</button>

                    <?php else : if ($order->Bill_Status == 2) : ?>

                    <?php else : ?>
                    <button class="btn btn-primary pull-right doRestore" data-href="ajax/doUnconfirmOrder.jsp?id=<?=$order->Bill_ID?>" style="margin-right: 5px;" ><i class="fa fa-undo"></i> Restore order</button>
                    <?php endif; endif; endif; ?>
                </div>
            </div>

            <div class="row no-print">
                <div class="col-xs-12">
                    <div class="alert alert-danger alert-dismissable notification alert-danger-nt" style="display: none">
                        <i class="fa fa-check"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Error!</b> <span class="msgEror">Please try again</span>
                    </div>
                </div>
            </div>
                <br/>
                <?php if ($order->Bill_Status == 0) : ?>
            <div class="row no-print push-down-20">
                <div class="col-xs-12">
                    <form role="form" id="formRemove" method="post" action="ajax-remove/doRemoveOrder.jsp?id=<?=$order->Bill_ID?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="reason">Give the reason if you want to cancel the order</label>
                                <textarea class="form-control" name="reason" id="reason" placeholder="Give the reason"></textarea>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Cancel this order</button>
                        </div>
                    </form>
                    <div class="alert alert-danger alert-dismissable notification alert-danger-remove" style="display: none">
                        <i class="fa fa-check"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Error!</b> <span class="msgEror-remove">Please try again</span>
                    </div>
                </div>
            </div>
                        <?php endif; ?>
        </section><!-- /.content -->