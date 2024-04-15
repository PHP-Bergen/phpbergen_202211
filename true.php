<?php

class Foo
{
  private true $processed;

  public function process(string|int|true $value): bool {
    return true;
  }
}

$foo = new Foo;
var_dump($foo->process('Bergen'));
