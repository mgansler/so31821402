<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/echo/:text', function ($text) use ($app) {
    $app->render('echo.php', array('text' => $text));
});

$app->run();