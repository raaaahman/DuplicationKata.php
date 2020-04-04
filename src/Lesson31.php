<?php

class Lesson31 extends Song
{
    public function singSong($style, $names)
    {
        $selectedStyle = $this->selectStyle($style);

        $this->singPattern($selectedStyle->repeatFor($names));
    }

    /**
     * @param $style
     * @return mixed
     */
    public function selectStyle($style)
    {
        $defaultLine = "Hello %s, it's nice to meet you.";
        $style1 = new SongPatternWithStyle($defaultLine);
        $style1->registerSpecialLine("Hip Hip Horray! For %s")->when(Word::startsWith("L"));
        $style2 = new SongPatternStyle2();
        $style3 = new SongPattern($defaultLine);

        $styles = [$style1, $style2, $style3];

        $selectedStyle = $styles[$style - 1];
        return $selectedStyle;
    }


}
