<?php

require "vendor/autoload.php";

use kusuma\Square;
use kusuma\Triangle;
use kusuma\Circle;

echo (new Square())->getArea().PHP_EOL;
echo (new Triangle())->getArea().PHP_EOL;
echo (new Circle())->getArea().PHP_EOL;