<?php

use Example as GlobalExample;

class Example
{
    private float $value;

    public function __construct($value)
    {
        $this->value = $value;
    }
    
    public function x($sum)
    {
        $this->value += $sum;
        return $this;
    }

    public function y($sum)
    {
        $this->value += $sum;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }
}

$ex = new Example(8);
echo $ex?->x(2)?->y(2)?->getValue()."\n\n";