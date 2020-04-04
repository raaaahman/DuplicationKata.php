<?php

class Lesson21 extends Song
{
  public function singSong($style, $names)
  {
      $songStyle = $this->selectStyle($style);

      $this->singPattern($songStyle->repeatFor($names));
  }

    /**
     * @param $style
     * @return mixed
     */
    public function selectStyle($style)
    {
        $defaultLine = "Hello {{name}}, it's nice to meet you.";
        $songStyles = [
            SongPatternWithStyle::create($defaultLine)
                ->registerSpecialLine("Hip Hip Horray! For {{name}}")
                ->when(Word::startsWith('L')),
            SongPatternWithStyle::create($defaultLine)
                ->registerSpecialLine("Say yeah! Say yo! Say {{name}}")
                ->when(Word::contains('am', 1)),
            SongPatternWithStyle::create($defaultLine)
        ];

        $songStyle = $songStyles[$style - 1];
        return $songStyle;
    }
}
