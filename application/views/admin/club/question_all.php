<section class="content-header">
                <h1>
                    Question
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Question</li>
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
                                            <th>Creator</th>
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
                                        <td><?=$item->AdminAccount?></td>
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
                                        <th>Creator</th>
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

            <div class="row">
                <!-- left column -->

                <!-- right column -->



                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Add new item</h3>
                        </div><!-- /.box-header -->
                        <br/>
                        <?php if (count($all_category) == 0) : ?>
                        <div class="alert alert-warning alert-dismissable notification">
                            <i class="fa fa-warning"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <b>Warning!</b> <span class="msgsuccess">You must have at least one available category before adding groups</span>
                            <br/><a href="<?php echo site_url('admin/category/');?>">Click here to go to category site</a>
                        </div>
                        <br/>
                        <?php else: ?>
                        
                        <!-- form start -->
                        <form role="form" id="form" method="post" action="<?php echo site_url('admin/question/doAdd');?>">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control" id="category"  name ="category">
                                        <?php foreach ($all_category as $cat) : ?>
                                        
                                        <option value="<?=$cat->CatID?>"><?=$cat->CatName?></option>
                                        <?php endforeach; ?>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Question</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter question">
                                </div>
                                
                                <div class="form-group">
                                    <label for="language">Language</label>
                                    <select class="form-control" id="language"  name ="language">
                                        <?php foreach ($all_language as $language) : ?>
                                        
                                        <option value="<?=$language->id?>"><?=$language->code?> - <?=$language->name?></option>
                                        
                                        <?php endforeach; ?>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="level">Level</label>
                                    <select class="form-control" id="level"  name ="level">
                                        <?php foreach ($all_level as $level) : ?>
                                        
                                        <option value="<?=$level->id?>"><?=$level->name?></option>
                                        <?php endforeach; ?>

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="answer">Right answer</label>
                                    <input type="text" class="form-control" name="answer" id="answer" placeholder="Enter right answer for this question">
                                </div>

                                <div class="form-group">
                                    <label for="answer1">Wrong answer</label>
                                    <input type="text" class="form-control" name="answer1" id="answer1" placeholder="Enter wrong answer for this question">
                                </div>

                                <div class="form-group">
                                    <label for="answer2">Wrong answer</label>
                                    <input type="text" class="form-control" name="answer2" id="answer2" placeholder="Enter wrong answer for this question">
                                </div>

                                <div class="form-group">
                                    <label for="answer3">Wrong answer</label>
                                    <input type="text" class="form-control" name="answer3" id="answer3" placeholder="Enter wrong for this question">
                                </div>


                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        <div class="alert alert-success alert-dismissable notification" style="display: none">
                            <i class="fa fa-check"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <b>Notice!</b> <span class="msgsuccess">Successfully added new item</span>
                        </div>

                    </div><!-- /.box -->
                <?php endif; ?>



                </div><!--/.col (right) -->
            </div>   <!-- /.row -->                
        </section><!-- /.content -->