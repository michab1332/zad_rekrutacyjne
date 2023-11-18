<?php 
    class Post {
        private $db;

        function Post($mysqli_db) {
            $this->db = $mysqli_db;
        }
        
        function getAllPosts() {
            $result = $this->db->query("SELECT * FROM `posts`");
            $num_of_rows = mysqli_num_rows($result);
            $rows = array();
            var_dump($num_of_rows);
    
            foreach($result as $row) {
                $object_of_values_from_row = new stdClass();
                $object_of_values_from_row->id = $row["id"];
                $object_of_values_from_row->title = $row["title"];
                $object_of_values_from_row->content = $row["content"];
                $object_of_values_from_row->date = $row["date"];
                $object_of_values_from_row->id_author = $row["id_author"];
                array_push($rows, $object_of_values_from_row);
            }
            return $rows;
        }

    }

?>