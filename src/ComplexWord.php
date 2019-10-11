<?php

should just be a column rather than a separate table?

declare(strict_types=1);

class ComplexWord
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
        $this->id = $id;
        return $this;
    }
}
