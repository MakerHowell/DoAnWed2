

<?php
require_once("header.php");
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case "home":
            require_once("home.php");
            break;
        case "login":
            require_once("login.php");
            break;
        case "sign-up":
            require_once("sign-up.php");
            break;
        case "sign-up":
            require_once("forgot-pass.php");
            break;
        case "product":
            require_once("product.php");
            break;
        default:
            require_once("home.php");
            break;
    }
} else {
    require_once("home.php");
}
require_once("footer.php");
?>