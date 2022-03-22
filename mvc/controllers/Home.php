<?php

    class Home extends Controller{
        function index(){
            $layout = $this->view("layouts/application", ["page"=>"application/Home/index", "header"=>"shared/header", "footer"=>"shared/footer"]);
            
        }

        function catalog(){
            //load Model
            $product = $this->model("ProductModel");
            $layout = $this->view("layouts/application", ["page"=>"application/Home/catalog", "header"=>"shared/header", "footer"=>"shared/footer", "products"=>$product->getAllProduct()]);
            echo $layout;
        }

        function product($id){
            //load model with ID
            $product = $this->model("ProductModel");
            $layout = $this->view("layouts/application", ["page"=>"application/Home/product", "header"=>"shared/header", "footer"=>"shared/footer", "product"=>$product->getProductWithID($id)]);
            echo $layout;
        }

        function contact(){
            $layout = $this->view("layouts/application", ["page"=>"application/Home/contact", "header"=>"shared/header", "footer"=>"shared/footer"]);
            echo $layout;
        }

        function cart(){
            $layout = $this->view("layouts/application", ["page"=>"application/Home/cart", "header"=>"shared/header", "footer"=>"shared/footer"]);
            echo $layout;
        }
    }
?>