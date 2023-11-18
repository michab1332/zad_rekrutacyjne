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
    <title>Post</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/post.css">
</head>
<body>
    <?php 
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            
            $db_init = new Database(HOST, USER, PASSWORD, MY_DB);
            $db_mysqli = $db_init->connect();
            
            $post = new Post($db_mysqli);
            $post_by_id = $post->get_post($id); 


            $db_init->close_connect();
        }
    ?>
    <header>
        <h1>Przepisy.pl</h1>
    </header>
    
    <main class="post_main">
        <section class="post">
            <div class="post_img_container">
                <img class="post_img" src="https://images.pexels.com/photos/4323459/pexels-photo-4323459.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="oreo cake">
            </div>
            <div class="post_text_wrapper">
                <h3 class="post_h3">
                    <?php echo $post_by_id["title"]?>
                </h3>
                <p class="post_p">
                    <?php echo $post_by_id["content"] ?>
                </p>
            </div>
        </section>
    </main>

    <footer>
        <h2>Strona wykonana przez Michała Bonowicz</h2>
    </footer>
</body>
</html>