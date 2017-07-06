<?php

namespace FingerString\Entities;

use FingerString\Entities\Traits\CreatedAtTrait;
use FingerString\Entities\Traits\DeletedTrait;
use FingerString\Entities\Traits\WatchedTrait;

/**
 * ImdbEntity
 */
class ImdbEntity
{
    use CreatedAtTrait, DeletedTrait, WatchedTrait;

    /**
     * @var $id
     */
    protected $id;

    /**
     * @var $title
     */
    protected $title;

    /**
     * @var $year
     */
    protected $year;

    /**
     * @var $description
     */
    protected $description;

    /**
     * Return the imdb's identifier.
     *
     * @return int
     */
    public function getIdentifier()
    {
        return $this->id;
    }

    /**
     * @param $id int
     */
    public function setIdentifier($id)
    {
        $this->id = $id;
    }

    /**
     * @return $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return $year
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

}