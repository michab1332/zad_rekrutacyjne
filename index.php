<?php 
        include "Database.php";
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
    
        $db = new Database(HOST, USER, PASSWORD, MY_DB);
        $db->connect();
    
    ?>
    
</body>
</html>