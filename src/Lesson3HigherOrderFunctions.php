<?php

class Lesson3HigherOrderFunctions extends Song
{
  public function singCheers()
  {
      $songPattern = new SongPattern("{{number}}! ");
      $this->singPattern(
          $songPattern
              ->repeatFor(Number::from(2)->to(8)->stepBy([$this,'getNextEven']))
              ->endsWith("Who do we appreciate?")
              ->repeatFor(Number::from(17)->to(29)->stepBy([$this, 'getNextPrime']))
              ->endsWith("These are the primes, that we find fine!")
      );
  }
  public function getNextPrime(int $number)
  {
    switch ($number)
    {
      case 13 :
        return 17;
      case 17 :
        return 19;
      case 19 :
        return 23;
      case 23 :
        return 29;
    }
    return 0;
  }

    /**
     * @param $number
     * @return int
     */
    public function getNextEven($number)
    {
        $number = $number + 2;
        return $number;
    }
}
