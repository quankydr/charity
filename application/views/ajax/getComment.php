<?php 
$listComments = $this->commentmodel->getAllAvailableCommentsForProduct($productID);
if (count($listComments > 0)) : ?>

<h3 class="push-down-25"><span class="light"><?php echo count($listComments);?></span> Comments</h3>

<!--  ==========  -->
<!--  = Single Comment =  -->
<!--  ==========  -->
<?php foreach ($listComments as $comment) : ?>
<div class="single-comment clearfix">
    <div class="avatar-container">
        <img src="<?php echo base_url();?>assets/images/dummy/avatars/comment.png" alt="avatar" class="avatar" width="135" height="135" >
    </div>
    <div class="comment-content" id="comment-content">
        <div class="comment-inner" id="comment-inner">
            <cite class="author-name">
                <?=$comment->Cm_Email?>
            </cite>
            <div class="metadata">
                <?=$comment->Cm_Time?>
                <!--September 28, 2013 at 3:32 pm  -->
            </div>
            <div class="comment-text">
                <p><?=$comment->Cm_Content?></p>
            </div>
        </div>

    </div>
</div>
<?php endforeach; ?>


<?php else : ?>
<h3 class="push-down-25">There is no comment yet.</h3>
<?php endif;?>
<hr>




