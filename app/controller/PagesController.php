<?php
  class PagesController{

        function home(){
            require "./app/view/home.php";
        }
    
        function login(){
            require "./app/view/login.php";
        }

        function register(){
            require "./app/view/register.php";

        }

        function system(){
            require "./app/view/system.php";
        }

        function error(){
            require "./resources/views/error/404.php";
        }

  }

?>