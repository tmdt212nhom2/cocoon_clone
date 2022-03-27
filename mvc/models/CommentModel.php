<?php 
    class CommentModel extends DB{
        public function getAllComment(){
            $qr = "SELECT * FROM _comment";
            return mysqli_query($this->con, $qr);
        }

    }

?>