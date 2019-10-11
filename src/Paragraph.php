<?php

declare(strict_types=1);

class Paragraph
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
    protected $sentence_count;

     /**
     * @var int
     */
    protected $word_count;

    public function getSentenceCount()
    {
        return $this->wordCount;
    }

    public function setSentenceCount($sentenceCount)
    {
        $this->sentence_count = $sentenceCount;
        return $this;
    }

    public function getWordCount()
    {
        return $this->wordCount;
    }

    public function setWordCount($wordCount)
    {
        $this->word_count = $wordCount;
        return $this;
    }
}
