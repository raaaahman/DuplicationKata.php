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
        $defaultLine = "Hello {{name}}, it's nice to meet you.";
        $style1 = new SongPatternWithStyle($defaultLine);
        $style1->registerSpecialLine("Hip Hip Horray! For {{name}}")->when(Word::startsWith("L"));
        $style2 = new SongPatternWithStyle($defaultLine);
        $style2->registerSpecialLine("{{name|strToUpper}}! Yay {{name}}!")->when(Word::doesNotContain('a'));
        $style3 = new SongPattern($defaultLine);

        $styles = [$style1, $style2, $style3];

        $selectedStyle = $styles[$style - 1];
        return $selectedStyle;
    }


}
