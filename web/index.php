<?php

require('../vendor/autoload.php');

date_default_timezone_set();

$app = new \Slim\Slim();

$app->get('/', function () {
    echo "Hello from Flynn on port " . $_ENV["PORT"] . " from container " . gethostname() . " at date [" . date("D M d, Y G:i:s a") . "]\n";
});

$app->run();

?>
