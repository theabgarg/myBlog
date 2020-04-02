<?php

    $sql = "SELECT * FROM posts ORDER BY post_date ASC LIMIT $offset, 10";
    if($result = $GLOBALS['conn']->query($sql)) {
        while ($row = $result -> fetch_assoc()) {
            $id = $row['post'];
            $username = $row['username'];
            $title = $row['title'];
            $short_desc = $row['short_desc'];
            $img = $row['img'];
            $category = $row['category'];
            $post_date = $row['post_date'];

            ?>
                <div class="post">
                    <a href="single.php?id=<?php echo $id; ?>">
                        <div class="post_image">
                            <?php echo $img; ?>
                        </div>
                        <div class="post-preview">
                            <h2><?php echo $title; ?></h2>
                            <i class="fa fa-user"><?php echo $username; ?></i>
                            &nbsp;
                            <i class="fa fa-calendar"><?php echo $post_date; ?></i>
                            <p class="preview-text">
                                <?php echo $short_desc; ?>
                            </p>
                        </div>
                    </a>
                </div>
            <?php
        }
    }

?>