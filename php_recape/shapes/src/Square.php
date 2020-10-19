<?php

namespace kusuma;

use kusuma\Shape;

class Square extends Shape
{
    private $side=40;

    public function getArea()
    {
        return pow($this->side,2);
    }
}

