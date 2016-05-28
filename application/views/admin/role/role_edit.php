
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                <?=$item->Role?>
                <small>Edit Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="<?php echo site_url('admin/role');?>"> Role</a></li>
                <li class="active">Edit Role</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="col-md-8 col-md-push-2">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"> <?=$item->Role?></h3>
                    </div><!-- /.box-header -->
                    
                    <!-- form start -->
                    <br/>
                    <div class="alert alert-success alert-dismissable notification" style="display: none">
                        <i class="fa fa-check"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Notice!</b> <span class="msgsuccess">Successfully edited item!</span>
                        <br> Click <a href="<?php echo site_url('admin/role');?>">here</a> to view role list
                    </div>
                    <div class="alert alert-danger alert-dismissable notification" style="display: none">
                        <i class="fa fa-ban"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Error!</b> <span class="msgsuccess">Please try again</span>
                    </div>
                    <form role="form" id="editForm" action="<?php echo site_url('admin/role/doEdit/' . $item->RoleID);?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Role</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter new name" value="<?=$item->Role?>">
                            </div>
                            <div class="form-group">
                                <label for="rolestatus">Status</label>
                                <textarea id="rolestatus" name="rolestatus" class="form-control" maxlength="140"><?=$item->RoleStatus?></textarea>
                            </div>
                            

                            
                                    <!-- <input type="hidden" name="itemID" value="<?=$item->id?>" /> -->

                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box -->
            </div><!--/.col (right) -->

        </section><!-- /.content