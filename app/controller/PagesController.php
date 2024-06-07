<?php
  class PagesController{

        function main(){
            require "./app/view/main_view.php";
        }

        function registerProcess(){
          require "./app/model/access db/register_process.php";
        }

        function error(){
            require "./resources/views/error/404.php";
        }

  }

?>