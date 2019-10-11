<?php

declare(strict_types=1);

class Word
{
    /**
     * ID
     *
     * @var int
     */
    protected $id;

     /**
     *
     * @var string
     */
    protected $word_text;

    /**
     *
     * @var int
     */
    protected $word_complexity_score;

    /**
     *
     * @var bool
     */
    protected $word_is_complex;

    /**
     * @var int
     */
    protected $word_frequency;

    /**
     * @var bool
     */
    protected $word_is_frequent;

    protected function getWordComplexityScore()
    {
        return $this->word_complexity;
    }

    protected function setWordComplexityScore($wordComplexityScore)
    {
        $this->word_complexity_score = $wordComplexityScore;
        return $this;
    }

    protected function generateWordComplexityScore()
    {

    }

    protected function isWordComplex($word)
    {

    }


}
