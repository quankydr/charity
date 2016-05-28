
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                <?=$item->UserFullName?>
                <small>Edit Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="<?php echo site_url('admin/user');?>"> User</a></li>
                <li class="active">Edit User</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="col-md-8 col-md-push-2">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"> <?=$item->UserFullName?></h3>
                    </div><!-- /.box-header -->
                    
                    <!-- form start -->
                    <br/>
                    <div class="alert alert-success alert-dismissable notification" style="display: none">
                        <i class="fa fa-check"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Notice!</b> <span class="msgsuccess">Successfully edited item!</span>
                        <br> Click <a href="<?php echo site_url('admin/user');?>">here</a> to view user list
                    </div>
                    <div class="alert alert-danger alert-dismissable notification" style="display: none">
                        <i class="fa fa-ban"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Error!</b> <span class="msgsuccess">Please try again</span>
                    </div>
                    <form role="form" id="editForm" action="<?php echo site_url('admin/user/doEdit/' . $item->UserID);?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter new name" value="<?=$item->UserFullName?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <textarea id="email" name="email" class="form-control" maxlength="140"><?=$item->UserEmail?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="display">Display</label>
                                <textarea id="display" name="display" class="form-control" maxlength="140"><?=$item->UserDisplay?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <textarea id="phone" name="phone" class="form-control" maxlength="140"><?=$item->UserPhone?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea id="address" name="address" class="form-control" maxlength="140"><?=$item->UserAddress?></textarea>
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