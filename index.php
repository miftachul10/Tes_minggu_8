<?php

require "vendor/autoload.php";

use App\Circle;
use App\Triangle;
use App\Square;

echo (new Square())->getArea();
echo PHP_EOL;
echo (new Triangle())->getArea();
echo PHP_EOL;
echo (new Circle())->getArea();
