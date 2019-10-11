<?php

declare(strict_types=1);

class Sentence
{
    /**
     * ID
     *
     * @var int
     */
    protected $id;

     /**
     * @var int
     */
    protected $sentence_length;


    public function getSentenceLength()
    {
        return $this->sentence_length;
    }

    public function setWordCount($sentenceLength)
    {
        $this->sentenceLength = $sentenceLength;
        return $this;
    }


}
