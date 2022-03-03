<?php

class Product
{
    public static function save()
    {
        return "save product";
    }
}

class User
{
    public static function save()
    {
        return "save user";
    }
}

$needle = $argv[1] ?? null;

$result = match($needle){
    'product' => Product::save(),
    'user' => User::save(),
    default => function($x){ return $x;}
};

var_dump($result)."\n\n";