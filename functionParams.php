<?php

function testParams($a, $b)
{
    return "a: ".$a." b:".$b;
}

echo testParams(b: $argv[1], a: $argv[2]);