
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                <?=$item->AdminAccount?>
                <small>Edit Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="<?php echo site_url('admin/admin');?>"> Admin</a></li>
                <li class="active">Edit Admin</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="col-md-8 col-md-push-2">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"> <?=$item->AdminAccount?></h3>
                    </div><!-- /.box-header -->
                    
                    <!-- form start -->
                    <br/>
                    <div class="alert alert-success alert-dismissable notification" style="display: none">
                        <i class="fa fa-check"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Notice!</b> <span class="msgsuccess">Successfully delete item!</span>
                        <br> Click <a href="<?php echo site_url('admin/admin');?>">here</a> to view admin list
                    </div>
                    <div class="alert alert-danger alert-dismissable notification" style="display: none">
                        <i class="fa fa-ban"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Error!</b> <span class="msgsuccess">Please try again</span>
                    </div>
                    <form role="form" id="editForm" action="<?php echo site_url('admin/admin/doDelete/' . $item->AdminID);?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="adminstatus">Do you want to delete this account?</label>
                                <input type="hidden" id="adminstatus" name="adminstatus" class="form-control" value = "-1">

                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Delete</button>
                        </div>
                        
                    </form>
                </div><!-- /.box -->
            </div><!--/.col (right) -->

        </section><!-- /.content