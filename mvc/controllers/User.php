<?php 
    class User extends Controller{

        function sign_up(){
            $userModel = $this->model("UserModel");
            $layout = $this->view("layouts/log", ["log_page"=>"application/User/sign_up","userModel" => $userModel]);
        }

        function sign_in(){
            $userModel = $this->model("UserModel");
            $layout = $this->view("layouts/log", ["log_page"=>"application/User/sign_in", "userModel" => $userModel]);

        }

        function log_out(){
            $userModel = $this->model("UserModel");
            $layout = $this->view("layouts/log", ["log_page"=>"application/User/log_out", "userModel" => $userModel]);
        }

        function profile(){

        }

        //function comment() ?
    }

?>
