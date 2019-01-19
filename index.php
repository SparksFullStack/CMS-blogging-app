<?php include "./includes/header.php"; ?>
<?php include "./includes/db.php"; ?>

    <!-- Navigation -->
    <?php include "./includes/navigation.php"; ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- Blog Posts -->
                <?php
                    include "./includes/post.php";
                    include "./includes/post.php";
                ?>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "./includes/sidebar.php"; ?>

        </div>
        <!-- /.row -->

        <hr>

<? include "./includes/footer.php"; ?>
