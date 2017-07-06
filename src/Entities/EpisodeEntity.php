<?php

namespace FingerString\Entities;

use FingerString\Entities\Traits\CreatedAtTrait;
use FingerString\Entities\Traits\DeletedTrait;
use FingerString\Entities\Traits\WatchedTrait;

/**
 * EpisodeEntity
 */
class EpisodeEntity
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
     * @var $number
     */
    protected $number;

    /**
     * @var $description
     */
    protected $description;

    /**
     * @var $watched
     */
    protected $watched;

    /**
     * @var $createdAt
     */
    protected $createdAt;

    /**
     * @var $deleted
     */
    protected $deleted;

    /**
     * Return the episode's identifier.
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
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return $number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

}