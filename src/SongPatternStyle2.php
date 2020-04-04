<?php


class SongPatternStyle2 extends SongPattern
{

    /**
     * SongPatternStyle2 constructor.
     */
    public function __construct()
    {
        parent::__construct("Hello %s, it's nice to meet you.");
    }

    /**
     * @param $name
     */
    public function sayLineFor($name)
    {
        if (strpos($name, "a") !== false) {
            return strtoupper($name) . "! Yay " . $name . "!";
        } else {
            return parent::sayLineFor($name);
        }
    }
}