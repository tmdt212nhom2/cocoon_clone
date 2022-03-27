<?php

    class comment extends Controller{
        function index(){
            $comment = $this->model("CommentModel");
            $layout = $this->view("layouts/admin", ["admin_page"=>"admin/comments/index", "admin_header"=>"shared/admin_header", "admin_sidebar"=>"shared/admin_sidebar", "comments"=>$comment->getAllComment()]); 
        }
        function new(){
            $layout = $this->view("layouts/admin", ["admin_page"=>"admin/comments/new", "admin_header"=>"shared/admin_header", "admin_sidebar"=>"shared/admin_sidebar"]); 
        }
        function edit(){
            $layout = $this->view("layouts/admin", ["admin_page"=>"admin/comments/edit", "admin_header"=>"shared/admin_header", "admin_sidebar"=>"shared/admin_sidebar"]); 
        }

    }
?>