<?php declare(strict_types=1);

class Post81
{
  public function __construct(
    public readonly string $title,
    public readonly Author $author,
    public readonly string $body,
    public readonly DateTime $publishedAt,
  ) {}
}

readonly class Post82
{
  public function __construct(
    public string $title,
    public Author $author,
    public string $body,
    public DateTime $publishedAt,
  ) {}
}

// Dynamic properties not allowed in readonly.
$dto = new Post82();
$dto->foo = 'bar';

// Laravel PHP 8.2 love.
namespace App\DataTransferObjects;
readonly class ProductData
{
  public function __construct(
    public int $id,
    public string $title,
    public float $price,
  ) {}
}
