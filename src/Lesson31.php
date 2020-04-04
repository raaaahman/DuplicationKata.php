<?php

class Lesson31 extends Song
{
    public function singSong($style, $names)
    {
        $style1 = new SongPatternStyle1();
        $style2 = new SongPatternStyle2();
        $style3 = new SongPatternStyle3();

        $styles = [ $style1, $style2, $style3 ];

        $selectedStyle = $styles[$style-1];

        $this->singPattern($selectedStyle->repeatFor($names));
    }


}
