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
                foreach ($names as $name) {
                    $this->sing( $style1->sayLineFor($name) );
                }
                break;
            case 2 :
                foreach ($names as $name) {

                    $this->sing( $style2->sayLineFor($name) );
                }
                break;
            case 3 :
                foreach ($names as $name) {
                    $this->sing( $style3->sayLineFor($name)) ;
                }
                break;
        }
    }


}
