<?php
    require "app/controller/PagesController.php";
    require "config/uri/uri_setter.php";
    require "app/model/access db/init_database.php";

    $pagesController = new PagesController();
    $URISegments = explode("/", $_SERVER["REQUEST_URI"]);

    if (array_key_exists(2, $URISegments)) {
        $requestedPage = $URISegments[2];

        switch ($requestedPage) {
            case "home":
                $pagesController->home();
                break;
            case "login":
                $pagesController->login();
                break;
            case "register":
                $pagesController->register();
                break;
            case "system":
                $pagesController->system();
                break;
            default:
                $pagesController->error(404);
        }
    } else {
        echo "condition failed to meet";
    }
?>
