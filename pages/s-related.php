            <div class="row">
        <?php 
            if (isset($_GET['cat_r']) && $_GET['cat_r'] !== "") {
                $cat_r = $_GET['cat_r'];
                $sql = mysqli_query($connection, "SELECT * FROM news WHERE post_category='$cat_r' ORDER BY RAND() LIMIT 4");
                while ($row = mysqli_fetch_assoc($sql)):
                    $id = $row['id'];
                    $content = substr($row['content'], 0, 60)."...";
                    $image = $row['post_image'];
                    $num_likes = $row['num_likes'];
                    $num_comments = $row['num_comments'];
                    $category = $row['post_category'];
                    $cat_id = $row['post_cat_id'];
                    ?>

                    <!--Related News-->
                    <div class="col-12 col-md-6">
                <div class="single-blog-post style-3 mb-80">
                    <div class="post-thumb">
                        <a href="single-post.php?post_id=<?php echo $id; ?>&cat_r=<?php echo $cat_id; ?>"><img src="<?php echo "Admin/$image"; ?>" alt=""></a>
                    </div>
                    <div class="post-data">
                        <a href="category.php?c_id=<?php echo $cat_id; ?>" class="post-catagory"><?php echo $category; ?></a>
                        <a href="single-post.php?post_id=<?php echo $id ?>&cat_r=<?php echo $cat_id; ?>" class="post-title">
                            <h6><?php echo $content; ?></h6>
                        </a>
                        
                    </div>
                </div>
            </div>
              <?php endwhile;  
            }


         ?>
            

                            <!-- Single Post -->
                            
                        </div>