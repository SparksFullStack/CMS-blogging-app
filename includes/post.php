<?php
    $query = "
        SELECT * FROM posts WHERE post_author='Charlie Sparks'
    ";

    $dbreq = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($dbreq)){
        ?>
        <h2>
            <a href="#"><?php echo $row['post_title']; ?></a>
        </h2>
        <p class="lead">
            by <a href="index.php"><?php echo $row['post_author'] ?></a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span><?php echo " Posted on " . $row['post_date']; ?></p>
        <hr>
        <img class="img-responsive" src="http://placehold.it/900x300" alt="">
        <hr>
        <p><?php echo $row['post_content'] ?></p>
        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

        <hr>
<?php } ?>