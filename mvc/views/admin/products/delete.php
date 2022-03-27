<?php 
    if(isset($data["id"])){
        $id = $data["id"];
        $sql = "DELETE FROM product WHERE product_id =$id";
        if(($data["productModel"]->con)->query($sql)){
            echo "<script type='text/javascript'>alert('xoa product thanh cong');
            window.location.href = 'http://localhost/assignment/Product/index';
            </script>";
        }
        else{
            echo "<script type='text/javascript'>alert('xoa product that bai');
            window.location.href = 'http://localhost/assignment/Product/index';
            </script>";
        }
    }
?>