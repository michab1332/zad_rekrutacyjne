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
</head>
<body>
    <?php 

        $db_init = new Database(HOST, USER, PASSWORD, MY_DB);
        $db_mysqli = $db_init->connect();
        
        $post = new Post($db_mysqli);
        $post->getAllPosts();
    ?>
    
</body>
</html>