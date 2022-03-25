<?php 
    session_start();
    if(session_destroy()){
        header("Location: http://localhost/assignment/User/sign_in");
    }
?>