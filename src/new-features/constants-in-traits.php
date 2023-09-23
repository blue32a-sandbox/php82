<?php

trait Foo
{
    public const CONSTANT = 1;
}

class Bar
{
    use Foo;
}

// トレイトを使うクラスを通じて定数にアクセスできる
var_dump(Bar::CONSTANT);

// Cannot access trait constant Foo::CONSTANT directly
var_dump(Foo::CONSTANT);
