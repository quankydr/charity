<section class="content-header">
                <h1>
                Question
                <small>Edit Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="<?php echo site_url('admin/question');?>"> Question</a></li>
                <li class="active">Edit Question</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="col-md-8 col-md-push-2">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"> Question -- <?=$item->LangName?></h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" id="editForm" action="<?php echo site_url('admin/question/doEdit/' . $item->QuesID);?>">
                        <div class="box-body">
                                <div class="form-group">
                                    <label for="name">Question</label>
                                    <textarea class="form-control" name="name" id="name" ><?php echo $item->Content ?></textarea>
                                </div>

                               
                            <div class="form-group">
                                <label for="category">Category</label>

                                <select class="form-control" id="category"  name ="category">
                                    <?php foreach ($all_category as $category) : 
                                        if($category->CatID == $item->QuesCat){
                                            $select = "selected='selected'";
                                        } else{
                                            $select = "";
                                        }
                                    ?>
                                    <option <?php echo $select; ?> value="<?php echo $category->CatID; ?>"><?php echo $category->CatName; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="level">Level</label>

                                <select class="form-control" id="level"  name ="level">
                                    <?php foreach ($all_level as $level) : 
                                        if($level->id == $item->QuesLevel){
                                            $select = "selected='selected'";
                                        } else{
                                            $select = "";
                                        }
                                    ?>
                                    <option <?php echo $select; ?> value="<?php echo $level->id; ?>"><?php echo $level->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="answer">Answer</label>

                                <select class="form-control" id="answer"  name ="answer">
                                    <?php foreach ($all_answer as $answer) : 
                                        if($answer->AnsStatus == 2){
                                            $select = "selected='selected'";
                                        } else{
                                            $select = "";
                                        }
                                    ?>
                                    <option <?php echo $select; ?> value="<?php echo $answer->AnsID; ?>"><?php echo $answer->AnsContent; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>

                                <select class="form-control" id="status"  name ="status">
                                    <?php if ($item->QuesStatus == 1): ?>
                                    <option value="1" selected="selected"><?php echo questionStatusInString('1');?></option>
                                    <option value="-1"><?php echo questionStatusInString('-1');?></option>
                                    <option value="0"><?php echo questionStatusInString('0');?></option>
                                    <?php else : if ($item->QuesStatus == -1): ?>
                                    <option value="1"><?php echo questionStatusInString('1');?></option>
                                    <option value="-1"  selected="selected"><?php echo questionStatusInString('-1');?></option>
                                    <option value="0"><?php echo questionStatusInString('0');?></option>
                                    <?php else : ?>
                                    <option value="1" selected="selected"><?php echo questionStatusInString('1');?></option>
                                    <option value="-1"><?php echo questionStatusInString('-1');?></option>
                                    <option value="0"  selected="selected"><?php echo questionStatusInString('0');?></option>
                                    <?php endif; endif;?>
                                </select>
                            </div>
                            <input type="hidden" name="itemID" value="<?=$item->QuesID?>" >
                            </div><!-- /.box-body -->

                            <br/>
                    <div class="alert alert-success alert-dismissable notification" style="display: none">
                        <i class="fa fa-check"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Notice!</b> <span class="msgsuccess">Successfully edited item!</span>
                        <br> Click <a href="<?php echo site_url('admin/question');?>">here</a> to view question list
                    </div>
                    <div class="alert alert-danger alert-dismissable notification" style="display: none">
                        <i class="fa fa-ban"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Error!</b> <span class="msgsuccess">Please try again</span>
                    </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </form>
                            
                            
                </div><!-- /.box -->
            </div><!--/.col (right) -->

        </section><!-- /.content -->