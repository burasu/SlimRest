<?php

require 'vendor/autoload.php';
date_default_timezone_set('Europe/Madrid');

$app = new \Slim\Slim(array(
	'view' => new \Slim\Views\Twig()		
));

$view = $app->view();
$view->parserOptions = array(
	'debug' => true,
);
$view->parserExtensions = array(
	new \Slim\Views\TwigExtension(),
);

$app->get('/', function() use($app)
{
	$app->render('about.twig');
});

$app->get('/contact', function() use($app)
{
	$app->render('contact.twig');
});

$app->run();