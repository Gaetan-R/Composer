<?php

require __DIR__ . '/../vendor/autoload.php';

$hello = new \App\wcs\Hello();
echo $hello->says();
