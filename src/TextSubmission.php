<?php

declare(strict_types=1);

class TextSubmission
{
    /**
     * ID
     *
     * @var int
     */
    protected $id;

    /**
     * Contents of the text submitted
     *
     * @var string
     */
    protected $contents;

    /**
     *
     * @var string
     */
    protected $rating;

    /**
     *
     * @var int
     */
    protected $word_count;

    /**
     *
     * @var int
     */
    protected $paragraph_count;

    /**
     *
     * @var int
     */
    protected $sentence_count;

    /**
     *
     * @var int
     */
    protected $average_sentence_length;

    /**
     *
     * @var int
     */
    protected $average_paragraph_length;

     /**
      * @return int
      */
     public function getId()
     {
        return $this->id;
     }

     /**
      *
      */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getContents()
    {
        return $this->contents;
    }

    public function setContents($contents)
    {
        $this->contents = $contents;
        return $this;
    }

    public function generateRating()
    {
        if ($score <= 75) {
            $this->rating = 'RED';
        } else if ($score < 75 && $score >= 50) {
            $this->rating = 'AMBER';
        } else if ($score < 50) {
            $this->rating = 'GREEN';
        }
       return $this->rating;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function setRating($rating)
    {
        $this->rating = $rating;
        return $this;
    }

    public function getParagraphCount()
    {
        return $this->paragraph_count;
    }

    public function setParagraphCount($paragraphCount)
    {
        $this->paragraph_count = $paragraphCount;
        return $this;
    }



}
