<?php 
    if(isset($data["id"])){
        $id = $data["id"];
        $sql = "DELETE FROM category WHERE category_id =$id";
        if(($data["categoryModel"]->con)->query($sql)){
            echo "<script type='text/javascript'>alert('xoa category thanh cong');
            window.location.href = 'http://localhost/assignment/Category/index';
            </script>";
        }
        else{
            echo "<script type='text/javascript'>alert('xoa category that bai');
            window.location.href = 'http://localhost/assignment/Category/index';
            </script>";
        }
    }
?>