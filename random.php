<?php declare(strict_types=1);

$phpMeetup = new Random\Randomizer();
echo $phpMeetup->getInt(1, 15) . PHP_EOL;
echo $phpMeetup->shuffleBytes('Code in Bergen') . PHP_EOL;

// Mock Engine that returns the same value.
class ZuperZikker implements \Random\Engine
{
  public function generate(): string
  {
    return \pack('V', 42);
  }
}

$badIdea = new \Random\Randomizer(new \ZuperZikker());
echo $badIdea->getInt(0, 20000) . PHP_EOL;

$randomizer = new Random\Randomizer(
  new Random\Engine\Xoshiro256StarStar(hash("md5", "some seed value"))
);
$randomizer->getInt(1, 100000);

class Jessica
{
  static function select(): string
  {
    return 'Jessica e Best!';
  }
}

echo Jessica::select();