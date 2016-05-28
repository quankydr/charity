<section class="content-header">
                <h1>
                    Admin
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Admin</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">


                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Admin List</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body table-responsive">
                                <table id="dataTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Account</th>
                                            <th>Password</th>
                                            <th>Fullname</th>
                                            <th>Avatar</th>
                                            <th>Role</th>
                                            <th>Stats</th>
                                            <th>Edit</th>
                                            <th>Delete</th>  
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($all_admin as $item) : ?>
                                    <tr>
                                        <td><?=$item->AdminID?></td>
                                        <td><?=$item->AdminAccount?></td>
                                        <td><?=$item->AdminPassword?></td>
                                        <td><?=$item->AdminFullname?></td>
                                        <td><?=$item->AdminAvatar?></td>
                                        <td><?=$item->AdminRole?></td>
                                        <td><a href="<?php echo site_url('admin/admin/stats/' . $item->AdminID);?>">View / <?php var_dump($all_pending_question);?></a>  </td>
                                        <td><a href="<?php echo site_url('admin/admin/edit/' . $item->AdminID);?>">Edit</a>  </td>
                                        <td><a href="<?php echo site_url('admin/admin/delete/' . $item->AdminID);?>">Delete</a>  </td>
                                    </tr>
                                    <?php endforeach; ?>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Account</th>
                                        <th>Password</th>    
                                        <th>Fullname</th>
                                        <th>Avatar</th>
                                        <th>Role</th>
                                        <th>Stats</th>
                                        <th>Edit</th>
                                        <th>Delete</th>      
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
                            <h3 class="box-title">Add new admin</h3>
                        </div><!-- /.box-header -->
                        <br/>
                        <div class="alert alert-success alert-dismissable notification" style="display: none">
                            <i class="fa fa-check"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <b>Notice!</b> <span class="msgsuccess">Successfully added new admin</span>
                        </div>
                        <!-- form start -->
                        <form role="form" id="form" method="post" action="<?php echo site_url('admin/admin/doAdd');?>">
                            <div class="box-body">
                                <div class="form-group">
                                <label for="account">Account</label>
                                <input type="text" class="form-control" id="account" name="account" placeholder="Enter new account">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" id="password" name="password" class="form-control" placeholder="Enter password">
                            </div>
                            <div class="form-group">
                                <label for="fullname">Fullname</label>
                                <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Enter fullname">
                            </div>
                            <div class="form-group">
                                <label for="avatar">Avatar</label>
                                <input type="text" id="avatar" name="avatar" class="form-control" placeholder="Enter image file name">
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select id="role" name="role" class="form-control" value="1">
                                <?php foreach ($all_role as $role) : ?>
                                <option value="<?php echo  $role->RoleID?>"><?php echo $role->Role ?></option>
                                <?php endforeach; ?>
                                </select>

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