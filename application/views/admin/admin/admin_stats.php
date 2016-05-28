<section class="content-header">
                <h1>

                    <?=$info->AdminAccount?>
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Staff</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">


                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Question List</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body table-responsive">
                                <table id="dataTable2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Question</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Answer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($all_question as $item) : ?>
                                    <tr>
                                        <td><?=$item->QuesID?></td>
                                        <td><?=$item->Content?></td>
                                        <td><?php echo questionStatusInString($item->QuesStatus); ?></td>
                                        <td><a href="<?php echo site_url('admin/question/edit/' . $item->QuesID);?>">Edit</a>  </td>
                                        <td><a href="<?php echo site_url('admin/answer/edit/' . $item->QuesID);?>">View</a>  </td>
                                    </tr>
                                    <?php endforeach; ?>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Question</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Answer</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>

                            
        </section><!-- /.content -->