<?php
// web/index.php v1.0
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

$app->get('/hello', function() {
	return 'Hello world!';
});

$app->run();
?>