<section class="content-header">
    <h1>
        Sport
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Club</li>
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
                  <th>Sport</th>
                  <th>Website</th>
                  <th>Status</th>
                  <th>Edit</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($all_club as $item) : ?>
                <tr>
                    <td><?=$item->id?></td>
                    <td><?=$item->name?></td>
                    <td><?=$item->sport?></td>
                    <td><?=$item->website?></td>
                    <td><?php echo statusInString($item->status); ?></td>
                    <td><a href="<?php echo site_url('admin/sport/edit/' . $item->id);?>">Edit</a>  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Sport</th>
                  <th>Website</th>
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
                      <input type="text" class="form-control" name="name" id="name" placeholder="Enter club name">
                  </div>
                  <div class="form-group">
                      <label for="sport">Sport</label>
                      <select id="sport" name="sport" class="form-control" value="1">
                      <?php foreach ($all_sport as $sport) : ?>
                      <option value="<?php echo  $sport->id?>"><?php echo $sport->name ?></option>
                      <?php endforeach; ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone number">
                  </div>
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                      <label for="website">Website</label>
                      <input type="text" class="form-control" name="website" id="website" placeholder="Enter website">
                  </div>
                  <div class="form-group">
                      <label for="address">Address</label>
                      <textarea id="address" name="address" class="form-control" maxlength="140"></textarea>
                  </div>
                  <div class="form-group">
                      <label for="note">Note</label>
                      <textarea id="note" name="note" class="form-control" maxlength="140"></textarea>
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
