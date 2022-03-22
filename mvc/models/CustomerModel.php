<?php 
    class CustomerModel extends DB{
        public function getAllCustomer(){
            $qr = "SELECT * FROM customer";
            return mysqli_query($this->con, $qr);
        }


    }

?>