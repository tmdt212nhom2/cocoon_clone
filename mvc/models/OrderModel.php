<?php 
    class OrderModel extends DB{
        public function getAllOrder(){
            $qr = "SELECT * FROM orderr";
            return mysqli_query($this->con, $qr);
        }

    }

?>