<section class="content-header">
                <h1>
                    Role
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Role</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">


                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Role List</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body table-responsive">
                                <table id="dataTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($all_role as $item) : ?>
                                    <tr>
                                        <td><?=$item->RoleID?></td>
                                        <td><?=$item->Role?></td>
                                        <td><?=$item->RoleStatus?></td>
                                        <td><a href="<?php echo site_url('admin/role/edit/' . $item->RoleID);?>">Edit</a>  </td>
                                    </tr>
                                    <?php endforeach; ?>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>

            
<div class="row">
                <!-- left column -->

                <!-- right column -->



                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Add new role</h3>
                        </div><!-- /.box-header -->
                        <br/>
                        <div class="alert alert-success alert-dismissable notification" style="display: none">
                            <i class="fa fa-check"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <b>Notice!</b> <span class="msgsuccess">Successfully added new role</span>
                        </div>
                        <!-- form start -->
                        <form role="form" id="form" method="post" action="<?php echo site_url('admin/role/doAdd');?>">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="rolename">Role name</label>
                                    <input type="text" class="form-control" name="rolename" id="rolename" placeholder="Enter role name">
                                </div>


                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div><!-- /.box -->




                </div><!--/.col (right) -->
            </div>   <!-- /.row -->                
        



                             
        </section><!-- /.content -->