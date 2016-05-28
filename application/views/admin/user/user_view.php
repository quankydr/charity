<section class="content-header">
                <h1>
                    User
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">User</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">


                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">User List</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body table-responsive">
                            <!--<?php echo var_dump($all_user); ?> -->
                                <table id="dataTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Display</th>
                                            <th>Full Name</th>
                                            <th>Address</th>
                                            <th>Email</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach ($all_user as $item) : ?>
                                    <tr>
                                        <td><?=$item->UserID?></td>
                                        <td><?=$item->UserDisplay?></td>
                                        <td><?=$item->UserFullName?></td>
                                        <td><?=$item->UserAddress?></td>
                                        <td><?=$item->UserEmail?></td>
                                        <td><a href="<?php echo site_url('admin/user/edit/' . $item->UserID);?>">Edit</a>  </td>
                                    </tr>
                                    <?php endforeach; ?>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Display</th>
                                        <th>Full Name</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Edit</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>

            




                             
        </section><!-- /.content -->