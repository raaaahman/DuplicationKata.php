<?php

class Lesson31 extends Song
{
    public function singSong($style, $names)
    {
        $style1 = new SongPatternStyle1();
        $style2 = new SongPatternStyle2();
        $style3 = new SongPatternStyle3();

        switch ($style) {
            case 1 :
                $this->singPattern( $style1->repeatFor($names) );
                break;
            case 2 :
                $this->singPattern( $style2->repeatFor($names) );
                break;
            case 3 :
                $this->singPattern( $style3->repeatFor($names)) ;
                break;
        }
    }


}
