<?php


class Number
{
    const ASC = 1;
    const DESC = -1;

    private $start;

    private $end;

    private $direction;

    public static function from($start) {
        return new self($start);
    }

    public function __construct($start) {
        $this->start = $start;
    }

    public static function minusOne($number)
    {
        return $number - 1;
    }

    public function to($end) {
        $this->end = $end;
        $this->direction = $this->start < $this->end ? self::ASC : self::DESC;
        return $this;
    }

    public function stepBy($stepLogic) {
        $current = $this->start;
        $steps = [];
        do {
            $steps[] = $current;
            $current = call_user_func($stepLogic, $current);
        } while($this->hasNext($current));
        $steps[] = $current;
        return $steps;
    }

    private function hasNext($current)
    {
        if (self::ASC === $this->direction) {
            return $current < $this->end;
        } else {
            return $current > $this->end;
        }
    }
}