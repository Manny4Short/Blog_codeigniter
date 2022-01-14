<?=$this->extend('layouts\mainLayout.php')?>


<?=$this->section('content')?>

<section>
    <?php
$session = \Config\Services::session();
?>

    <?php if (isset($session->success)): ?>
    <div class="alert alert-success text-center alert-dismissible fade show mb-0" role="0">
        <?=$session->success?>

    </div>
    <?php endif;?>

    <div class="jumbotron">
        <div class="container">
            <h2 class="display-4">A Simple Blog Project </h2>

            <hr class="my-4">

            <a class="btn btn-primary mb-4" href="/create" role="button">Add blog</a>
        </div>
    </div>
</section>



<section class="blog-section">
    <div class="container">
        <h3>Click any of the blog titles to view blog</h3>
        <br>
        <?php if ($news): ?>



        <table class="table table-striped">

            <?php foreach ($news as $newsitem): ?>
            <tr>

                <td>
                    <h4> <a href="/blog/<?=$newsitem['slug']?> " style="text-decoration: none; color: grey">
                            <?=$newsitem['title']?></a>

                        <a class="btn btn-outline-danger btn-sm" style='float: right;'
                            href='/deleteBlog/<?=$newsitem['slug']?>'>
                            delete blog
                        </a>
                    </h4>
                </td>
            </tr>
            <?php endforeach;?>
        </table>
        <?php else: ?>
        <h3 class='text-center'>No posts found</h3>
        <?php endif;?>
    </div>
</section>

<?=$this->endSection()?>