<?php 
    class OrderModel extends DB{
        public function getAllOrder(){
            $qr = "SELECT * FROM orderr";
            return mysqli_query($this->con, $qr);
        }
        public function getOrderByID($id){
            $qr = "SELECT * FROM orderr WHERE order_id = $id";
            return mysqli_query($this->con, $qr);
        }
    }

?>