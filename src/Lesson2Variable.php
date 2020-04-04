<?php

class Lesson2Variable extends Song
{
  public function singBottlesOfBeer()
  {
      $songPattern = new SongPattern('{{number}} bottles of beer on the wall' . PHP_EOL .
          '{{number}} bottles of beer' . PHP_EOL .
          'Take one down, pass it around' . PHP_EOL .
          '{{number|minusOne}} bottles of beer on the wall'
      );
    $this->singPattern(
        $songPattern->repeatFor(Number::from(100)->to(99)->stepBy([Number::class, 'minusOne']))
    );
  }
}
