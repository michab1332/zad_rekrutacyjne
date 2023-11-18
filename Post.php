<?php 
    class Post {
        private $db;

        function Post($mysqli_db) {
            $this->db = $mysqli_db;
        }
        
        function get_all_posts() {
            $result = $this->db->query("SELECT * FROM `posts`");
            $rows = array();
            
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

        //get by id
        function get_post($id) {
            $result = $this->db->query("SELECT * FROM `posts` WHERE id=${id}");
            return $result->fetch_assoc();
        }

        //delete by id
        function delete_post($id) {
            if ($this->db->query("DELETE FROM `posts` WHERE id=${id}") === TRUE) {
                return true; //"Record deleted successfully"
              } else {
                return $this->db->error; //"Error deleting record: "
              }
        }

    }

?>