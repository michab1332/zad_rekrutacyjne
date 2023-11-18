<?php 
        include "Database.php";
        include "Post.php";
        include "config.php";
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <?php 

        // $db_init = new Database(HOST, USER, PASSWORD, MY_DB);
        // $db_mysqli = $db_init->connect();
        
        // $post = new Post($db_mysqli);
        // $post->get_all_posts();
        // $post->get_post(1);
        // //$post->delete_post(2);

        // $db_init->close_connect();
    ?>
    <header>
        <h1>Przepisy.pl</h1>
    </header>

    <div class="main_wrapper">
    <main>
        <?php
            $db_init = new Database(HOST, USER, PASSWORD, MY_DB);
            $db_mysqli = $db_init->connect();
            
            $post = new Post($db_mysqli);
            $posts = $post->get_all_posts();

            //var_dump($posts);

            foreach($posts as $item) {
                echo "<a href='PostPage.php?id=".$item->id."'>";
                echo "<section>";
                
                echo '<div class="img_container">';
                echo "<img src='https://images.pexels.com/photos/4323459/pexels-photo-4323459.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1' alt='oreo cake'>";
                echo '</div>';

                echo "<h3>".$item->title."</h3>";
                echo "<p>".$item->content."</p>";
                echo "</section>";
                echo "</a>";
            }

            $db_init->close_connect();
        ?>
    </main>
    </div>
    
    <footer>
        <h2>Strona wykonana przez Michała Bonowicz</h2>
    </footer>
</body>
</html>