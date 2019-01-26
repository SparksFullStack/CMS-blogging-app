        <div class="col-md-4">


            <?php
                if (isset($_POST['submit'])){
                    $searchInput = $_POST['search_input'];
                    $query = "
                        SELECT * FROM posts WHERE post_tags LIKE '%$searchInput%'
                    ";

                    $result = mysqli_query($connection, $query);

                    if (!$result) die ("QUERY FAILED" . mysqli_error($connection));

                    $count = mysqli_num_rows($result);
                    if ($count == 0) echo '<h1>No posts found</h1>';

                    while ($row = mysqli_fetch_assoc($result)){
                        echo $row["post_title"];
                    }
                }
            ?>
                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="" method="post">
                        <div class="input-group">
                            <input name="search_input" type="text" class="form-control">
                            <span class="input-group-btn">
                                <button name="submit" class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                            </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">

                    <?php
                        $query = "
                            SELECT * FROM categories
                        ";
                        $categories_query = mysqli_query($connection, $query);
                    ?>

                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <?php
                                    while ($row = mysqli_fetch_assoc($categories_query)){
                                        $cat_title = $row['cat_title']; // here cat_title is the name of the field in the database
                                        echo "<li><a href='#'>{$cat_title}</a></li>";
                                    }
                                ?>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <?php
                                    while ($row = mysqli_fetch_assoc($categories_query)){
                                        $cat_title = $row['cat_title']; // here cat_title is the name of the field in the database
                                        echo "<li><a href='#'>{$cat_title}</a></li>";
                                    }
                                ?>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>