<?=$this->extend('layouts\mainLayout.php')?>


<?=$this->section('content')?>

<section>
    <div class="container">
        <h2>Create a new post</h2>

        <?php if ($_POST): ?>
        <?=\Config\Services::validation()->listErrors();?>
        <?php endif;?>

        <form action="/create" class="" method="post">

            <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="emailHelp"
                    placeholder="Enter title" name="title">
            </div>

            <div class="form-group mb-3">
                <label for="body">Enter Bodytext</label>
                <textarea name="body" class="form-control" id="body" placeholder="Enter text" cols="20" rows="7">

                </textarea>

            </div>

            <div class="form-group  col text-center">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>

        </form>
    </div>

</section>

<?=$this->endSection()?>