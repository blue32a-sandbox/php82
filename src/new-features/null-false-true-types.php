<?php

class Foo
{
    public function alwaysFlase(): false { return false; }

    public function alwaysTrue(): true { return true; }

    public function alwaysNull(): null { return null; }
}

$foo = new Foo();
var_dump($foo->alwaysFlase());
var_dump($foo->alwaysTrue());
var_dump($foo->alwaysNull());
