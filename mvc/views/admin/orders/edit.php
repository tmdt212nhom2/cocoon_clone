<?php
    if(isset($data["id"])){
        $id = $data["id"];
        $sql = "UPDATE `orderr` SET `status` = 'delivered' WHERE `orderr`.`order_id` = $id";
        if(($data["orderModel"]->con)->query($sql)){
            echo "<script type='text/javascript'>alert('chinh sua thanh cong');
            window.location.href = 'http://localhost/assignment/Order/index';
            </script>";
        }
        else{
            echo "<script type='text/javascript'>alert('chinh sua that bai');
            window.location.href = 'http://localhost/assignment/Order/index';
            </script>";
        }
    }
?>