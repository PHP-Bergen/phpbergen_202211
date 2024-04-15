<?php declare(strict_types=1);

$bar = new stdClass();
$bar->city = 'bergen';

#[\AllowDynamicProperties]
class BergenPhp {}
$nix = new BergenPhp();
$nix->beer = 'Hansa';


// Use of __get __set work as expected.
class BergenPhpWithMagic {
  private array $properties = [];

  public function __set(string $name, mixed $value): void
  {
    $this->properties[$name] = $value;
  }

  public function __get(string $name)
  {
      return $this->properties[$name];
  }

  public function __isset(string $name): bool
  {
    return isset($this->properties[$name]);
  }
}

$fix = new BergenPhpWithMagic();
$fix->beer = 'Hansa';
