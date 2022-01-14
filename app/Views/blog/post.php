<?=$this->extend('layouts\mainLayout.php')?>


<?=$this->section('content')?>

<?php

$session = session();

$title = $post['title'];
$body = $post['body'];
$slug = $post['slug'];
$created_at = $post['created_at'];

?>

<!-- show posts -->
<section class="mb-5">
    <div class="container">

        <article class="blog-post">
            <div>

                <h2><?=$title?>
                </h2>

                <div class="details">

                    Posted on: <?=date('M d Y', strtotime($created_at))?>

                </div>

            </div>

            <?=$body?>

        </article>
    </div>

</section>



<!-- display comments -->
<section class="mb-5" id="reload_comments">
    <div class="container">
        <h4>Comments Here!!!</h4>
        <?php foreach ($get as $comment) {?>
        <?php  if ($post['slug']== $comment['slug_ref']):?>
        <div class="">
            <div class="">
                <div class="md-3">
                    <?=$comment['user_comment']?>
                </div>
                <div class="mb-3">
                    <?=date('M d Y', strtotime($comment['commented_on']))?>
                </div>

            </div>
        </div>
        <?php endif ?>
        <?php }?>


    </div>

</section>



<!-- Add comment -->
<div class="container">

    <section>

        <form action="/comment/<?=$post['slug'];?>" method="post">

            <div class=" form-group mb-3">
                <label for="">Enter your comment</label>
                <textarea class="form-control" type="text" name="Addcomment" rows="3"></textarea>
            </div>

            <button type=" submit" class="btn btn-primary mb-2">Submit comment</button>
        </form>
</div>
</section>
</div>
<?php $session->destroy(); ?>
<?=$this->endSection()?>