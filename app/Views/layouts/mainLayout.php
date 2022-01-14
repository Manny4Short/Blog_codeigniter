<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="<?php echo base_url("bootstrap/boot.min.css"); ?>">


</head>

<body>


    <!-- Grey with black text bootstrap-->
    <section>

        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <div class="container-fluid">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link " href="/">Blog lists</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link  btn btn-outline-success" href="/create">Create blog</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <?=$this->renderSection('content')?>



    <script src=<?php echo base_url("bootstrap\@popper2.10.2.min.js") ?>></script>
    <script src=<?php echo base_url("bootstrap\@5.1.3.js") ?>></script>

</body>

</html>