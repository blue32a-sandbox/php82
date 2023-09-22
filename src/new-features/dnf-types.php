<?php

interface A {}
interface B {}
class AB implements A, B {}

class Foo
{
    public function bar((A&B)|null $entity)
    {
        return $entity;
    }
}

$foo = new Foo();
$foo->bar(new AB());
