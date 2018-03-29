<?php

require('../vendor/autoload.php');

$app = new \Slim\Slim();

$app->get('/', function () {
    date_default_timezone_set();
    echo "Hello from Flynn on port " . $_ENV["PORT"] . " from container " . gethostname() . " at date [" . date("D M d, Y G:i a") . "]\n";
});

$app->run();

?>
