<?php 
    class ProductModel extends DB{
        public function getAllProduct(){
            $qr = "SELECT * FROM product";
            return mysqli_query($this->con, $qr);
        }

        public function getProductWithID($id){
            $qr = "SELECT * FROM product WHERE product_id = $id";
            return mysqli_query($this->con, $qr);
        }
    }

?>