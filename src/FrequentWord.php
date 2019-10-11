<?php

should just be a column rather than a separate table?

declare(strict_types=1);

class FrequentWord
{
    /**
     * ID
     *
     * @var int
     */
    protected $id;

    /**
    * @return int
    */
    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {

    }

    public function getTextSubmissionId()
    {

    }

    public function setTextSubmissionId()
    {

    }
}
