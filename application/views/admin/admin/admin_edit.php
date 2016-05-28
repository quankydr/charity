
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
                        <b>Notice!</b> <span class="msgsuccess">Successfully edited item!</span>
                        <br> Click <a href="<?php echo site_url('admin/admin');?>">here</a> to view admin list
                    </div>
                    <div class="alert alert-danger alert-dismissable notification" style="display: none">
                        <i class="fa fa-ban"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Error!</b> <span class="msgsuccess">Please try again</span>
                    </div>
                    <form role="form" id="editForm" action="<?php echo site_url('admin/admin/doEdit/' . $item->AdminID);?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="account">Account</label>
                                <input type="text" class="form-control" id="account" name="account" placeholder="Enter new name" value="<?=$item->AdminAccount?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" id="password" name="password" class="form-control" value = "<?=$item->AdminPassword?>">
                            </div>
                            <div class="form-group">
                                <label for="fullname">Fullname</label>
                                <input type="text" id="fullname" name="fullname" class="form-control" value = "<?=$item->AdminFullname?>">
                            </div>
                            <div class="form-group">
                                <label for="avatar">Avatar</label>
                                <input type="text" id="avatar" name="avatar" class="form-control" value = "<?=$item->AdminAvatar?>">
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <input type="text" id="role" name="role" class="form-control" value = "<?=$item->AdminRole?>">
                            </div>
                            <div class="form-group">
                                <label for="adminstatus">Status</label>
                                <input type="text" id="adminstatus" name="adminstatus" class="form-control" value = "<?=$item->AdminStatus?>">
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