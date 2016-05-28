
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                <?=$item->name?>
                <small>Edit Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="<?php echo site_url('admin/sport');?>"> Sport</a></li>
                <li class="active">Edit Sport</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="col-md-8 col-md-push-2">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"> <?=$item->name?></h3>
                    </div><!-- /.box-header -->
                    <div class="box-footer">
                        <a class="btn btn-primary" href="<?php echo site_url('admin/sport/' . $item->id);?>">View all clubs with this sport</a>
                    </div>
                    <!-- form start -->
                    <br/>
                    <div class="alert alert-success alert-dismissable notification" style="display: none">
                        <i class="fa fa-check"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Notice!</b> <span class="msgsuccess">Successfully edited item!</span>
                        <br> Click <a href="<?php echo site_url('admin/sport');?>">here</a> to view sport list
                    </div>
                    <div class="alert alert-danger alert-dismissable notification" style="display: none">
                        <i class="fa fa-ban"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Error!</b> <span class="msgsuccess">Please try again</span>
                    </div>
                    <form role="form" id="editForm" action="<?php echo site_url('admin/sport/doEdit/' . $item->id);?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter new name" value="<?=$item->name?>">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>

                                <select class="form-control" id="status"  name ="status">
                                    <?php if ($item->status == 1): ?>
                                    <option value="1" selected="selected"><?php echo statusInString('1');?></option>
                                    <option value="0"><?php echo statusInString('0');?></option>
                                    <?php else : ?>
                                    <option value="1" ><?php echo statusInString('1');?></option>
                                    <option value="0" selected="selected"><?php echo statusInString('0');?></option>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box -->
            </div><!--/.col (right) -->

        </section><!-- /.content
