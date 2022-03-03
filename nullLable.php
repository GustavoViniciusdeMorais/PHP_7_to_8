<?php
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

$x = $argv[1] ?? null;
$y = $argv[2] ?? null;

$ex = new Example(8);
echo $ex?->x($x)?->y($y)?->getValue()."\n\n";