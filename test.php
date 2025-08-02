<?php

require __DIR__ . '/vendor/autoload.php';

$class = 'Bakery\\Controllers\\CustomersController'; // << Change to a real class in your app

/** @var \Composer\Autoload\ClassLoader $composerLoader */
$composerLoader = require __DIR__ . '/vendor/autoload.php';

// Prime autoloader and Reflection
if (!class_exists($class)) {
    throw new \RuntimeException("Class $class not found.");
}

// How many times to repeat
$repeats = 10000;

// --- ComposerLoader timing ---
$start = microtime(true);
for ($i = 0; $i < $repeats; ++$i) {
    $file = $composerLoader->findFile($class);
}
$composerTime = microtime(true) - $start;

// --- Reflection timing ---
$start = microtime(true);
for ($i = 0; $i < $repeats; ++$i) {
    $rc = new ReflectionClass($class);
    $file = $rc->getFileName();
}
$reflectionTime = microtime(true) - $start;

echo "ComposerLoader::findFile: $composerTime sec for $repeats calls\n";
echo "ReflectionClass->getFileName: $reflectionTime sec for $repeats calls\n";
echo "Ratio: Reflection is " . ($reflectionTime / $composerTime) . "x slower\n";
