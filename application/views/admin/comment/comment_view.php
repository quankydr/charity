<section class="content-header">
    <h1>
        Comment
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Comment</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">


            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List Comment</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="dataTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Product name</th>
                                <th>Time</th>
                                <th>Status</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        foreach ($all_comment as $item) : ?>
                            
                            <tr>
                                <td title="Hello"><?=$item->Cm_ID?></td>
                                <td><?=$item->Cm_Email?></td>
                                <td><?=$item->Pro_Name?></td>
                                <td><?=$item->Cm_Time?></td>
                                <td><?php echo statusInString($item->Cm_Status); ?></td>
                                <td><a class="removeCommentFromProduct" href="<?php echo site_url('admin/comment/removeComment/' . $item->Pro_ID . '/' . $item->Cm_ID);?>">Remove</a>  </td>
                            </tr>
                          <?php endforeach;?>


                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Remove</th>
                        </tr>
                    </tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>


        </section><!-- /.content -->