<?php
    require_once "includes/header.php";

    if(isset($_GET["page"])) {
        switch($_GET["page"]) {
            case "about" :
                require_once "includes/about.php";
                break;
            case "blog" :
                require_once "includes/blog.php";
                break;
            case "contact" :
                require_once "includes/contact.php";
                break;
            case "home" :
                require_once "includes/home.php";
                break;
            case "services" :
                require_once "includes/services.php";
        }
    } else {
        require_once "includes/home.php";
    }
    require_once "includes/footer.php"; 