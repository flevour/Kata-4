<?php

require_once(__DIR__ . "/vendor/UniversalClassLoader.php");

$loader = new Symfony\Component\ClassLoader\UniversalClassLoader();

// register classes with namespaces
$loader->registerNamespaces(array(
//    'Sensio' => array(__DIR__ . '/src', __DIR__ . '/vendor'),
));

// register a library using the PEAR naming convention
$loader->registerPrefixes(array(
//    'Swift_' => __DIR__ . '/Swift',
));

$loader->registerNamespaceFallback(__DIR__ . "/src");

// to enable searching the include path (eg. for PEAR packages)
//$loader->useIncludePath(true);

// activate the autoloader
$loader->register();
