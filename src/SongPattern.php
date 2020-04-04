<?php


class SongPattern
{

    protected $line;
    protected $lines;

    public function __construct($defaultLine)
    {
        $this->line = $defaultLine;
    }

    public static function create($defaultLine)
    {
        return new SongPatternWithStyle($defaultLine);
    }

    public function sayLineFor($word)
    {
        return $this->replaceVariables($this->line, $word);
    }

    public function repeatFor($words)
    {
        foreach ($words as $word) {
            $this->lines[] = $this->sayLineFor($word);
        }
        return $this;
    }

    public function endsWith($line) {
        $this->lines[] = $line;
        return $this;
    }

    public function singIt() {
        return implode(PHP_EOL, $this->lines);
    }

    /**
     * @param $replacement
     * @return string
     */
    public function replaceVariables($line, $replacement)
    {
        $line = preg_replace_callback(
            '/\{\{(\w+)\|?(\w*)\}\}/',
            function ($matches) use ($replacement) {
                if (!empty($matches[2])) {
                    $replacement = call_user_func(array($this, $matches[2]), $replacement);
                }
                return $replacement;
            },
            $line
        );

        return $line;
    }

    /**
     * @param $name
     * @return string
     */
    public function strToUpper($name)
    {
        return strtoupper($name);
    }

    public function minusOne($number) {
        return $number - 1;
    }
}