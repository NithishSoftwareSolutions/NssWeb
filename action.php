<?php   
require __DIR__ . "/bootstrap.php";
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );
if ((isset($uri[3]) && $uri[3] != 'user') || !isset($uri[4])) {
    header("HTTP/1.1 404 Not Found");
    exit();
}
require PROJECT_ROOT_PATH . "/user_controller.php";
$objFeedController = new UserController();
$strMethodName = $uri[4] . 'Action';
echo $objFeedController->{$strMethodName}();
?>