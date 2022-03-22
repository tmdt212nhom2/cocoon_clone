<?php

    class Order extends Controller{
        function index(){
            $order = $this->model("OrderModel");
            $layout = $this->view("layouts/admin", ["admin_page"=>"admin/orders/index", "admin_header"=>"shared/admin_header", "admin_sidebar"=>"shared/admin_sidebar", "orders"=>$order->getAllOrder()]); 
        }
        function edit($id){
            $order = $this->model("OrderModel");
            $layout = $this->view("layouts/admin", ["admin_page"=>"admin/orders/edit", "admin_header"=>"shared/admin_header", "admin_sidebar"=>"shared/admin_sidebar", "order"=>$order->getOrderByID($id), "id" =>$id, "orderModel" => $order]); 
        }
        function delete($id){
            $order = $this->model("OrderModel");
            $layout = $this->view("layouts/admin", ["admin_page"=>"admin/orders/delete", "admin_header"=>"shared/admin_header", "admin_sidebar"=>"shared/admin_sidebar", "order"=>$order->getOrderByID($id), "id" =>$id, "orderModel" => $order]); 
        }
    }
?>