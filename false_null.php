<?php declare(strict_types=1);

class User
{
  public function isAdmin(): bool {
    // Magic ...
  }
}

class AnonUser extends User
{
  public function isAdmin(): false {
    return false;
  }
}

function foo(): null {
  return null;
}
