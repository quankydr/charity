<section class="content-header">
    <h1>
        Sport
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Sport</li>
    </ol>
</section>

  <!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Sport List</h3>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive">
            <table id="dataTable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Edit</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($all_sport as $item) : ?>
                <tr>
                    <td><?=$item->id?></td>
                    <td><?=$item->name?></td>
                    <td><?php echo statusInString($item->status); ?></td>
                    <td><a href="<?php echo site_url('admin/sport/edit/' . $item->id);?>">Edit</a>  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
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
      <div class="col-md-8">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header">
              <h3 class="box-title">Add new item</h3>
          </div><!-- /.box-header -->
          <br/>
          <div class="alert alert-success alert-dismissable notification" style="display: none">
              <i class="fa fa-check"></i>
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <b>Notice!</b> <span class="msgsuccess">Successfully added new item</span>
          </div>
          <!-- form start -->
          <form role="form" id="form" method="post" action="<?php echo site_url('admin/sport/doAdd');?>">
              <div class="box-body">
                  <div class="form-group">
                      <label for="item-name">Sport name</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Enter item name">
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
