<?php


class SongPatternStyle1 extends SongPattern
{

    public function __construct()
    {
        parent::__construct("Hello %s, it's nice to meet you.");
    }

    /**
     * @param $name
     */
    public function sayLineFor($name)
    {
        if (strpos($name, "L") === 0) {
            return "Hip Hip Horray! For " . $name;
        } else {
            return parent::sayLineFor($name);
        }
    }

}