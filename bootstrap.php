<?php
require_once "lib/Symfony/Component/ClassLoader/UniversalClassLoader.php";
use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->registerNamespace('dsx', __DIR__.'/lib');
$loader->registerPrefix('Twig_', __DIR__.'/lib/twig/lib');
$loader->register();