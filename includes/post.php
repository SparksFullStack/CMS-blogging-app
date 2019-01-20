<?php
    $query = "
        SELECT * FROM posts
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
        <img class="img-responsive" src="images/<?php echo $row["post_image"]; ?>" alt="">
        <hr>
        <p><?php echo $row['post_content'] ?></p>
        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

        <!-- <hr> -->
<?php } ?>