<?php
    require "app/controller/PagesController.php";
    require "config/uri/uri_setter.php";

    $pagesControlller = new PagesController();
    $URISegments = explode("/", $_SERVER["REQUEST_URI"]);

    if(array_key_exists(2, $URISegments)){
        $requestedPage = $URISegments[2];

        switch($requestedPage):
            case "home":
                $pagesControlller->home();
                break;
            case "login":
                $pagesControlller->login();
                break;
            case "register":
                $pagesControlller->register();
                break;
            case "system":
                $pagesControlller->system();
                break;
            default: 
                $pagesControlller->error(404);
        endswitch;

    } else {
        echo "condition failed to meet";
    }
       
?>