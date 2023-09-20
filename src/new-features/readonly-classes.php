<?php

readonly class Foo
{
    public string $str;

    // Readonly property Foo::$noType must have type
    // public $noType;

    // Static property Foo::$sNum cannot be readonly
    // public static int $sNum;

    public function __construct(public int $num, string $str)
    {
        $this->str = $str;
    }
}

$foo = new Foo(1, 'foo');
var_dump($foo->str); // "foo"
var_dump($foo->num); // 1

// Cannot modify readonly property Foo::$str
// $foo->str = 'bar';

// Cannot modify readonly property Foo::$num
// $foo->num = 2;

// readonlyを指定した場合にのみ継承できる
readonly class Bar extends Foo
{
}

$bar = new Bar(2, 'bar');
var_dump($bar->str); // "bar"
var_dump($bar->num); // 2
